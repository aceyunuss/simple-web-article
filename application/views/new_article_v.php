
<div class="col-md-12">
    <h3><?php if(isset($article)){ echo "Edit Article"; } else{ echo "New Article"; } ?></h3><hr/>
    <form action="<?php if(isset($article)){ echo site_url('article/edit_article'); } else { echo site_url('article/add_article'); }?>" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php if(isset($article)){ echo $article['id'];} ?>" style="display: none">
        <input type="text" name="title" class="form-control" placeholder="Judul" required value="<?php if(isset($article['title'])){echo $article['title'];} ?>" /><br/>
        <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
        <input type="file" name="image" value="<?php if(!isset($article)){echo 'required';} ?>"><br>
        <button class="btn btn-info btn-lg" type="submit">Post</button>

    </form>
</div>
 
<script type="text/javascript">
  $(function () {
    CKEDITOR.replace('ckeditor',{
        language: 'en',
    });

    CKEDITOR.instances.ckeditor.setData( '<?php if(isset($article['content'])){echo trim(preg_replace("/\s\s+/", " ", $article['content']));}?>', function()
        {
            this.checkDirty();  // true
        });
  });

</script>