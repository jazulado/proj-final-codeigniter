<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo base_url();?>assets/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">MODULO INFORMES</h3>
                    <li>
                        <a href="<?php echo site_url("")?>"> <i class="menu-icon fa fa-home"></i>Inicio </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("pacientes")?>"> <i class="menu-icon fa fa-users"></i>Pacientes </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("formulas")?>"> <i class="menu-icon fa fa-file-text-o"></i>Formulas medicas </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("historia")?>"> <i class="menu-icon fa fa-medkit"></i>Historia Clinica </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("citas")?>"> <i class="menu-icon fa fa-medkit"></i>Citas </a>
                    </li>
                    <h3 class="menu-title">ADMINISTAR</h3>
                    <li>
                        <a href="<?php echo site_url("medicamentos")?>"> <i class="menu-icon fa fa-medkit"></i>Medicamentos </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("medicos")?>"> <i class="menu-icon fa fa-user-md"></i>Medicos </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->