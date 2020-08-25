
<div class="container documents" >
  <div class="row">
    
    <?php 
      foreach ($article as $key => $value) { ?>
        <div class="col-md-6">
          <div class="jumbotron">
            <div class="jumbotron-photo">
              <img src="<?php echo base_url('/uploads/articles/').$value['image'] ?>" style="max-height: 300px; max-width: 560px">
            </div>
            <div class="jumbotron-contents">
              <div class="caption text-center">
                <h3><?php echo $value['title'] ?></h3>
                <p><?php echo substr($value['content'], 0, 210). " ..." ?></p>
                <p><a href="<?php echo site_url('/home/read/').$value['id']?>" class="btn btn-info" role="button">Baca Selengkapnya</a></p>
              </div>            
            </div>
          </div>
        </div>

      <?php } ?>

    <div class="text-center">
      <p>
        <a href="<?php echo site_url('/home/articles')?>" class="btn btn-primary" role="button">Artikel Lain >></a>
      </p>
    </div>



  </div>
</div>
