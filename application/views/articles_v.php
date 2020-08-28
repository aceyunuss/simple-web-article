<div class="row">
  <?php foreach ($article as $key => $value) { ?>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img class="img-rounded" src="<?php echo base_url('/uploads/articles/').$value['image'] ?>" style="max-height: 500px; max-width: 600px" >
        <div class="caption text-center">
          <h3><?php echo $value['title'] ?></h3>
          <p><?php echo substr(strip_tags($value['content']), 0, 110). " ..." ?></p>
          <p><a href="<?php echo site_url('/home/read/').$value['id']?>" class="btn btn-sm btn-info" role="button">Baca Selengkapnya</a> </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>