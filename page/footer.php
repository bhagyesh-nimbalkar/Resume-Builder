     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
     <script src="<?=$action->helper->loadjs('main.js')?>"></script>
     <script>
       const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer) 
            }
            })
     <?php
         $error = $action->session->get('error');
         $success = $action->session->get('success');
         if($error)
         {?>
        Toast.fire({
        icon: 'error',
        title: '<?=$error?>'
        })
        <?php
         $action->session->delete('error');
         }
     ?>
     <?php
      if($success)
         {?>
        Toast.fire({
        icon: 'success',
        title: '<?=$success?>'
        })
        <?php
         $action->session->delete('success');
         }
     ?>
     $("#addskill").click(function(){   
            var skill = $('#userskill').val().toUpperCase();
            if(!(skill)){
        Toast.fire({
        icon: 'error',
        title: 'Enter a Skill'
        });
         return;
    }
            $("#skills").append(`<span class="badge text-bg-danger p-2 m-1">${skill}<input type='hidden' name='skill[]' value='${skill}'> <span class='text-black removeskill' onclick='removeskill(this)'>X</span></span>`);
            $('#userskill').val('');
     });

     $("#addeducation").click(function(){   
            var college = $('#college').val().toUpperCase();
            var course = $('#course').val().toUpperCase();
            var e_duration = $('#e_duration').val().toUpperCase();
            if(!college ){
        Toast.fire({
        icon: 'error',
        title: 'Enter a College/Institute'
        })
         return;
    }
    if(!course){
        Toast.fire({
        icon: 'error',
        title: 'Enter a Course'
        })
         return;
    }
    if(!e_duration){
        Toast.fire({
        icon: 'error',
        title: 'Enter a Course Duration'
        })
         return;
    }
            $("#educations").append(`<div class="d-inline-block border rounded p-2 m-2">
         <input type="hidden" name="college[]" value="${college}">
         <input type="hidden" name="course[]" value="${course}">
         <input type="hidden" name="e_duration[]" value="${e_duration}">
         <h4>${college}</h4>
         <p>${course} - (${e_duration})</p>
         <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeeducation(this)">Remove</button>
</div>`);
          $('#college').val('');
          $('#course').val('');
          $('#e_duration').val('');
     });
     $("#addexps").click(function(){   
            var company = $('#company').val().toUpperCase();
            var jobrole = $('#jobrole').val().toUpperCase();
            var w_duration = $('#w_duration').val().toUpperCase();
            var about = $('#work_desc').val().toUpperCase();
            if(!company ){
        Toast.fire({
        icon: 'error',
        title: 'Enter a Company Name'
        })
         return;
    }
    if(!jobrole){
        Toast.fire({
        icon: 'error',
        title: 'Enter a Job Role'
        })
         return;
    }
    if(!w_duration){
        Toast.fire({
        icon: 'error',
        title: 'Enter a Job Duration'
        })
         return;
    }
            $("#exps").append(`<div class="d-inline-block border rounded p-2 m-2">
         <input type="hidden" name="company[]" value="${company}">
         <input type="hidden" name="jobrole[]" value="${jobrole}">
         <input type="hidden" name="w_duration[]" value="${w_duration}">
         <textarea class="d-none" name="work_desc[]">${about}</textarea>
         <h4>${company}</h4>
         <p>${jobrole} - (${w_duration})</p>
         <p>${about}</p>
         <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeexps(this)">Remove</button>
</div>`);
          $('#company').val('');
          $('#jobrole').val('');
          $('#w_duration').val('');
          $('#work_desc').val('');
     });
     function removeexps(button)
     {
          $(button).parent().remove();
     }
     function removeeducation(button)
     {
       $(button).parent().remove();
     }
     function removeskill(button)
     {
       $(button).parent().remove();
     }
     function showMessage()
      {
        let name = $('U_name').val();
        let email = $('U_email').val();
        let phone = $('U_phone').val();
        let message = $('U_message').val();
        console.log(name,email,phone,message);
        if(!name)
        {
           return;
        }
        if(!email)
        {
               return;
        }
        if(!phone)
        {
               return;
        }
        if(!message)
        {
               return;
        }
         Toast.fire({
            icon: 'success',
            title: 'Submitted Successfully'
            })
        
      }
     </script>
</body>
</html>