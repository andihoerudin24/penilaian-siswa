<div class="panel panel-default">
    <div class="panel-heading">
        Form Edit siswa  <span class="pull-right clickable panel-toggle panel-button-tab-left">
            <em class="fa fa-toggle-up">

            </em></span></div>
    <div class="panel-body">
        <?php
        echo form_open('Admin/Siswa/edit', 'class="form-horizontal"');
        echo form_hidden('nis', $siswa['nis']);
        ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="nama">Nama</label>
                <div class="col-md-9">
                    <input id="email" name="nama" value="<?php echo $siswa['nama'] ?>" type="text" placeholder="nama" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="alamat">Alamat</label>
                <div class="col-md-9">
                    <input id="email" name="alamat" value="<?php echo $siswa['alamat'] ?>" type="text" placeholder="alamat" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="walikelas">Wali kelas</label>
                <div class="col-md-9">
                    <?php echo cmb_dinamis('nik', 'guru', 'nama', 'nik', $siswa['nis']); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="nohp">No hp orang tua</label>
                <div class="col-md-9">
                    <input id="email" name="no_hp_ortu" value="<?php $siswa['no_hp_ortu'] ?>" type="text" placeholder="no_hp" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <button type="submit" name="submit" class="btn btn-info btn-md ">Submit</button>
                    <?php echo anchor('Admin/Siswa', 'KEMBALI', array('class' => "btn btn-danger btn-md pull-righ")) ?>
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>