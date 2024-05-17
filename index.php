<?php 
require('dnlib/load.php');
$action->helper->route('/',function(){
    global $action;
    $data['title']='Resume Builder - Make & Share Resume Online';
    $action->view->load('header',$data);
    $action->view->load('navbar');
    $action->view->load('not_found');
    $action->view->load('footer');
});

$action->helper->route('cvbuilder/$type',function($data){
    global $action;
    $action->onlyForAuthUser();
    $data['title']="Type ".$data['type']." Resume";
    $data['myresume']='active';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('cvbuilder_content_1');
    $action->view->load('footer');
});
 $action->helper->route('resume/$url',function($data){
        global $action;
        $resumedata = $action->db->read("resumes","*","where url='".$data['url']."'");
        if(!$resumedata)
        {
             $action->helper->redirect('home');
        }
        $resumedata=$resumedata[0];

        $data['title']=$resumedata['name'];
        $data['type']=$resumedata['type'];
        $data['resume']=$resumedata;
        if($data['type']==1)
        {
            $action->view->load('header',$data);
            $action->view->load('cvbuilder_content_1',$data);
            $action->view->load('footer');
        }
        else if($data['type']==2)
        {
            $action->view->load('header',$data);
            $action->view->load('cvbuilder_content_2',$data);
            $action->view->load('footer');
        }
        else if($data['type']==3)
        {
            $action->view->load('header',$data);
            $action->view->load('cvbuilder_content_3',$data);
            $action->view->load('footer');
        }
        else
        {
             $action->helper->redirect('home');
        }
 });
$action->helper->route('select-template',function($data){
    global $action;
    $action->onlyForAuthUser();
    $data['title']="Select Resume Template";
    $data['myresume']='active';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('template_content');
    $action->view->load('footer');
});

