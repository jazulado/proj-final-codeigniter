<!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-hospital-o"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <!--
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url();?>assets/images/admin.jpg" style="width: 60px;" alt="User Avatar">
                        </a>
                        
                        

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>


                            <a class="nav-link" "><i class="fa fa-power-off"></i> Salir</a>
                        </div>
                    
                    </div>
                -->
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Bienvenido, <?php echo $nombreusuario; ?></li>
                                <li>
                                    <a  role="button" href="<?php /*echo site_url('salir')*/  echo site_url("salir");?>" class="btn btn-danger">Salir</a>
                                    
                                </li>
                            </ol>
                        </div>
                    </div>
                    

                </div>
            </div>

        </header>

        <!-- /header -->