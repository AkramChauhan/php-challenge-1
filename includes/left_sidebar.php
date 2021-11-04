<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?php echo SITEURL ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="<?php echo SITEURL ?>clients">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Clients
                </a>
                <a class="nav-link" href="<?php echo SITEURL ?>users">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
                <a class="nav-link" href="<?php echo SITEURL ?>cities">
                    <div class="sb-nav-link-icon"><i class="fas fa-map-marker"></i></div>
                    Cities
                </a>
                <div class="sb-sidenav-menu-heading">System</div>
                <a class="nav-link" href="<?php echo SITEURL ?>logout">
                  <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                    Logout
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION['AUTH_USER_NAME']; ?>
        </div>
    </nav>
</div>