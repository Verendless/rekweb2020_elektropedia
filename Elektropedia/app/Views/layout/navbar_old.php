<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Elektropedia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link" href="/pages/about">About</a>
                <a class="nav-link" href="/pages/contact">Contact</a>
                <a class="nav-link" href="/komik/">Comics</a>
                <a class="nav-link" href="/orang/">Orang</a>
            </div>
            <form class="form-inline mr-auto">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Search</button>
            </form>
            <?php if (logged_in()) : ?>
                <a class="nav-link" href="/logout">Logout</a>
            <?php else : ?>
                <a class="nav-link" href="/login">Login</a>
            <?php endif ?>
        </div>
    </div>
</nav>