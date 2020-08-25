<div class="col-md-12">
  
  <a href="<?php echo site_url('article/new_article') ?>" class="btn btn-info btn-lg" role="button">Artikel Baru</a>  
  
  <br>
  <br>
  <?php if (isset($this->session->userdata['result']) && $this->session->userdata['result'] == "Success" ) { ?>
    <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      Berhasil
  </div>

  <?php } else if (isset($this->session->userdata['result']) && $this->session->userdata['result'] == "Failed" ) { ?>
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      Gagal
  </div>
  
  <?php 
    } 
    $this->session->unset_userdata("result");
  ?>
          
  <div class="panel panel-default col-md-12">
    <p></p>
    <div class="panel-heading text-center"><h4>Artikel</h4></div>
    <p></p>
    <table class="table" id="list">
      <thead>
        <tr>
          <th width="19%">Aksi</th>
          <th width="30%">Judul</th>
          <th width="29%">Konten</th>
          <th width="11%">Dibuat</th>
          <th width="11%">Diubah</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($article as $key => $value) { ?>
          <tr>
            <td >
              <p class="text-center">
                <a href="<?php echo site_url('home/read/').$value['id'] ?>" class="btn btn-default btn-sm" role="button" target="_blank">View</a>   
                <a href="<?php echo site_url('article/load_article/').$value['id'] ?>" class="btn btn-primary btn-sm" role="button">Edit</a> 
                <a href="<?php echo site_url('article/delete_article/').$value['id'] ?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Are you sure?')" >Delete</a>
              </p>
            </td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo substr($value['content'], 0, 85). " ..." ?></td>
            <td><?php echo substr($value['created'], 0, 19); ?></td>
            <td><?php echo substr($value['modified'], 0, 19); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<style type="text/css">
  th, td {
    text-align: center
  }
</style>

<script type="text/javascript">
  $(document).ready(function() {
      
    $('#list').DataTable();

  });
</script>