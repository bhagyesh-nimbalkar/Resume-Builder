
<main class="form-signin w-100 m-auto text-center">
  <h1 class="text-center mb-5 font-weight-bolder text-justify text-uppercase">Resume Builder</h1>
  <form method="post" action="<?=$action->helper->url('action/login')?>">
    <img class="mb-4" src="<?=$action->helper->loadimage('logo.png')?>" alt="" width="72">
    <h1 class="h3 mb-3 fw-normal fst-italic fs-2">Login</h1>

     <div class="form-floating mb-2">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    <a href ="<?=$action->helper->url('signup')?>" class="d-block my-2 text-decoration-none">Create New account !</a>
  </form>
</main>

