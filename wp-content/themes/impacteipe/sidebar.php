<section>
    <nav class="navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-responsive" src="<?= get_template_directory_uri() . '/assets/img/logo.png'; ?>" alt="Logo da Impacteipe" />
            </a>
            <button class="btn btn-outline-light after" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                Menu &nbsp;&nbsp;
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end navbar-dark bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Impacteipe Records</h5>
                    <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Lançamentos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Ingressos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Produções</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>