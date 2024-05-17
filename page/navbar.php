<?php 
   require('page/Models.php');
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?=$action->helper->loadimage('logo.png')?>" alt="Logo"  height="24" class="d-inline-block align-text-top">
      Resume Builder
    </a>
      <ul class="navbar-nav">
        <?php 
         if($action->user_id())
         {
            ?>
        <li class="nav-item">
          <a class="nav-link <?=@$myresume?>" aria-current="page" href="<?=$action->helper->url('home')?>"><i class="bi bi-file-earmark-medical-fill m-1"></i>My Resumes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?=@$profile?>" href="" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-person-circle m-1"></i>Profile</a>
        </li>
        <li class="nav-item">
          <a href="<?=$action->helper->url('action/logout')?>" class="nav-link "><i class="bi bi-box-arrow-left m-1"></i>Logout</a>
        </li>
            <?php 

         }
         else
         {
          ?>
           <li class="nav-item">
          <a href="<?=$action->helper->url('login')?>" class="nav-link"><i class="bi bi-box-arrow-in-right m-2"></i>Login</a>
        </li>
         <li class="nav-item">
          <a href="<?=$action->helper->url('signup')?>" class="nav-link"><i class="bi bi-person-fill-add m-2"></i>Signup</a>
        </li>
          <?php 
         }
        ?>
      </ul>
  </div>
</nav>