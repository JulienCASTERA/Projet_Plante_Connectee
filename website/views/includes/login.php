<div class="col-6 text-center justify-content-center align-self-center" style="margin-left: auto;margin-right: auto;">
        <div class="jumbotron">
            <?php if (count($errors) > 0) : ?>
	        <div class="alert alert-danger">
		    <?php foreach ($errors as $error) : ?>
			    <?php echo $error ?>
		    <?php endforeach ?>
	        </div>
            <?php  endif ?>
            <h1 class="display-4">Connexion</h1>

        
        <form class="text-center border border-light p-5" method="post" action="/login">
        <p class="h4 mb-4">Veuillez rentrer vos identifiants</p>
        <input type="text" id="username" name="username" class="form-control mb-4" placeholder="Identifiant" autocomplete="username" required autofocus>
        <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Mot de passe" autocomplete="current-password" required>

        <div class="d-flex justify-content-around">
            <div>
            </div>
            <div>            
            </div>
        </div>
        <button class="btn btn-info btn-block my-4" type="submit">Se connecter</button>
    </form>
    <p>Vous n'avez pas de compte ? Il suffit d'acheter l'une de nos plantes, un compte est automatiquement généré.</p>


    </div>
</div>