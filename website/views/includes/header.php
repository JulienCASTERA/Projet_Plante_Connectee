<div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <img src="assets/images/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="" />
                <a href="/home">Connected Flowers</a>
            </div>
            <div class="list-group list-group-flush">
                <a href="/dashboard" class="list-group-item list-group-item-action bg-light">Tableau de bord</a>
                <a href="/help" class="list-group-item list-group-item-action bg-light">Aide</a>
                <a href="/dashboard?addplant" class="list-group-item list-group-item-action bg-light">Ajouter une plante</a>
                <a href="/contact" class="list-group-item list-group-item-action bg-light">Support</a>
                <a href="/disconnect" class="list-group-item list-group-item-action bg-light">Deconnexion</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <ul class="navbar-nav ml-auto mt-12 mt-lg-12">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Bienvenue, <?= ucfirst($_SESSION['username'])?> <span class="sr-only">(current)</span></a>
                    </li>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item avatar">
                            <a class="nav-link p-0" href="#">
                                <img src="assets/images/user.svg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                            </a>
                        </li>
                    </ul>
                </ul>

            </nav>