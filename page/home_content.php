<?php 
        $id = $action->user_id();
        $name = $action->db->read('users','full_name','where id='.$id);
?>
<div class="container ">
    <a href="<?=$action->helper->url('select-template')?>" class="btn btn-sm btn-secondary my-2"><i class="bi bi-plus-square-fill m-1"></i>Create New Resume</a>
<?php
 foreach($resumes as $resume)
 {
  ?>
     <div class="card my-3">
  <div class="card-body ">
    <h5 class="card-title"><?=$resume['headline']?></h5>
    <p class="card-text"><?=$resume['objective']?></p>
    <a href="<?=$action->helper->url("action/update_resume/".$resume['url'])?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square m-1"></i>Update</a>
    <a href="<?=$action->helper->url("action/deleteresume/".$resume['url'])?>" class="btn btn-sm btn-danger"><i class="bi bi-trash m-1"></i>Delete</a>
    <a href="<?=$action->helper->url("resume/".$resume['url'])?>" class="btn btn-sm btn-info"><i class="bi bi-eye m-1"></i>View</a>
  </div>
</div>
     <?php
 } 
 if(count($resumes)<1)
 {
   ?>
   <div class="container">
<div class="card my-3">
  <div class="card-body ">
    <h1 class="text-center text-muted"><i class="bi bi-cloud-drizzle m-1"></i>No Resume Found </h1>
  </div>
</div>
 </div>
   <?php

 }
?>
