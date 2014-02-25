<!-- Bootstrap -->
<link href="<?php echo $baseUrl; ?>/themes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl; ?>/themes/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl; ?>/themes/assets/styles.css" rel="stylesheet" media="screen">
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo $baseUrl; ?>/themes/vendors/flot/excanvas.min.js"></script><![endif]-->
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="<?php echo $baseUrl; ?>/themes/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<link href="<?php echo $baseUrl; ?>/themes/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl; ?>/themes/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="<?php echo $baseUrl; ?>/themes/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="<?php echo $baseUrl; ?>/themes/vendors/jquery-1.9.1.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/vendors/jquery.uniform.min.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/vendors/chosen.jquery.min.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/vendors/bootstrap-datepicker.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/assets/scripts.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="<?php echo $baseUrl; ?>/themes/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
<link href="<?php echo $baseUrl; ?>/themes/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

<?php
$jenis_pengaduan = !empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['jenis_pengaduan'] : '';
$tipe_pengaduan = !empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['type_pengaduan'] : '';
$nama_bagian = !empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['kepada'] : '';
$lokasi_pengaduan = !empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['kode_pos_aduan'] : '';
?>
<div class="navbar navbar-inner block-header">
    <div class="muted pull-left"><?php echo $title; ?></div>

</div>
<div class="block-content collapse in">
    <div class="span12">
        <form class="form-horizontal" method="post">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="tanggal_pengaduan">Tanggal Pengaduan</label>
                    <div class="controls">
                        <input class="input-small focused" id="tanggal_pengaduan" name="tanggal_pengaduan" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? date('d-m-Y', strtotime($data['DumasPengaduan']['tanggal_pengaduan'])) : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="nama_lengkap">Nama Lengkap</label>
                    <div class="controls">
                        <input class="input-large" id="nama_lengkap" name="nama_lengkap" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['nama_lengkap'] : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="alamat">Alamat</label>
                    <div class="controls">
                        <input class="input-large" id="alamat" name="alamat" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['alamat'] : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email</label>
                    <div class="controls">
                        <input class="input-medium" id="email" name="email" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['email'] : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="telepon">Telepon</label>
                    <div class="controls">
                        <input class="input-medium" id="telepon" name="telepon" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['telepon'] : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="handphone">Handphone</label>
                    <div class="controls">
                        <input class="input-medium" id="handphone" name="handphone" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['handphone'] : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="jenis_pengaduan">Jenis Pengaduan</label>
                    <div class="controls">
                        <select id="jenis_pengaduan" name="jenis_pengaduan">
                            <?php foreach ($jenis as $j): ?>
                                <option value="<?php echo $j['RefJenisPengaduan']['kode_jenis_pengaduan']; ?>" <?php echo $j['RefJenisPengaduan']['kode_jenis_pengaduan'] == $jenis_pengaduan ? 'selected="selected"' : ''; ?> ><?php echo $j['RefJenisPengaduan']['jenis_pengaduan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="type_pengaduan">Tipe Pengaduan</label>
                    <div class="controls">
                        <select id="type_pengaduan" name="type_pengaduan">
                            <?php foreach ($tipe as $j): ?>
                                <option value="<?php echo $j['RefTypePengaduan']['kode_tipe_pengaduan']; ?>" <?php echo $j['RefTypePengaduan']['kode_tipe_pengaduan'] == $tipe_pengaduan ? 'selected="selected"' : ''; ?> ><?php echo $j['RefTypePengaduan']['tipe_pengaduan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="type_pengaduan">Kepada</label>
                    <div class="controls">
                        <select id="kepada" name="kepada">
                            <?php foreach ($bagian as $j): ?>
                                <option value="<?php echo $j['RefBagian']['bagian']; ?>" <?php echo $j['RefBagian']['bagian'] == $nama_bagian ? 'selected="selected"' : ''; ?> ><?php echo $j['RefBagian']['bagian']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="tanggal_masuk_dokumen">Tanggal Terima</label>
                    <div class="controls">
                        <input class="input-small focused" id="tanggal_masuk_dokumen" name="tanggal_masuk_dokumen" type="text" value="<?php echo!empty($data['DumasPengaduan']) ? date('d-m-Y', strtotime($data['DumasPengaduan']['tanggal_masuk_dokumen'])) : ''; ?>">
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="kode_pos_aduan">Lokasi Pengaduan</label>
                    <div class="controls">
                        <select id="kode_pos_aduan" name="kode_pos_aduan">
                            <?php foreach ($lokasi as $j): ?>
                                <option value="<?php echo $j['RefLokasi']['kode_pos']; ?>" <?php echo $j['RefLokasi']['kode_pos'] == $lokasi_pengaduan ? 'selected="selected"' : ''; ?> ><?php echo $j['RefLokasi']['kelurahan']; ?> &nbsp; <?php echo $j['RefLokasi']['kab_kota']; ?> [<?php echo $j['RefLokasi']['kode_pos']; ?>]</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="uraian_aduan">Uraian Pengaduan</label>
                    <div class="controls">
                        <textarea style="width: 560px; height: 200px" id="uraian_aduan" name="uraian_aduan"><?php echo!empty($data['DumasPengaduan']) ? $data['DumasPengaduan']['uraian_aduan'] : ''; ?></textarea>
                        <span class="help-inline"></span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="keycode">Kode Verifikasi</label>
                    <div class="controls">
                        <img id="captcha" src="<?php echo $this->Html->url('/captcha_image'); ?>" alt="" />
                        <a href="javascript:void(0);" 
                           onclick="javascript:document.images.captcha.src = '<?php echo $this->Html->url("/captcha_image"); ?>?' + Math.round(Math.random(0) * 1000) + 1" >Reload</a>
                        <input class="input-small focused" id="keycode" name="keycode" type="text" value="">
                    </div>
                </div>
                <?php $error_message = $this->Session->flash('error');?>
                <?php if(!empty($error_message)):?>
                <div class="alert alert-error alert-block">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <h4 class="alert-heading">Error!</h4>
                    <?php echo $error_message; ?>
                </div>
                <?php endif;?>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="<?php echo $baseUrl; ?>/pengaduanList" class="btn">Kembali</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<script>
                               $(function() {
                                   $("#tanggal_masuk_dokumen, #tanggal_pengaduan").datepicker({format: 'dd-mm-yyyy'});
                                   $('#uraian_aduan').wysihtml5();
                               });
</script>