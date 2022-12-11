<style>
    .navbar-expand-lg .navbar-nav .nav-link{
      color: white;

      padding-right: 20px;
      padding-left: 1rem;
padding-left: 20px;
padding-right: 20px;
font-weight: bold;
    }
    .nav-item .nav-link {
      text-align: right;
    }

  .navbar-nav{
    text-align: center;
  }


</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="topNavBar">
            <div class="container px-4 px-lg-5 ">

                <a class="navbar-brand" href="./">
                <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30%" height="30%" class="d-inline-block align-top" alt="" loading="lazy">
                <?php echo $_settings->info('') ?>
                </a>
                    <ul class="navbar-nav ">
                      <br>
                        <li class="nav-item "><a class="nav-link" aria-current="page" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./?p=about">About Us</a></li>
                        <li><a class="nav-link" href="./#service">Services</a></li>
                        <li><a class="nav-link" href="./#testimonial">Reviews</a></li>
                        <li><a class="nav-link" href="./#contact">Contact</a></li>
                        <li><a class="nav-link" href="admin/index.php">LogIn</a></li>
                      <br>
                    </ul>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })


</script>