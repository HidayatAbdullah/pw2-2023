<?php

   class NamaKampus {
      protected $nama;
      protected $lokasi;

      protected function __construct($nama, $lokasi) {
         $this->nama = $nama;
         $this->lokasi = $lokasi;
      }
      protected function getInfo() {
         echo "Nama Kampus: " . $this->nama . '<br>';
         echo "Lokasi: " . $this->lokasi . '<br>';
      }
   }

   class KampusA extends NamaKampus {
      public $jumlah_fakultas;

      public function __construct($nama, $lokasi, $jumlah_fakultas ) {
         parent::__construct($nama, $lokasi);
         $this->jumlah_fakultas = $jumlah_fakultas;
      }

      public function getInfoKampusA() {
         parent::getInfo();
         echo "Jumlah Fakultas: " . $this->jumlah_fakultas . "<br>";
      }
   }

   class KampusB extends NamaKampus {
      public $jumlah_mahasiswa;

      public function __construct($nama, $lokasi, $jumlah_mahasiswa) {
         parent::__construct($nama, $lokasi);
         $this->jumlah_mahasiswa = $jumlah_mahasiswa;
      }

      public function getInfoKampusB() {
         parent::getInfo();
         echo "Jumlah Mahasiswa: " . $this->jumlah_mahasiswa . "<br>";
      }
   }

?>
