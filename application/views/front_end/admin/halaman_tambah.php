<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SukaPerpus</title>

    <!-- CSS only -->
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">AdminSukaPerpus</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url(); ?>auth_c/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                </li>
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Halaman Tambah Buku</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <form role="form" method="POST" action="<?= base_url('Databuku_C/tambah_buku')  ?>">
                            <div class="form-group">
                                <label for="nama_buku">Nama Buku</label>
                                <input class="form-control" type="text" name="nama_buku" id="nama_buku" value="<?= set_value('nama_buku');?>" >
                                <p class="help-block">Masukan nama buku</p>
                            </div>
                            <div class="form-group">
                                <label for="nama_penulis">Nama Penulis</label>
                                <input class="form-control" type="text" name="nama_penulis" id="nama_penulis" value="<?= set_value('nama_penulis');?>" >
                                <p class="help-block">Masukan nama penulis</p>
                            </div>
                            <div class="form-group">
                                                    <label>Genre</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Petualangan" <?= (set_value('Petualangan')) ?> >Petualangan
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Fantasi" <?= (set_value('Fantasi')) ?>>Fantasi
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Fiksi Ilmiah" <?= (set_value('Fiksi Ilmiah')) ?>>Fiksi Ilmiah
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Sejarah" <?= (set_value('Sejarah')) ?>>Sejarah 
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Sastra" <?= (set_value('Sastra')) ?>>Sastra
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Humor" <?= (set_value('Humor')) ?>>Humor
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Horor" <?= (set_value('Horor')) ?>>Horor
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Romansa" <?= (set_value('Romansa')) ?>>Romansa
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Thrillers" <?= (set_value('Thrillers')) ?> >Thrillers
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="genre[]" alt="Checkbox" value="Wester" <?= (set_value('Western')) ?>>Western
                                                        </label>
                                                    </div>
                                                </div>
                            <div class="form-group" for="tahun">
                                <label>Tahun Buku</label>
                                <input class="form-control" type="text" name="tahun" id="tahun" value="<?= set_value('tahun');?>" >
                                <p class="help-block">Masukan tahun buku</p>
                            </div>
                            <div class="form-group" for="deskripsi">
                                <label>Deskripsi</label>
                                <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="<?= set_value('deskripsi');?>" >
                                <p class="help-block">Masukan tahun Deskripsi</p>
                            </div>
                            <div class="form-group" for="links">
                                <label>Links</label>
                                <input class="form-control" type="text" name="links" id="links" value="<?= set_value('links');?>" >
                                <p class="help-block">Links</p>
                            </div>
                          <input type="submit" class="btn btn-default"></input>
                        <br>
                        <br>
                        </form>
                    </div>
                </div>


            </div>

        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/admin_assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/admin_assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>assets/admin_assets/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>assets/admin_assets/js/startmin.js"></script>

        <!-- JavaScript Bundle with Popper -->

</body>

</html>