
<?php
//    include_once('../ModelE/db.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Germania Fanion Login</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet"> 
        <link href="css/buttons.css" rel="stylesheet">
	<script src="js/jquery.placeholder.min.js"></script>	
        <script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        
        <!--
          create a function here that takes all the parameters of a successful logedin User and call that function in the the 
          indexadmin page so u can use the parameters to display like the log in and other stuff
        -->
        
        
        <?php 
        include_once('../ModelE/db.php');
        $bd = new MicrosolDB();
        if (isset($_POST['conn'])) {
            $login = addslashes(htmlspecialchars(trim($_POST['login'])));
            $pass = sha1(addslashes(htmlspecialchars(trim(($_POST['password'])))));
            $resultats = $bd->bdd->query("SELECT * FROM accounts WHERE username='" . $login . "' && pwd='" . $pass . "' ");
            $req = $resultats->fetch();
            /*    Query to get name and other stuffs about user    */
            
           
            
            if ($req == NULL) {
                    echo"<script language='javascript'> alert('Invalid Username or Password')</script>";
            }
            else {
                    $_SESSION["acctid"] = $req["acctid"];
                    $_SESSION["login"] = $req["username"];
//                    $_SESSION["login"] = $login;
                    $_SESSION["role"] = $req["role"];
                    $_SESSION["password"] = $req["pwd"];
                    $id = $req["acctid"];
                    
                    /* session methods starts here   */
                    
//                    function sessionsV(){
//                        $usrN = $_SESSION["login"];
//                    }
                    
                    /* session methods ends here   */
                    
                    if ($_SESSION["role"] == "ADMINISTRATOR") {
                        header("Location:indexadmin.php");
                    }
                    
                    elseif($_SESSION["role"] == "comptable") {
                      header("Location:./Modele/db.php");
                     }
                
            }
            
            
        }
       ?> 
       
         <!-- la fanction permet des rester sur la parge d'accueil meme quand on clique sur la touche qui permet de rentrée completement  -->
        <?php
        if (isset($_GET["lock"])) {
            session_unset();
            session_destroy();
            header("Location:./");
            exit();
        }
        ?>
        
        

			<header>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
			</header>
			
			<section class="main">
                            <form class="form-1" method="post">
                                <fieldset><legend> <span class="button button-3d-primary button-rounded"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Microsol Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> </legend>
					<p class="field">
                                           <input type="text"  name="login" placeholder="Username" required>
				           <i class="glyphicon glyphicon-user"></i>
					</p>
					<p class="field">
				           <input type="password" name="password" placeholder="Password" required>
					   <i class="glyphicon glyphicon-lock"></i>
					</p>
					<p class="submit">
					   <button type="submit" name="conn"><i class="glyphicon glyphicon-arrow-right "></i></button>
					</p>
                                     </fieldset>
				</form>
			</section>
        </div>
    </body>
</html>