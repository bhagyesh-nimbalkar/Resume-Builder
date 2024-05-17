<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<?php 
 $resume['contact'] = str_replace('\\',"",$resume['contact'][0]);
 $resume['skills'] = str_replace('\\',"",$resume['skills'][0]);
 $resume['experience'] = str_replace('\\',"",$resume['experience'][0]);
 $resume['education'] = str_replace('\\',"",$resume['education'][0]);


 $resume['contact'] = implode(',',$resume['contact']);
 $resume['skills']= implode(',',$resume['skills']);
 $resume['experience']= implode(',',$resume['experience']);
 $resume['education']= implode(',',$resume['education']);

 $contact = json_decode($resume['contact']);
 $skills = json_decode($resume['skills']);
 $experience = json_decode($resume['experience']);
 $education = json_decode($resume['education']);

?>
<div class="container">
  <h3 class="my-3 text-bolder">Enter Your Details </h3>
    <form method="post" class="border border-2 rounded p-2 my-3" action="<?=$action->helper->url('action/saveresume/'.$resume['url'])?>">
      <p class="fs-4"><i class="bi bi-person-fill m-2"></i>Personal Details</p>
      <div class="row justify-content-between">
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter your Name" value="<?=@$resume['name'][0]['name']?>"  id="inputEmail3" required>
    </div>
  </div>
  <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Headline</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="headline" placeholder="PHP Developer" value="<?=@$resume['headline'][0]['headline']?>"  id="inputEmail3" required>
    </div>
  </div>
</div>
  <div class="col mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Objective</label>
    <div class="">
      <textarea class="w-100" name="objective"  id="obj" required><?=@$resume['objective'][0]['objective']?></textarea>
    </div>
  </div>
  <hr>
  <p class="fs-4"><i class="bi bi-person-lines-fill m-2"></i>Contact Details</p>
  <div class="row justify-content-between">
   <div class="col-6 mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="">
      <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?=@$contact->email?>" id="inputEmail3" required>
    </div>
  </div>
   <div class="col-6 mb-3">
    <label for="inputEmail3"  class="col-sm-2 col-form-label">Mobile</label>
    <div class="">
      <input type="mobile" name="mobile" placeholder="Enter Mobile" value="<?=@$contact->mobile?>" class="form-control" id="inputEmail3" required>
    </div>
  </div>
</div>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
    <div class="">
      <input type="text" name="address" placeholder="Enter Address" value="<?=@$contact->address?>" class="form-control" id="inputEmail3">
    </div>
  </div>
  <hr>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-tools m-2"></i>Skills</label>
    <div id="skills">
      <input type="hidden" name="skill[]" class="form-control my-2" disabled value="">
    </div>
 <div class="input-group mb-3">
   <script>
      let skill = <?php echo json_encode($skills);?>;
      for(let i=0;i<skill.length;++i)
      {
         $("#skills").append(`<span class="badge text-bg-danger p-2 m-1">${skill[i]}<input type='hidden' name='skill[]' value='${skill[i]}'> <span class='text-black removeskill' onclick='removeskill(this)'>X</span></span>`);
      }
    </script>
  <input type="text" class="form-control"   placeholder="HTML" id="userskill" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-primary" type="button" id="addskill">Add Skills</button>
</div>
  </div>
  <hr>
   <div class="mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label "><i class="bi bi-book-half m-2"></i>Education</label>
    <div id="educations">
    </div>
    <div class="d-flex gap-2">
      <script>
         let education = <?php echo json_encode($education);?>;
                  for(let i=0;i<education.length;++i)
                  {
                     $("#educations").append(`<div class="d-inline-block border rounded p-2 m-2">
         <input type="hidden" name="college[]" value="${education[i].college}">
         <input type="hidden" name="course[]" value="${education[i].course}">
         <input type="hidden" name="e_duration[]" value="${education[i].e_duration}">
         <h4>${education[i].college}</h4>
         <p>${education[i].course} - (${education[i].e_duration})</p>
         <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeeducation(this)">Remove</button>
</div>`);
                  }
      
      </script>
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
      <script>
        let experience = <?php echo json_encode($experience); ?>;
        for(let i=0;i<experience.length;i++)
        {
             $("#exps").append(`<div class="d-inline-block border rounded p-2 m-2">
         <input type="hidden" name="company[]" value="${experience[i].company}">
         <input type="hidden" name="jobrole[]" value="${experience[i].jobrole}">
         <input type="hidden" name="w_duration[]" value="${experience[i].w_duration}">
         <textarea class="d-none" name="work_desc[]">${experience[i].about}</textarea>
         <h4>${experience[i].company}</h4>
         <p>${experience[i].jobrole} - (${experience[i].w_duration})</p>
         <p>${experience[i].about}</p>
         <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeexps(this)">Remove</button>
</div>`);
        }
      </script>
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
  <button type="submit" class="btn btn-warning"><i class="bi bi-cloud-plus m-2"></i>Update Resume</button>
</div>
</form>
</div>
