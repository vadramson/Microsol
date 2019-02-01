<?php
    session_start();
?> 


<div id="modaledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="socinel" aria-hidden="true">
  
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title" id="socinel">Edit Users' Profile</h4>
            </div>
            <div class="modal-body">
                
             <?php
                
                if (isset($_POST['submit'])) {
                $bdd = new STAGEDB();
                
                $resuli = $this->bdd->query("SELECT * FROM user ") or die(mysql_error());
                $reqti = $resuli->fetch();
                
                
                $remi = new ProfilManager($bdd->bdd);
               // print_r($rem);
                $profili = new Profil(array(
                            'login' => $_POST['login'],
                            'pass' => sha1($_POST['pass']),
                            'Npass' => sha1($_POST['Npass']),
                            'role' => $_POST['role'],
                        ));
                print_r($profili);

                $remi->Update_user($profili);
            } else {

            }
             ?>   
                
                
                
                <form action="#" method="POST">
                    <div class="form-group">
                        <input type="text" name="pass" placeholder="OLD Password"  class="form-control"    required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Npass" placeholder="NEW Password"   class="form-control"    required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="login"   class="form-control" placeholder="Login"  required/>
                    </div>
                    
                    <div class="form-group">
                        <select name="role"   class="form-control" required >
                            <option></option>
                            <option>administrateur</option>
                            <option>agent</option>
                        </select>

                    </div>
           
                    <center><input type="submit" name="submit" class="btn btn-primary" value=" Save"> <input type="reset" class="btn btn-primary" value=" Cancel"> </center>
                </form>
            </div>
        </div>
    </div>
   </div>