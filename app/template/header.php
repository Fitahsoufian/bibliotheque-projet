<header class="main">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a  class="navbar-brand" href="/index"> <i class="fa fa-book"></i>YouCode Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="#">Contact Us</a>
                <?php if (!\PHPMVC\LIB\Session::Get('user')){?>
                <a class="nav-link " href="/user/login" tabindex="-1" aria-disabled="true">My account</a>
                <?php } else { ?>
                <a class="nav-link " href="/user/logout" tabindex="-1" aria-disabled="true"
                   onclick="if (!confirm('Do you want to log out?')) return false;"><i
                            class="fas fa-sign-out-alt"></i> Log Out</a>
                <?php } ?>

            </div>
        </div>
    </nav>
    <!--    <h1>Admin panel</h1>-->
</header>