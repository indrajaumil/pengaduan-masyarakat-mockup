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
                    <label class="control-label" for="kode_bagian">Kode Bagian</label>
                    <div class="controls">
                        <input class="input-small focused" id="kode_bagian" name="kode_bagian" type="text" value="<?php echo !empty($data['RefBagian'])?$data['RefBagian']['kode_bagian']:'';?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="bagian">Nama Bagian</label>
                    <div class="controls">
                        <input class="input-medium" id="bagian" name="bagian" type="text" value="<?php echo !empty($data['RefBagian'])?$data['RefBagian']['bagian']:'';?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="<?php echo $baseUrl;?>/bagianList" class="btn">Kembali</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>