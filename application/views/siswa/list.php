<?php  
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('Hapus')) {
    
    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('Hapus');
    echo "</div>";
}elseif ($this->session->flashdata('edit')) {
    
    echo "<div class='alert alert-danger bg-danger'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
}
?>
<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
        Tamabah siswa
</button>
<h4>DATA SISWA</h4> 
<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>NOMOR HP ORANG TUA</th>
            <th>ALAMAT</th>
            <th>WALI KELAS</th>
            <th>KELAS</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($siswa as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nama</td>
                <td>$row->nis</td>
                <td>$row->no_hp_ortu</td>
                <td>$row->alamat</td>
                <td>$row->walikelas</td>
                <td>$row->kelas</td>    
                <td>" . anchor('Admin/Siswa/edit/' . $row->nis, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Siswa/Hapus/' . $row->nis, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/Siswa/add');  ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">Nis</label>
                        <input type="number" name="nis" class="form-control" required=""  placeholder="nis">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">Nama </label>
                        <input type="text" name="nama" class="form-control" required=""  placeholder="nama">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required=""  placeholder="alamat">
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">wali kelas</label>
                        <?php echo cmb_dinamis('nik','guru','nama','nik') ?>
                    </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">No hp orang tua</label>
                        <input type="text" name="no_hp_ortu" class="form-control" required=""  placeholder="no hp">
                 </div>
                
                 <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <select name="kelas" class="form-control">
                            <option value="V11">VII</option>
                            <option value="V111">VIII</option>
                            <option value="IX">IX</option>
                        </select>
                 </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">foto</label>
                        <input type="file" name="userfile" class="form-control" required=""  placeholder="no hp">
                 </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
      <?php echo form_close();  ?>
    </div>
</div>

