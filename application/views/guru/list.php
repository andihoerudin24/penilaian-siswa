<?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
} elseif ($this->session->flashdata('Hapus')) {

    echo "<div class='alert alert-warning bg-danger'>";
    echo $this->session->flashdata('Hapus');
    echo "</div>";
} elseif ($this->session->flashdata('edit')) {

    echo "<div class='alert alert-danger bg-danger'>";
    echo $this->session->flashdata('edit');
    echo "</div>";
}
?>


<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
    Tamabah guru
</button>
<h4>DATA GURU</h4> 
<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>FOTO</th>
            <th>Alamat</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($guru as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nik</td>
                <td>$row->nama</td>
                <td><img src = '".base_url()."uploads/guru/$row->foto' width = '40px' ></td> 
               <td>$row->alamat</td>    
                <td>" . anchor('Admin/Guru/edit/' . $row->nik, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Guru/Hapus/' . $row->nik, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/Guru/add'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group"><label>Nik</label>
                    <input type="text" name="nik" class="form-control">
                </div>

                <div class="form-group"><label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group"><label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group"><label>Foto</label>
                    <input type="file" name="userfile" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

