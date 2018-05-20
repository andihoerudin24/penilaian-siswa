<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Andi Hoerudin</title>
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/datepicker3.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#"><span>Sistem Penilaian</span></a>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">

                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">
                                <em class="fa fa-xs fa-user color-white">&nbsp;Ganti Password</em>
                            </button>



                        </li>
                    </ul>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <!-- update  -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('Admin/Guru/update'); ?>
                    <div class="modal-body">
                        <div class="form-group"><label>Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group"><label>password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>


        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <?php
                    if ($this->session->userdata('level') == 1) {
                        echo "<img src=" . base_url() . "uploads/admin/admin.jpg class='img-responsive' alt=''>";
                    } elseif ($this->session->userdata('level') == 3) {
                        echo "<img src=" . base_url() . "uploads/siswa/" . $this->session->userdata('foto') . " class='img-responsive' alt=''>";
                    }elseif ($this->session->userdata('level') == 2) {
                        echo "<img src=" . base_url() . "uploads/guru/" . $this->session->userdata('foto') . " class='img-responsive' alt=''>";
                    }
                    ?>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?php echo $this->session->userdata('nama') ?></div>
                    <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <form role="search">
                <div class="form-group">
                </div>
            </form>
            <ul class="nav menu">
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <li><?php echo anchor('Admin/Dashboard', '<em class="fa fa-dashboard"></em>&nbsp;Dashboard'); ?></li>
                    <li><?php echo anchor('Admin/Siswa', '<em class="fa fa-calendar">&nbsp;</em>Data siswa'); ?></li>
                    <li><?php echo anchor('Admin/Guru', '<em class="fa fa-bar-chart">&nbsp;</em> Data Guru'); ?></li>
                    <li><?php echo anchor('Admin/Pelanggaran', '<em class="fa fa-toggle-off">&nbsp;</em>Data Pelanggaran'); ?></li>
                    <li><?php echo anchor('Admin/Penilaian', '<em class="fa fa-clone">&nbsp;</em>Penilaian'); ?></li>
                    <li><?php echo anchor('Admin/History', '<em class="fa fa-clone">&nbsp;</em>History Pelanggaran'); ?></li>
                    <li><li><?php echo anchor('Admin/Logout', '<em class="fa fa-power-off">&nbsp;</em> Logout'); ?></li>
                <?php } elseif ($this->session->userdata('level') == 2) { ?>
                    <li><?php echo anchor('Admin/Siswa', '<em class="fa fa-calendar">&nbsp;</em>Data siswa'); ?></li>
                    <li><?php echo anchor('Admin/Pelanggaran', '<em class="fa fa-toggle-off">&nbsp;</em>Data Pelanggaran'); ?></li>
                    <li><?php echo anchor('Admin/Penilaian', '<em class="fa fa-clone">&nbsp;</em>Penilaian'); ?></li>
                    <li><li><?php echo anchor('Admin/Logout', '<em class="fa fa-power-off">&nbsp;</em> Logout'); ?></li>

                <?php } elseif ($this->session->userdata('level') == 3) { ?>
                    <li><?php echo anchor('Admin/History', '<em class="fa fa-clone">&nbsp;</em>History Pelanggaran'); ?></li>
                    <li><li><?php echo anchor('Admin/Logout', '<em class="fa fa-power-off">&nbsp;</em> Logout'); ?></li>
                <?php } elseif ($this->session->userdata('level') == 0) 
                         redirect('Auth');
                    { ?>
 
                </ul>
            <?php } ?>
        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">
                            <em class="fa fa-home"></em>
                        </a></li>
                    <li class="active">Sistem penilaian</li>
                </ol>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SISTEM PENILAIAN</h1>
                </div>
            </div><!--/.row-->

            <div class="panel panel-container">
                <div class="row">
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-teal panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-file-o color-blue"></em>
                                <?php
                                $id = $this->session->userdata('nis');
                                $jumlah = $this->db->query("SELECT nama, count(*) as jumlah_data FROM v_nilai where nis='$id'")->result();
                                foreach ($jumlah as $jow) {

                                    echo "<div class='large'>$jow->jumlah_data</div>";
                                }
                                ?>
                                <div class="text-muted">jumlah pelanggaran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-blue panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-user color-orange"></em>
                                <?php
                                $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM guru")->result();
                                foreach ($jumlah as $jow) {
                                    echo "<div class='large'>$jow->jumlah_data</div>";
                                }
                                ?>
                                <div class="text-muted">Jumlah Guru</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-orange panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                                <?php
                                $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM siswa")->result();
                                foreach ($jumlah as $jow) {

                                    echo "<div class='large'>$jow->jumlah_data</div>";
                                }
                                ?>
                                <div class="text-muted">Jumlah Siswa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                        <div class="panel panel-red panel-widget ">
                            <div class="row no-padding"><em class="fa fa-xl fa-deaf color-red"></em>
                                <?php
                                $nis = $this->session->userdata('nis');
                                if ($nis > 0) {
                                    $jmlah = $this->db->query("SELECT sum(pl.bobot) as bobot,s.nis,s.nama FROM `penilaian` as p, pelanggaran as pl,siswa as s WHERE p.id_pelanggaran=pl.Id and p.nis=s.nis and s.nis='$nis'")->result();
                                    foreach ($jmlah as $jum) {
                                        echo "
                                <div class='large'>$jum->bobot</div>";
                                    }
                                } elseif(empty($nis)) {
                                    echo "
                                    <div class='large'>0</div>";
                                } else {
                                    echo "
                                    <div class='large'>0</div>";
                                }
                                ?>
                                <div class="text-muted">BOBOT PELANGGARAN</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>
            <!--/.row-->


            <div class="panel panel-default ">

                <?php
                if ($this->session->flashdata('Update')) {

                    echo "<div class='alert alert-warning bg-danger'>";
                    echo $this->session->flashdata('Update');
                    echo "</div>";
                }
                ?>

                <?php echo $contents ?>
            </div>
        </div><!--/.col-->
        <div class="col-sm-12">
            <p class="back-link">Pewerd by<a href="https://www.Tutorkomputer.com">Andi Hoerudin</a></p>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->

<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart-data.js"></script>
<script src="<?php echo base_url() ?>assets/js/easypiechart.js"></script>
<script src="<?php echo base_url() ?>assets/js/easypiechart-data.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>
<script src="<?php echo base_url() ?>assets/jquery-1.12.4.js"></script>
<script src="<?php echo base_url() ?>assets/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
</body>
<script>
    $('textarea.texteditor').ckeditor();
</script>

<script type="text/javascript">
 
      $(function () {
        $("#example").DataTable({         
          "language": {
            "url":"<?php echo base_url()?>assets/indonesia.json",
            "sEmptyTable": "Tidak ada data di database"
        }
        });
      
      });
 
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };



</script>

</body>
</html>