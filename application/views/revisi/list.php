    <div class="col-md-8">
        <table class="table table-bordered">
            <tr>
             <td>Cari berdasarkan bobot</td>
              <td><?php echo cmb_dinamis('cari','pelanggaran','bobot','Id',null,"id='cari' onchange='loadData()' ") ?></td>
            </tr>
        </table>
    </div>
<div id="load"></div>
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
 function loadData(){
  var cari =$("#cari").val();
  $.ajax({
      type:"GET",
      url:"<?php echo base_url()?>Admin/Revisi/loaddata",
      data:"cari="+cari,
      success:function(html){
      $("#load").html(html);
      alert('sukses cari data');
      
      }
  })
 
    }
    
</script>