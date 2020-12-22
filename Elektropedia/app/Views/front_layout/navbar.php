<nav class="navbar navbar-expand-lg navbar-white bg-white shadow sticky-top">
    <div class="container ">
        <a class="navbar-brand py-0 text-dark" href="/">
            <h5 style="padding-top: 5px;">Elektropedia</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item py-0 text-dark" href="#">Semua Kategori</a>
                        <div class="dropdown-divider py-0 text-dark"></div>
                        <a class="dropdown-item py-0 text-dark" href="">Laptop</a>
                        <div class="dropdown-divider py-0 text-dark"></div>
                        <a class="dropdown-item py-0 text-dark" href="#">Smartphone</a>
                        <div class="dropdown-divider py-0 text-dark"></div>
                        <a class="dropdown-item py-0 text-dark" href="#">Camera</a>
                        <div class="dropdown-divider py-0 text-dark"></div>
                        <a class="dropdown-item py-0 text-dark" href="#">Accessories</a>
                    </div>
                </li>
            </ul>
            <div class="navbar-nav col-md-11 col-sm-12 mx-md-auto">
                <form class="form-inline my-sm-2 my-md-0 ml-md-2 mr-md-0 col-md-9 col-sm-1 d-flex justify-content-center-md"">
                <input class=" form-control form-control-sm mr-sm-2 col-md-10 col-sm-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-sm btn-outline-primary my-2 my-sm-0 col-md-1.5 col-sm-0" type="submit">Search</button>
                </form>
                <?php if (logged_in()) : ?>
                    <?php if (in_groups('Admin')) : ?>
                        <a class="nav-link pl-sm-0 mx-md-auto text-dark" href="<?= base_url(); ?>/admin/">Dashboard</a>
                    <?php else : ?>
                        <a class="nav-link pl-md-1.5 pl-sm-0 ml-sm-0 mx-md-auto text-dark" href="/" style="padding-top: 5px;">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule=" evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </a>
                        <a class="nav-link pl-sm-0  mx-md-auto text-dark" href="<?= base_url(); ?>/user/"><?= user()->username; ?></a>
                    <?php endif ?>
                    <a class="nav-link pl-sm-0 mx-md-auto text-dark" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-link pl-sm-0  mx-md-auto text-dark" href="<?= base_url(); ?>/register">Register</a>
                    <a class="nav-link pl-sm-0 mx-md-auto text-dark" href="/login">Login</a>
                <?php endif ?>
            </div>
        </div>

    </div>
</nav>