$action->helper->route('cv-details/$cvtype',function($data){
    global $action;
    $action->onlyForAuthUser();
    $data['title']="Resume Details";
    $data['myresume']='active';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    if($data['cvtype']==1)
    {
    $action->view->load('cv_details_1',$data);
    }
    else if($data['cvtype']==2)
    {
       $action->view->load('cv_details_1',$data);
    }
    else if($data['cvtype']==3)
    {
       $action->view->load('cv_details_1',$data);
    }
    else{
         $action->session->set('error','Invalid resume type');
         $action->helper->redirect('select-template');
    }
    $action->view->load('footer');
});
$action->helper->route('contact',function(){
    global $action;
    $data['title']='Welcome to home';
    $data['myresume']='active';

    $action->view->load('header',$data);
    //$action->view->load('navbar',$data);
    $action->view->load('contact',$data);
    $action->view->load('footer');
});
$action->helper->route('main',function(){
    global $action;
    $data['title']='Welcome to home';
    $data['myresume']='active';

    $action->view->load('header',$data);
    $action->view->load('main',$data);
    $action->view->load('footer');
});
$action->helper->route('home',function(){
    global $action;
    $action->onlyForAuthUser();
    $data['title']='Welcome to home';
    $data['myresume']='active';

    $data['resumes']=$action->db->read('resumes','*',"where user_id=".$action->user_id());
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('home_content',$data);
    $action->view->load('footer');
});
$action->helper->route('action/update_resume/$url',function($data){
    global $action;
    $action->onlyForAuthUser();
    $resume=$data['url'];
    $resume_data['name']=$action->db->read('resumes','name',"where url='$resume'");
    $resume_data['headline']=$action->db->read('resumes','headline',"where url='$resume'");
    $resume_data['objective']=$action->db->read('resumes','objective',"where url='$resume'");
    $skills = $action->db->read('resumes','skills',"where url='$resume'");
    $experience = $action->db->read('resumes','experience',"where url='$resume'");
    $education = $action->db->read('resumes','education',"where url='$resume'");
    $contact =   $action->db->read('resumes','contact',"where url='$resume'");

    $resume_data['contact']=$contact;
    $resume_data['skills']=$skills;
    $resume_data['experience']=$experience;
    $resume_data['education']=$education;
    $resume_data['url']=$resume;
    $resume_data['resume']=$resume_data;
    $action->view->load('header');
    $action->view->load('navbar');
    $action->view->load('update_resume',$resume_data);
    $action->view->load('footer');
});
$action->helper->route('action/saveresume/$url',function($data){
    global $action;
    $action->onlyForAuthUser();
    echo "<pre>";
    print_r($data);
    $resume=$data['url'];
    $resume_data[0]=$action->db->clean($_POST['name']);
    $resume_data[1]=$action->db->clean($_POST['headline']);
    $resume_data[2]=$action->db->clean($_POST['objective']);
    $contact['email']=$action->db->clean($_POST['email']);
    $contact['mobile']=$action->db->clean($_POST['mobile']);
    $contact['address']=$action->db->clean($_POST['address']);
    $resume_data[6]=json_encode($contact);
    $resume_data[3]=json_encode($_POST['skill']);
    $education=array();
    $work=array();
    foreach($_POST['college'] as $key=>$value)
    {
         $education[$key]['college']=$action->db->clean($value);
         $education[$key]['course']=$action->db->clean($_POST['course'][$key]);
         $education[$key]['e_duration']=$action->db->clean($_POST['e_duration'][$key]);

    }
    foreach($_POST['company'] as $key=>$value)
    {
         $work[$key]['company']=$action->db->clean($value);
         $work[$key]['jobrole']=$action->db->clean($_POST['jobrole'][$key]);
         $work[$key]['w_duration']=$action->db->clean($_POST['w_duration'][$key]);
         $work[$key]['work_desc']=$action->db->clean($_POST['work_desc'][$key]);      

    }
    $resume_data[4]=json_encode($work);
    $resume_data[5]=json_encode($education);
    $run = $action->db->update('resumes','name,headline,objective,contact,skills,experience,education',$resume_data,"url='$resume'");
     if($run)
    {
        $action->session->set('success','Resume Updated!');
        $action->helper->redirect('home');
    }
    else{
        $action->session->set('error','Something went wrong, Try again after some time!');
        $action->helper->redirect('home');
    }
});
$action->helper->route('action/createresume',function(){
    global $action;
    $action->onlyForAuthUser();
    $resume_data[0]=$action->session->get('Auth')['data']['id'];
    $resume_data[1]=$action->db->clean($_POST['name']);
    $resume_data[2]=$action->db->clean($_POST['headline']);
    $resume_data[3]=$action->db->clean($_POST['objective']);
    $contact['email']=$action->db->clean($_POST['email']);
    $contact['mobile']=$action->db->clean($_POST['mobile']);
    $contact['address']=$action->db->clean($_POST['address']);
    $resume_data[7]=json_encode($contact);
    $resume_data[4]=json_encode($_POST['skill']);
    $education=array();
    $work=array();
    foreach($_POST['college'] as $key=>$value)
    {
         $education[$key]['college']=$action->db->clean($value);
         $education[$key]['course']=$action->db->clean($_POST['course'][$key]);
         $education[$key]['e_duration']=$action->db->clean($_POST['e_duration'][$key]);

    }
    foreach($_POST['company'] as $key=>$value)
    {
         $work[$key]['company']=$action->db->clean($value);
         $work[$key]['jobrole']=$action->db->clean($_POST['jobrole'][$key]);
         $work[$key]['w_duration']=$action->db->clean($_POST['w_duration'][$key]);
         $work[$key]['work_desc']=$action->db->clean($_POST['work_desc'][$key]);      

    }
    $resume_data[5]=json_encode($work);
    $resume_data[6]=json_encode($education);
    $resume_data[8]=$action->helper->UID();
    $resume_data[9]=$action->db->clean($_POST['type']);
    $run = $action->db->insert('resumes','user_id,name,headline,objective,contact,skills,experience,education,url,type',$resume_data);
    if($run)
    {
        $action->session->set('success','Resume Created!');
        $action->helper->redirect('home');
    }
    else{
        $action->session->set('error','Something went wrong, Try again after some time!');
        $action->helper->redirect('home');
    }
});

