<!-- Common Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="./assets/pictures/chat.png" alt="Logo" style="height: 30px; width: auto;">
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

          <form id="registerForm" action="index?page=register " method="post">
            <div class="form-group">
              <label for="registerEmail">Email</label>
              <input type="email" name="email" class="form-control" id="registerEmail" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="registerUsername">Username</label>
              <input type="text" name="username" class="form-control" id="registerUsername" placeholder="Enter username" required>
            </div>
            <div class="form-group">
              <label for="registerPassword">Password</label>
              <input type="password" name="password" class="form-control" id="registerPassword" placeholder="Enter password" required>
            </div>

            <button type="submit" name="REG" class="btn btn-primary btn-block">Register</button>
          </form>

          <p class="mt-3 text-center">Already have an account? <a href="index.php?page=login">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Common Scripts JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
