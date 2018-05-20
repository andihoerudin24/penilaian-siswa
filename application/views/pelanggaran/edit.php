<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit Pelanggaran  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open('Admin/Pelanggaran/edit', 'class="form-horizontal"');
        echo form_hidden('Id', $pelanggaran['Id']);
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="nama">Nama</label>
                <div class="col-md-9">
                    <input id="email" name="nama" value="<?php echo $pelanggaran['nama'] ?>" type="text" placeholder="nama" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="alamat">Bobot</label>
                <div class="col-md-9">
                    <input id="email" name="bobot" value="<?php echo $pelanggaran['bobot'] ?>" type="text" placeholder="bobot" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-3 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">Submit</button>
                    <?php echo anchor('Admin/Pelanggaran', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
</div>