<!-- Bootstrap -->
<link href="<?php echo $baseUrl;?>/themes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl;?>/themes/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl;?>/themes/assets/styles.css" rel="stylesheet" media="screen">
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo $baseUrl;?>/themes/vendors/flot/excanvas.min.js"></script><![endif]-->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="<?php echo $baseUrl;?>/themes/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<link href="<?php echo $baseUrl;?>/themes/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl;?>/themes/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl;?>/themes/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="<?php echo $baseUrl;?>/themes/vendors/jquery-1.9.1.js"></script>
<script src="<?php echo $baseUrl;?>/themes/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $baseUrl;?>/themes/vendors/jquery.uniform.min.js"></script>
<script src="<?php echo $baseUrl;?>/themes/vendors/chosen.jquery.min.js"></script>
<script src="<?php echo $baseUrl;?>/themes/vendors/bootstrap-datepicker.js"></script>
<script src="<?php echo $baseUrl;?>/assets/scripts.js"></script>

<div class="navbar navbar-inner block-header">
    <div class="muted pull-left"><?php echo $title;?></div>
</div>
<div class="block-content collapse in">
    <div class="span12">
        <form class="form-horizontal" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="kode_tipe_pengaduan">Kode Tipe Pengaduan</label>
                    <div class="controls">
                        <input class="input-small focused" id="kode_tipe_pengaduan" name="kode_tipe_pengaduan" type="text" value="<?php echo !empty($data['RefTypePengaduan'])?$data['RefTypePengaduan']['kode_tipe_pengaduan']:'';?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="tipe_pengaduan">Nama Tipe Pengaduan</label>
                    <div class="controls">
                        <input class="input-medium" id="tipe_pengaduan" name="tipe_pengaduan" type="text" value="<?php echo !empty($data['RefTypePengaduan'])?$data['RefTypePengaduan']['tipe_pengaduan']:'';?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="<?php echo $baseUrl;?>/tipeList" class="btn">Kembali</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>