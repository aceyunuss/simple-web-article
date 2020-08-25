
<div class="container documents" >
  <div class="row">
    <div class="col-md-12">
      <blockquote>
        <p style="font-size: 30px; font-weight: bold">
          <?php echo $article['title'] ?>
        </p>
        <small><?php echo strtoupper($article['created_by']).", ".substr($article['created'], 0, 19) ?></small>
      </blockquote>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <img src="<?php echo base_url('/uploads/articles/').$article['image']; ?>" alt="content-image" class="img-rounded img-responsive" style="width: 1200px">
      <br/>
      <?php echo $article['content']; ?>
    </div>
  </div>
</div>