<?php
Class Revisi extends CI_Controller{
    
    function index(){
        $this->template->load('template','revisi/list');    
    }
    
    
    function loaddata(){
        $cari=$_GET['cari'];
        echo "<table class='table table-bordered'>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>kelas</th>
              <th>Tanggal</th>
              <th>Nis</th>
              <th>No hp_ortu</th>
              <th>Tingkat skenakalan</th>
            </tr>";
        $no=1;
        $search= $this->db->query("SELECT pl.id,p.id_nilai,s.alamat,s.nama,s.kelas,p.tanggal,pl.bobot,s.nis,p.keterangan,s.no_hp_ortu,pl.nama as tingakt_kenakalan FROM penilaian as p,siswa as s,pelanggaran as pl WHERE p.id_pelanggaran=pl.id and p.nis=s.nis AND pl.id='$cari'")->result();
        if($search > 0){
         foreach ($search as $row) {
          echo "<tr>
                    <td>$no</td>
                    <td>$row->nama</td>
                    <td>$row->alamat</td>
                    <td>$row->kelas</td>
                    <td>$row->tanggal</td>
                    <td>$row->nis</td>
                    <td>$row->no_hp_ortu</td>
                    <td>$row->tingakt_kenakalan</td>
               </tr>";
          $no++;
        }   
      }else{
          echo "<h1>pencarian berdasarakan bobot yang anda pilih tidak ada</h1>";
      }   
    }
} 


?>