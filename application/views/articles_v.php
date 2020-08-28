<?php
$i = 1;
foreach ($article as $key => $value) {  ?>
  <?php if ($i == 1) {  ?>
    <div class="row">
    <?php }  ?>
    <div class="col-sm-3">
      <div class="thumbnail" style="max-height: 500px; max-width: 600px">
        <img class="img-rounded" src="<?php echo base_url('/uploads/articles/') . $value['image'] ?>" style="max-height: 500px; max-width: 600px">
        <div class="caption text-center">
          <h3><?php echo $value['title'] ?></h3>
          <p><?php echo substr(strip_tags($value['content']), 0, 110) . " ..." ?></p>
          <p><a href="<?php echo site_url('/home/read/') . $value['id'] ?>" class="btn btn-sm btn-info" role="button">Baca Selengkapnya</a> </p>
        </div>
      </div>
    </div>
    <?php if ($i == 4) {  ?>
    </div>
<?php }
    $i++;
    $i = $i == 5 ? 1 : $i;
  } ?>
  </div>