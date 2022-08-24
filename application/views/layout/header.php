<!DOCTYPE html>
<html>

<head>
    <title><?= $judul; ?></title>
    <!-- Bootstrap -->
    <link href="<?= base_url('global'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('global'); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('global'); ?>/assets/styles.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('global'); ?>/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <script src="<?= base_url('global'); ?>/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<?= base_url('global'); ?>/vendors/jquery-1.9.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <!-- <a href="#">Registrasi Data Pelamar</a> -->
                <img class="brand" src="<?= base_url('global'); ?>/images/logo_edi.png" alt="Logo Pelindo" width="6%">
                <!-- <img src="https://edi-indonesia.co.id/wp-content/uploads/2018/10/logo_transparant.png" alt="EDII" id="logo" data-height-percentage="54" data-actual-width="170" data-actual-height="62"> -->
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?= $email; ?> <i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="<?= base_url('logout'); ?>">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li>
                            <a href="<?= base_url("admin"); ?>">Data Pelamar</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>