<?php

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    /**
     * Controller name
     *
     * @var string
     */
    public $name = 'Pages';

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array(
        'DumasPengaduan',
        'RefLokasi',
        'RefBagian',
        'RefJenisPengaduan',
        'RefTypePengaduan'
    );
    public $paginate = array(
        'limit' => 25,
    );
    var $baseUrl;

    public function beforeFilter() {
        $this->baseUrl = Configure::read('baseUrl');
        parent::beforeFilter();
    }

    public function captcha_image() {
        App::import('Vendor', 'captcha/captcha');
        $captcha = new captcha();
        $captcha->show_captcha();
    }

    public function pengaduanList() {
        $this->set('title', 'Daftar Pengaduan');
        $this->set('route', 'pengaduan');
        $scope['joins'] = array(
            array(
                'table' => 'ref_jenis_pengaduan',
                'alias' => 'RefJenisPengaduan',
                'type' => 'inner',
                'conditions' =>
                array(
                    'DumasPengaduan.jenis_pengaduan=RefJenisPengaduan.kode_jenis_pengaduan'
                )
            ),
            array(
                'table' => 'ref_type_pengaduan',
                'alias' => 'RefTypePengaduan',
                'type' => 'inner',
                'conditions' =>
                array(
                    'DumasPengaduan.type_pengaduan=RefTypePengaduan.kode_tipe_pengaduan'
                )
            ),
        );
        $scope['fields'] = array(
            'DumasPengaduan.*',
            'RefJenisPengaduan.*',
            'RefTypePengaduan.*'
        );
        $data = $this->DumasPengaduan->find('all', $scope);
        $this->set('data', $data);
    }

    public function pengaduanForm() {
        $title = $this->params['named']['id'] != 'new' ? 'Ubah Pengaduan' : 'Input Pengaduan';
        $this->set('title', $title);
        $this->set('route', 'pengaduan');
        if ($this->request->data) {
            if ($this->request->data['keycode'] != $this->Session->read('captcha')) {
                $this->Session->setFlash('Kode verifikasi yang Anda masukkan salah, silakan coba lagi', 'default', array(), 'error');
            } else {
                $data = array(
                    'nomor_pengaduan' => $this->params['named']['id'] == 'new' ? NULL : $this->params['named']['id'],
                    'tanggal_pengaduan' => date('Y-m-d', strtotime($this->request->data['tanggal_pengaduan'])),
                    'nama_lengkap' => $this->request->data['nama_lengkap'],
                    'alamat' => $this->request->data['alamat'],
                    'email' => $this->request->data['email'],
                    'telepon' => $this->request->data['telepon'],
                    'handphone' => $this->request->data['handphone'],
                    'jenis_pengaduan' => $this->request->data['jenis_pengaduan'],
                    'type_pengaduan' => $this->request->data['type_pengaduan'],
                    'kepada' => $this->request->data['kepada'],
                    'kode_pos_aduan' => $this->request->data['kode_pos_aduan'],
                    'keycode' => $this->request->data['keycode'],
                    'tanggal_masuk_dokumen' => date('Y-m-d', strtotime($this->request->data['tanggal_masuk_dokumen'])),
                    'uraian_aduan' => $this->request->data['uraian_aduan'],
                );
                //die(pr($data));
                $this->DumasPengaduan->set($data);
                if ($this->DumasPengaduan->save()) {
                    $this->redirect($this->baseUrl . '/pengaduanList');
                } else {
                    $this->Session->setFlash('Terjadi kesalahan saat menyimpan data, silakan coba lagi', 'default', array(), 'error');
                }
            }
        }
        $data = $this->DumasPengaduan->find('first', array('conditions' => array('nomor_pengaduan' => $this->params['named']['id'])));
        $tipe = $this->RefTypePengaduan->find('all');
        $jenis = $this->RefJenisPengaduan->find('all');
        $bagian = $this->RefBagian->find('all');
        $lokasi = $this->RefLokasi->find('all');
        
        $this->set(compact('data', 'tipe', 'jenis', 'bagian', 'lokasi'));
    }

    public function pengaduanDelete() {
        
    }

    public function lokasiList() {
        $this->set('title', 'Referensi Lokasi');
        $this->set('route', 'lokasi');
        $data = $this->RefLokasi->find('all');
        $this->set('data', $data);
    }

    public function lokasiForm() {
        $title = $this->params['named']['id'] != 'new' ? 'Ubah Lokasi' : 'Tambah Lokasi';
        $this->set('title', $title);
        $this->set('route', 'lokasi');
        $kode_pos = $this->params['named']['id'];
        if ($this->request->data) {
            $data = array(
                'kode_pos' => $this->request->data['kode_pos'],
                'kelurahan' => $this->request->data['kelurahan'],
                'kecamatan' => $this->request->data['kecamatan'],
                'kab_kota' => $this->request->data['kab_kota'],
                'provinsi' => $this->request->data['provinsi'],
            );
            $this->RefLokasi->set($data);
            if ($this->RefLokasi->save()) {
                $this->redirect($this->baseUrl . '/lokasiList');
            } else {
                $this->Session->setFlash('Error occured while saving data');
            }
        }
        $data = $this->RefLokasi->find('first', array('conditions' => array('kode_pos' => $this->params['named']['id'])));
        $this->set('data', $data);
    }

    public function lokasiDelete() {
        $this->redirect($this->baseUrl . '/lokasiList');
    }

    public function bagianList() {
        $this->set('title', 'Referensi Bagian');
        $this->set('route', 'bagian');
        $data = $this->RefBagian->find('all');
        $this->set('data', $data);
    }

    public function bagianForm() {
        $title = $this->params['named']['id'] != 'new' ? 'Ubah Bagian' : 'Tambah Bagian';
        $this->set('title', $title);
        $this->set('route', 'bagian');
        if ($this->request->data) {
            $data = array(
                'kode_bagian' => $this->request->data['kode_bagian'],
                'bagian' => $this->request->data['bagian'],
            );
            $this->RefBagian->set($data);
            if ($this->RefBagian->save()) {
                $this->redirect($this->baseUrl . '/bagianList');
            } else {
                $this->Session->setFlash('Error occured while saving data');
            }
        }
        $data = $this->RefBagian->find('first', array('conditions' => array('kode_bagian' => $this->params['named']['id'])));
        $this->set('data', $data);
    }

    public function bagianDelete() {
        
    }

    public function jenisList() {
        $this->set('title', 'Referensi Jenis Pengaduan');
        $this->set('route', 'jenis');
        $data = $this->RefJenisPengaduan->find('all');
        $this->set('data', $data);
    }

    public function jenisForm() {
        $title = $this->params['named']['id'] != 'new' ? 'Ubah Jenis Pengaduan' : 'Tambah Jenis Pengaduan';
        $this->set('title', $title);
        $this->set('route', 'jenis');
        if ($this->request->data) {
            $data = array(
                'kode_jenis_pengaduan' => $this->request->data['kode_jenis_pengaduan'],
                'jenis_pengaduan' => $this->request->data['jenis_pengaduan'],
            );
            $this->RefJenisPengaduan->set($data);
            if ($this->RefJenisPengaduan->save()) {
                $this->redirect($this->baseUrl . '/jenisList');
            } else {
                $this->Session->setFlash('Error occured while saving data');
            }
        }
        $data = $this->RefJenisPengaduan->find('first', array('conditions' => array('kode_jenis_pengaduan' => $this->params['named']['id'])));
        $this->set('data', $data);
    }

    public function jenisDelete() {
        
    }

    public function tipeList() {
        $this->set('title', 'Referensi Tipe Pengaduan');
        $this->set('route', 'tipe');
        $data = $this->RefTypePengaduan->find('all');
        $this->set('data', $data);
    }

    public function tipeForm() {
        $title = $this->params['named']['id'] != 'new' ? 'Ubah Tipe Pengaduan' : 'Tambah Tipe Pengaduan';
        $this->set('title', $title);
        $this->set('route', 'tipe');
        if ($this->request->data) {
            $data = array(
                'kode_tipe_pengaduan' => $this->request->data['kode_tipe_pengaduan'],
                'tipe_pengaduan' => $this->request->data['tipe_pengaduan'],
            );
            $this->RefTypePengaduan->set($data);
            if ($this->RefTypePengaduan->save()) {
                $this->redirect($this->baseUrl . '/jenisList');
            } else {
                $this->Session->setFlash('Error occured while saving data');
            }
        }
        $data = $this->RefTypePengaduan->find('first', array('conditions' => array('kode_tipe_pengaduan' => $this->params['named']['id'])));
        $this->set('data', $data);
    }

    public function tipeDelete() {
        
    }

}
