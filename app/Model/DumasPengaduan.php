<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DumasPengaduan
 *
 * @author indraJaumil
 */
App::uses('AppModel', 'Model');
class DumasPengaduan extends AppModel {
    var $name = 'DumasPengaduan';
    var $useTable = 'dumas_pengaduan';
    public $primaryKey = 'nomor_pengaduan';
}

?>
