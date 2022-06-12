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
    <link href="<?php echo base_url();?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/admin_assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/admin_assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/admin_assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/admin_assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/admin_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
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
                    <h1 class="page-header"><?= $title ?></h1>
                </div>
            </div>

            <div class="row">
                    
                        <div class="col-sm-6">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="text">
                                    <span class="value">614</span>
                                    <label class="text-muted">Hero Widget</label>
                                </div>
                                <div class="options">
                                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> Secondary Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-widget well well-sm">
                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="text">
                                    <span class="value">73</span>
                                    <label class="text-muted">Hero Widget</label>
                                </div>
                                <div class="options">
                                    <a href="javascript:;" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-search"></i> Secondary Action</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>

           </div>

           <!-- /.row -->
           <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?= $title ?>
                                </div>
                                <br>
                                <div class="submit">
                                <a class="btn btn-success" href="<?= site_url('Databuku_C/halaman_tambah') ?>">Tambah Data Buku</a>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                          
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Buku</th>
                                                    <th>Penulis</th>
                                                    <th>Genre</th>
                                                    <th>Tahun</th>
                                                    <th>Deskripsi</th>
                                                    <th>Links</th>
                                                </tr>
                                           
                                         
                                                <tr>
                                                    <?php foreach($data_buku as $i => $data) :  ?>
                                                    <td><?= ++$i; ?></td>
                                                    <td><?= $data->nama_buku ?></td>
                                                    <td><?= $data->penulis ?></td>
                                                    <td><?= $data->genre ?></td>
                                                    <td><?= $data->tahun ?></td>
                                                    <td><?= $data->deskripsi ?></td>
                                                    <td><?= $data->links ?></td>
                                                    
                                                    <td>
                                                    <a type="submit" class="btn btn-primary" href="<?php echo base_url();?>Databuku_C/edit/<?= $data->id;?>">Edit Data Buku</a>
                                                    <a type="submit" class="btn btn-danger" href="<?php echo base_url();?>Databuku_C/hapusdata/<?= $data->id;?>">Hapus Data Buku</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>

                                          
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                    </div>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/admin_assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/admin_assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/admin_assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/admin_assets/js/startmin.js"></script>

<!-- JavaScript Bundle with Popper -->

</body>
</html>
