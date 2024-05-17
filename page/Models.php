
<?php 
        $id = $action->user_id();
        $name = $action->db->read('users','full_name','where id='.$id);
?>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="container">
      <i class="bi bi-person-circle d-flex justify-content-center" style="font-size:100px;"></i>
   </div>
   <div class="container mt-3">
        <h1 class="text-center"><?=$name[0]['full_name']?></h1>
</div>
   <div class="container m-5 fs-5"><a class="nav-link nav-item" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#exampleModalPopovers"><i class="bi bi-pencil-square m-3"></i>Edit Profile</a></div>
   <div class="container m-5 fs-5"><a class="nav-link nav-item" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-lock-fill m-3"></i>Change Password</a></div>
  </div>
  </div>
</div>
<div class="modal fade" id="exampleModalPopovers" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalPopoversLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=$action->helper->url('action/savechanges')?>">
        <div class="form-floating mb-2">
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Full Name</label>
    </div>
     <div class="form-floating mb-2">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalPopoversLabel">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=$action->helper->url('action/savepass')?>">
        <div class="form-floating mb-2">
      <input type="password" class="form-control" name="name" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Enter Password</label>
    </div>
     <div class="form-floating mb-2">
      <input type="password" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Confirm Password</label>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>