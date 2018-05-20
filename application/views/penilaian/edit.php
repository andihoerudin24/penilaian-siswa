<div class="panel panel-default">
    <div class="panel-heading">
        FORM  EDIT PENILAIAN
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
    <div class="panel-body">
        <?php echo form_open('Admin/Penilaian/edit', 'class="form-horizontal"');
              echo form_hidden('id_nilai',$nilai['id_nilai']) ;       
         ?>
        <fieldset>
            <!-- Name input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="name">Name</label>
                <div class="col-md-9">
                    <?php echo cmb_dinamis('nis', 'siswa', 'nama', 'nis',$nilai['nama'], "id='nis' onChange='isi_otomatis()'"); ?>
                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-3 control-label" for="email">Bobot Pelanggaran</label>
                <div class="col-md-9">
                    <?php echo cmb_dinamis('id_pelanggaran', 'pelanggaran', 'bobot','Id',$nilai['bobot']) ?>
                </div>
            </div>



            <div class="form-group">
                <label class="col-md-3 control-label" for="message">Tanggal</label>
                <div class="col-md-9">
                    <input type="date" name="tanggal" value="<?php echo $nilai['tanggal'] ?>" class="form-control">
                </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
                <label class="col-md-3 control-label" for="message">Keterangan</label>
                <div class="col-md-9">
                    <textarea class="texteditor" id="message" name="keterangan" placeholder="Please enter your message here..." rows="5"><?php echo $nilai['keterangan'] ?></textarea>
                </div>
            </div>




            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-right">
                    <center>
                        <button type="submit" name="submit" class="btn btn-danger btn-md">simpam</button>
                        <?php echo anchor('Admin/Penilaian', 'kembali', array('class' => "btn btn-info btn-md pull-righ")) ?>
                    </center>
                </div>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
</div>
