<main class="form-signin w-100 m-auto text-center">
  <h1 class="text-center mb-5 font-weight-bolder text-justify text-uppercase">Resume Builder</h1>
  <form method="post" action="<?=$action->helper->url('action/signup')?>">
    <img class="mb-4" src="<?=$action->helper->loadimage('logo.png')?>" alt="" width="72">
    <h1 class="h3 mb-3 fw-normal fst-italic fs-2">Create New Account</h1>

    <div class="form-floating mb-2">
      <input type="name" class="form-control" id="floatingInput" name="full_name" placeholder="Full Name">
      <label for="floatingInput">Full Name</label>
    </div>
     <div class="form-floating mb-2">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <a href ="<?=$action->helper->url('login')?>" class="d-block my-2 text-decoration-none">Already have an account? </a>
  </form>
</main>

