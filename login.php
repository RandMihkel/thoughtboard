<?php 
/*
Mihkel Rand
09.05.2021
*/
?>
<!doctype html>
<html lang="en">
  <main class="form-signin">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-2 p-4 text-white bg-dark test-account">
          <p>Use this account to log in for testing purposes without having to create a whole new account.
          <br><br>
          <b>Username: </b>test<br>
          <b>Password: </b>1234
          </p>
        </div>        
        <div class="col-md-5">
          <form>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>    
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
          
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          </form>
        </div>
        <div class="col-md-5">
          <form>
            <h1 class="h3 mb-3 fw-normal">or sign up!</h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>    
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          </form>          
        </div> 
      </div>
    </div>
  </main>
</html>  