<nav class="navbar navbar-custom" role="navigation" style="background: rgb(241, 241, 241, 0.5); position: static; width: 100%; margin-bottom: 0px; background-image: url(<?php echo base_url('/assets/img/batik.png') ?>);">
  <div class="container">
    <div class="navbar-header" style="height: 120px;">
      <a class="navbar-brand" href="<?php echo site_url()?>">
        <div>
          <img src="<?php echo base_url('assets/img/logo.png') ?>" style="height: 40px; vertical-align: middle;"> <span><label> | Legotics</label></span>
  
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link current" href="<?php echo site_url('/home/articles')?>">Artikel</a></li>
        <li><a class="nav-link" href="<?php echo site_url('/home/about')?>">Tentang Kami</a></li>

        <?php if($this->session->userdata('login') == NULL ){ ?>
          <li><a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="" data-backdrop="static" data-keyboard="false">Admin </a></li>
        <?php } else{?>
          <li><a class="nav-link" href="<?php echo site_url('admin')?>">Admin</a></li>
          <li><a class="nav-link" href="<?php echo site_url('login/out')?>">Logout</a></li>
        <?php }?>

      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" class="login">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Login</h4>
        </div>
        
        <div class="modal-body">
          <div class="row">
            <div class="col-xs-2">
              <label>Username</label>
              <br><br>
              <label>Password</label>
            </div>
            <div class="col-xs-7">
              <input type="text" class="form-control" placeholder="admin" id="username">
              <p></p>
              <input type="password" class="form-control" placeholder="admin" id="password">
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-info" id="login">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container documents">

<script type="text/javascript">
  
  $(document).ready(function(){
    
    $("#hasil").css('display', 'none', 'important');
    
    $("#login").click(function(){  
      
      username=$("#username").val();
      password=$("#password").val();
      
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('login/in') ?>",
        data: "username="+username+"&password="+password,
          success: function(html){    
            
            if(html=="mantull")    {
              window.location = "<?php echo site_url('article') ?>";
            }
            else{
              alert("Username atau password salah");
            }
          }
        });
        return false;
    });

  });

</script>

<style type="text/css">
  a{
    color: #434a54;
    font-weight: 500;
  }
</style>