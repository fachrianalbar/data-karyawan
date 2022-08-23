<!DOCTYPE html>
<html>

<head>
    <title>Tables</title>
    <!-- Bootstrap -->
    <link href="<?= base_url('global'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('global'); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('global'); ?>/assets/styles.css" rel="stylesheet" media="screen">
    <link href="<?= base_url('global'); ?>/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <script src="<?= base_url('global'); ?>/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">Registrasi Data Pelamar</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

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
                        <?php if ($this->session->userdata('role') == "1") : ?>
                            <li>
                                <a href="#">Data Pelamar</a>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('role') == "2") : ?>
                            <li>
                                <a href="#">Biodata Pelamar</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>