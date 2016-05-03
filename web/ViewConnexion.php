

<?php
Header_HTML();
?>
<div class="container home  well col-md-offset-2 col-md-8">
    <form role="form" method="POST" action="" enctype="multipart/form-data">
        <div class="panel panel-default">
            <div class="panel-body">Veuillez entrer les informations ci-dessous</div>
            <div class="connexion">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="Login">Login :</label>
                            <input id="Login" type="text" required="required" class="form-control" name="Login">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="Password">Mot de passe :</label>
                            <input id="Password" required="required" type="password" class="form-control" name="Password">
                        </div>
                    </div>
                </div>

                <?php
                if (isset($erreur)) {
                    echo $erreur;
                }
                ?>
                <div class="checkbox">
                    <label><input type="checkbox">Se souvenir</label>
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </div>
        </div>
</div>
</form>
</div>
