<link href="themes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="themes/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="themes/assets/styles.css" rel="stylesheet" media="screen">
<link href="themes/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="themes/vendors/flot/excanvas.min.js"></script><![endif]-->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="themes/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Referensi Lokasi</div>
            <a href="lokasiForm/id:new" class="btn-primary pull-right btn"><i class="icon-plus icon-white"></i> Tambah Lokasi</a>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Kode POS</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten/Kota</th>
                            <th>Propinsi</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($data)>0):?>
                        <?php foreach($data as $r):?>
                        <tr class="odd gradeX">
                            <td class="center"><?php echo $r['RefLokasi']['kode_pos'];?></td>
                            <td class="center"><?php echo $r['RefLokasi']['kelurahan'];?></td>
                            <td class="center"><?php echo $r['RefLokasi']['kecamatan'];?></td>
                            <td class="center"><?php echo $r['RefLokasi']['kab_kota'];?></td>
                            <td class="center"><?php echo $r['RefLokasi']['provinsi'];?></td>
                            <td class="center">
                                <a href="lokasiForm/id:<?php echo $r['RefLokasi']['kode_pos'];?>" class="btn-primary btn"><i class="icon-pencil icon-white"></i> Ubah</a>
                                <a href="lokasiDelete/id:<?php echo $r['RefLokasi']['kode_pos'];?>" class="btn-danger btn"><i class="icon-trash icon-white"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        <?php else:?>
                        <tr class="odd gradeX">
                            <td class="center" colspan="6">Data tidak ditemukan</td>
                        </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
<script src="themes/vendors/jquery-1.9.1.js"></script>
<script src="themes/bootstrap/js/bootstrap.min.js"></script>
<script src="themes/vendors/datatables/js/jquery.dataTables.min.js"></script>


<script src="themes/assets/scripts.js"></script>
<script src="themes/assets/DT_bootstrap.js"></script>