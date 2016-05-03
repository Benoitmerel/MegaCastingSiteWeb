<?php
Header_HTML_Connecte();
?>

<br>
<br>
<br>

<div class="panel panel-default container well col-md-offset-2 col-md-8">
    <div class="panel-heading">Changer de mot de passe</div>
    <div class="panel-body">

        <form role="form" method="POST" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="AncienPassword">Ancien mot de passe :</label>
                        <input type="password" name="AncienPassword" id='AncienPassword' class="form-control"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Password">Nouveau mot de passe :</label>
                        <input type="password" name="Password" id='Password' class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Passwordconfirm">Confirmation du mot de passe :</label>
                        <input type="password" name="Passwordconfirm" id='Passwordconfirm' class="form-control"/>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="js/Function.js"></script>
            <button type="submit" name="Envoyer" id="Envoyer" class="btn btn-default" onclick="validatePassword()">Envoyer</button>
    </div>
</form>
</div>

