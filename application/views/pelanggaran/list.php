<?php
if ($this->session->flashdata('Berhasil')) {
    echo "<div class='alert alert-info'>";
    echo $this->session->flashdata('Berhasil');
    echo "</div>";
}elseif($this->session->flashdata('Hapus')){
    
    echo "<div class='alert alert-info bg-danger'>";
    echo $this->session->flashdata('Hapus');
    echo "</div>";
}
?>
<button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#exampleModal">
        Tamabah bobot
</button>
<h4>BOBOT PELANGGARAN</h4> 
<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Bobot</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($pelanggaran as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nama</td>
                <td>$row->bobot</td>
                <td>" . anchor('Admin/Pelanggaran/edit/' . $row->Id, 'Edit', array('class' => 'btn btn-info')) . "</td>
                <td>" . anchor('Admin/Pelanggaran/hapus/' . $row->Id, 'Hapus', array('class' => 'btn btn-danger')) . "</td>
            </tr>";

            $no++;
        }
        ?>

    </tbody>
</table>    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <?php echo form_open_multipart('Admin/Pelanggaran/add');  ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INPUT BOBOT PELANGGARAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group"><label>NAMA</label>
                    <input type="text"  name="nama" class="form-control">
               </div>
                <div class="form-group"><label>BOBOT</label>
                    <input type="number" name="bobot" class="form-control">
               </div>
           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
      <?php echo form_close();  ?>
    </div>
</div>
 

