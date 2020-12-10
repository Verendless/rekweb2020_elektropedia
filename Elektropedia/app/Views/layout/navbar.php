<nav class="navbar navbar-expand-lg  navbar-dark bg-dark shadow">
    <div class="container ">
        <a class="navbar-brand py-0" href="/">
            <h5 style="padding-top: 5px;">Elektropedia</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item py-0" href="#">Laptop</a>
                        <div class="dropdown-divider py-0"></div>
                        <a class="dropdown-item py-0" href="#">Komputer</a>
                        <div class="dropdown-divider py-0"></div>
                        <a class="dropdown-item py-0 " href="#">Smartphone</a>
                    </div>
                </li>
            </ul>
            <div class="navbar-nav col-md-12 col-sm-12">
                <form class="form-inline my-sm-2 my-md-0 ml-md-2 mr-md-0 col-md-9 col-sm-1 d-flex justify-content-center-md"">
                <input class=" form-control form-control-sm mr-sm-2 col-md-10 col-sm-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-sm btn-outline-success my-2 my-sm-0 col-md-1.5 col-sm-0" type="submit">Search</button>
                </form>
                <a class="nav-link pl-md-1.5 pl-sm-0 ml-sm-0" href="/logout" style="padding-top: 5px;">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule=" evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                </a>
                <?php if (logged_in()) : ?>
                    <a class="nav-link pl-md-1.5 pl-sm-0 ml-sm-0" href="/logout">User</a>
                    <a class="nav-link pl-sm-0" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-link pl-md-1.5 pl-sm-0 ml-sm-0" href="/register">Register</a>
                    <a class="nav-link pl-sm-0" href="/login">Login</a>
                <?php endif ?>
            </div>
        </div>

    </div>
</nav>