$action->helper->route('action/logout',function(){
    global $action;
    $action->session->delete('Auth');
    $action->session->set('success','Logged out Successfully !');
    $action->helper->redirect('main');
});
// for signup 
$action->helper->route('signup',function(){
    global $action;
    $action->onlyForUnauthUser();
    $data['title']='Signup - Resume Online';
    $action->view->load('header',$data);
    echo "<style>
    html,
body {
    height: 100%;
}

body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
}
    </style>";
    $action->view->load('signup_content');
    $action->view->load('footer');
});
$action->helper->route('login',function(){
    global $action;
    $action->onlyForUnauthUser();
    $data['title']='Login - Resume Online';
    $action->view->load('header',$data);
    echo "<style>
    html,
body {
    height: 100%;
}

body {
    display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
}
    </style>";
    $action->view->load('login_content');
    $action->view->load('footer');
});
$action->helper->route('action/savechanges',function(){
      global $action;
      $id = $action->user_id();
      $data[0]=$action->db->clean($_POST['name']);
      $data[1]=$action->db->clean($_POST['email']);
      $action->db->update('users','full_name,email_id',$data,"id=".$id);
      $action->session->set('success','Changes Saved Successfully!');
      $action->helper->redirect('home');
});
$action->helper->route('action/savepass',function(){
      global $action;
      $id = $action->user_id();
      if(!($action->db->clean($_POST['name']) == $action->db->clean($_POST['email'])))
      {
           $action->session->set('error','Passwords do not match');
      $action->helper->redirect('home');
      return;
      }
      $data[0]=$action->db->clean($_POST['name']);
      $action->db->update('users','password',$data,"id=".$id);
      $action->session->set('success','Changes Saved Successfully!');
      $action->helper->redirect('home');
});
$action->helper->route('action/login',function(){
    global $action;
    $error=$action->helper->isAnyEmpty($_POST);
    if($error)
    {
          $action->session->set('error',"$error is empty !");
    }
    else
    {
         $email = $action->db->clean($_POST['email']);
         $password = $action->db->clean($_POST['password']);
         $user = $action->db->read('users','id,email_id',"WHERE email_id='$email' AND password='$password'");
         if(count($user)>0)
         {
              $action->session->set('Auth',['status'=>true,'data'=>$user[0]]);
              $action->session->set('success','Logged in Successfully !');
              $action->helper->redirect('home');
         }
         else
         {
            $action->session->set('error',"incorrect email/password !");
            $action->helper->redirect('login');
         }
    }
});
$action->helper->route('action/signup',function(){
    global $action;
    $error=$action->helper->isAnyEmpty($_POST);
    if($error){
        $action->session->set('error',"$error is empty !");
        $action->helper->redirect('signup');
    }
    else{
         $signup_data[0]=$action->db->clean($_POST['full_name']);
         $signup_data[1]=$action->db->clean($_POST['email']);
         $signup_data[2]=$action->db->clean($_POST['password']);
         $user = $action->db->read('users','email_id',"WHERE email_id='$signup_data[1]'");
         if(count($user)>0)
         {
            $action->session->set('error',"$signup_data[1] is already registered !");
            $action->helper->redirect('signup');
         }
         else{
         $action->db->insert('users','full_name,email_id,password',$signup_data);
         $action->session->set('success','Account Created !');
         $action->helper->redirect('login');
         }
    }
});
$action->helper->route('action/deleteresume/$url',function($data){
    global $action;
    $url = $data['url'];
    $action->db->delete('resumes',"url ='$url'");
    $action->session->set('success','Resume Deleted!');
    $action->helper->redirect('home');
});
if(!Helper::$isPageIsAvailable)
{
    $data['title']='No Page Found';
    $action->view->load('header',$data);
    $action->view->load('navbar',$data);
    $action->view->load('not_found');
    $action->view->load('footer');
}
?> 