 <div id="modaledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="socinel" aria-hidden="true">
  
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title" id="socinel">Formulaire de creation de compte</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <input type="text" name="nom"   class="form-control" placeholder="Login" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="prenom"   class="form-control" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email"   class="form-control" placeholder="votre email" required/>
                    </div>
                    <div class="form-group">
                        <select name="role"   class="form-control" required >
                            <option></option>
                            <option>administrateur</option>
                            <option>agent</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <input type="text" name="login"  class="form-control" placeholder="votre login" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass"  class="form-control" placeholder="votre password" required/>
                    </div>
                    <center><input type="submit" name="sub" class="btn btn-primary" value=" Envoyer"> <input type="reset" class="btn btn-primary" value=" Annuler"> </center>
                </form>
            </div>
        </div>
    </div>
   </div>