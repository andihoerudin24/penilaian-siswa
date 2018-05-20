<h4>HISTORY PELANGGARAN</h4> 
<table id="example" class="table table-striped table-bordered bg-white" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>BOBOT</th>
            <th>JENIS PELANGGARAN</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
          $no = 1;
          
          foreach ($data as $row) {
            echo "<tr>
                <td>$no</td>
                <td>$row->nama</td>
                <td>$row->nis</td>
                <td>$row->bobot</td>
                <td>$row->nama__pelanggaran</td> 
                <td>$row->tanggal</td>
                <td>$row->keterangan</td>
              </tr>";
        $no++;
        }
        
        ?>

    </tbody>
</table>    
