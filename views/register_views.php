<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../assets/pictures/chat.png" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Chat Rooms - Register</title>
</head>

<body>

  <!-- Common Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="../assets/pictures/chat.png" alt="Logo" style="height: 30px; width: auto;">
      Chat Rooms
    </a>
  </nav>

  <!-- Registration Page -->
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Register</h2>
            <form id="registerForm">
              <div class="form-group">
                <label for="registerEmail">Email</label>
                <input type="email" class="form-control" id="registerEmail" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="registerEmail">Username</label>
                <input type="text" class="form-control" id="registerEmail" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="registerPassword">Password</label>
                <input type="password" class="form-control" id="registerPassword" placeholder="Enter your password"
                  required>
              </div>
              <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password"
                  required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <p class="mt-3 text-center">Already have an account? <a href="login.html">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Common Scripts JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // JavaScript code for registration logic
    $(document).ready(function () {
      $('#registerForm').submit(function (event) {
        event.preventDefault();
        // Implement your registration logic here
        // Example: Validate inputs and register user using AJAX
        // $.ajax({
        //   type: 'POST',
        //   url: 'register.php',
        //   data: $(this).serialize(),
        //   success: function(response) {
        //     // Handle success response
        //   },
        //   error: function(error) {
        //     // Handle error response
        //   }
        // });
      });
    });
  </script>
</body>

</html>
