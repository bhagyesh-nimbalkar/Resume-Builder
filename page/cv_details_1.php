<?php 
  $type = $cvtype;
?>
<div class="container">
  <h3 class="my-3 text-bolder">Enter Your Details </h3>
    <form method="post" class="border border-2 rounded p-2 my-3" action="<?=$action->helper->url('action/createresume')?>">
      <p class="fs-4"><i class="bi bi-person-fill m-2"></i>Personal Details</p>
      <div class="row justify-content-between">
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter your Name" id="inputEmail3" required>
    </div>
  </div>
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Headline</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="headline" placeholder="PHP Developer" id="inputEmail3" required>
    </div>
  </div>
</div>
  <div class="col mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Objective</label>
    <div class="">
      <textarea class="w-100" name="objective" required></textarea>
    </div>
  </div>
  <hr>
  <p class="fs-4"><i class="bi bi-person-lines-fill m-2"></i>Contact Details</p>
  <div class="row justify-content-between">
   <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="">
      <input type="email" name="email" class="form-control" placeholder="Enter Email" id="inputEmail3" required>
    </div>
  </div>
   <div class="col-6 mb-3">
    <label for="inputEmail3"  class="col-sm-2 col-form-label">Mobile</label>
    <div class="">
      <input type="mobile" name="mobile" placeholder="Enter Mobile" class="form-control" id="inputEmail3" required>
    </div>
  </div>
</div>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="">
      <input type="text" name="address" placeholder="Enter Address" class="form-control" id="inputEmail3">
    </div>
  </div>
  <hr>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-tools m-2"></i>Skills</label>
    <div id="skills">
      <input type="hidden" name="skill[]" class="form-control my-2" disabled value="">
    </div>
 <div class="input-group mb-3">
  <input type="text" class="form-control"     placeholder="HTML" id="userskill" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-primary" type="button" id="addskill">Add Skills</button>
</div>
  </div>
  <hr>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-book-half m-2"></i>Education</label>
    <div id="educations">
    </div>
    <div class="d-flex gap-2">
      <input type="text" class="form-control"  id="college"  placeholder="Sppu University, Pune">
      <input type="text" class="form-control" id="course"  placeholder="Bachelor in Information Technology">
            <input type="text" class="form-control" id="e_duration"  placeholder="2019-2023">
            <button type="button"class="btn btn-outline-primary" id="addeducation"> Add </button>
    </div>
  </div>
  <hr>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-briefcase-fill m-2"></i>Experience</label>
    <div id="exps" class=""  >
    </div>
    <div class="d-flex gap-2">
      <input type="text"  class="form-control"  id="company" placeholder="Google">
      <input type="text"  class="form-control"  id="jobrole" placeholder="Graphic Designer" >
            <input type="text"  class="form-control"  id="w_duration" placeholder="2019-2023" >
    </div>
    <span class="d-block mt-2">About Your Work</span>
    <textarea id="work_desc"   class="w-100 mb-2"></textarea>
    <button type="button"class="btn btn-outline-primary" id="addexps"> Add </button>
  </div>
  <hr>
  <div class="container w-100 d-flex justify-content-end">
    <input type="hidden" name="type" value="<?=$type?>">
  <button type="submit" class="btn btn-warning"><i class="bi bi-cloud-plus m-2"></i>Create Resume</button>
</div>
</form>
</div>