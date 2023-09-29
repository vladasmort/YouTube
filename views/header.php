<nav class="navbar">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div class="centered-container justify-content-center"> <!-- Add justify-content-center here -->
            <a href="./" class="logo-link">
                <img src="pictures/YouTubePremium.png" alt="">
            </a>
        </div>

        <form action="./" method="GET" class="input-group w-50">
            <input type="text" class="form-control" name="search">
            <button class="btn btn-outline-dark px-4"><i class="bi bi-search"></i></button>
        </form>

        <div class="m-0">
            <?php if (!isset($_SESSION['user_id'])) : ?>
                <a href=" ?page=register">
                    <h3 class="btn btn-danger btn-sm text-light">Sign up</h3>
                </a>
                <a href="?page=login">
                    <h3 class="btn btn-danger btn-sm text-light">Log in</h3>
                </a>
            <?php endif; ?>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <a href="?page=addVideo">
                    <h3 class="btn btn-warning btn-sm text-light">Add Video</h3>
                </a>
                <a href="?page=logout">
                    <h3 class="btn btn-danger btn-sm text-light">Log out</h3>
                </a>

            <?php endif; ?>
        </div>

    </div>
</nav>