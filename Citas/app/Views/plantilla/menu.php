<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">




                <?php if (session('id_rol') == 1) {  ?>
                    <!-- Usuarios -->
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usuarios" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Usuarios
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="usuarios" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/Users"><i class="fas fa-user-edit"></i> &nbsp;Usuario</a>
                            <a class="nav-link" href="/Roles"><i class="fas fa-box"></i> &nbsp;Roles</a>
                        </nav>
                    </div>

                    <!-- Citas -->


                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-dolly-flatbed"></i></div>
                        Citas
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div id="cuatro" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/citas"><i class="fas fa-cash-register"></i> &nbsp;Citas</a>

                        </nav>
                    </div>

                <?php } ?>


                <?php if (session('id_rol') == 2) {  ?>

                    <!-- Citas -->


                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                        Citas
                        <div class="sb-sidenav-collapse-arrow"><i class="fa-solid fa-calendar"></i></div>
                    </a>
                    <div id="cuatro" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/citas"><i class="fas fa-calendar"></i> &nbsp;Citas</a>

                        </nav>
                    </div>

                <?php } ?>

            </div>
        </div>
        <div class="sb-sidenav-footer">

        </div>
    </nav>
</div>