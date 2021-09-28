<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'include/header.php' ?>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <!-- login dialoge box start -->
  <div class="body text-center">
    <main class="form-signin border shadow">
      <form>
        <img class="mb-4" src="./img/logo.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>

        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" placeholder="Company">
          <label for="floatingInput">Company Name</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
          <label for="floatingPassword">Confirm Password</label>
        </div>
        <div class="checkbox my-3">
          <label>
            <input type="checkbox" value="remember-me"> Accept Terms and condition
          </label>
        </div>
        
        <a class="w-100 btn btn-lg btn-primary" href="dashboard.php" role="button">Register Now</a>
        <!-- cancle button-->
        <button class="w-100 btn btn-lg btn-danger mt-3" type="submit" onclick="goBack()">
          <script language="JavaScript" type="text/javascript">
            function goBack() {
              window.history.back()
            }
          </script>Cancle
        </button>

        <!-- copyright section -->
        <p class="mt-3 mb-md-0 color-2 text-center text-md-left">Copyright ©
          <script language="JavaScript" type="text/javascript">
            document.write((new Date()).getFullYear())
          </script>, Chatbot
        </p>
      </form>
    </main>
  </div>
  <!-- login dialoge box end -->


  <?php include 'include/script.php'; ?>
</body>

</html>