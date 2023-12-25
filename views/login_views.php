

  <!-- Common Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="./assets/pictures/chat.png" alt="Logo" style="height: 30px; width: auto;">
      Chat Rooms
    </a>
  </nav>

  <!-- Login Page -->
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>
            <form id="loginForm">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <p class="mt-3 text-center">Don't have an account? <a href="index.php?page=register">Register</a></p>
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
    // JavaScript code for login logic
    $(document).ready(function () {
      $('#loginForm').submit(function (event) {
        event.preventDefault();
        // Implement your login logic here
        // Example: Validate credentials using AJAX
        // $.ajax({
        //   type: 'POST',
        //   url: 'login.php',
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
