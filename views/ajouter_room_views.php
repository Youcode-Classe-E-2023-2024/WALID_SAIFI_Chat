<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="chat.png" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Chat Rooms</title>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="chat.png" alt="Logo" style="height: 30px; width: auto;">
        Chat Rooms
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#createRoomModal">Créer une room</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#inviteRoomModal">Inviter dans une room</button>
        </li>
        <li class="nav-item">
          <button class="btn btn-danger" type="button">Déconnexion</button>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenu principal -->
  <div class="container-fluid mt-4">
    <div class="row">

      <!-- Liste des rooms -->
      <div class="col-md-3">
        <div id="room-list-section">
          <h2>Liste des rooms</h2>
          <ul class="list-group room-list">
            <li class="list-group-item">Room 1</li>
            <li class="list-group-item">Room 2</li>
            <li class="list-group-item">Room 3</li>
          </ul>
        </div>
      </div>

      <!-- Formulaire d'ajout de room et d'utilisateurs -->
      <div class="col-md-9">
        <div id="add-room-section" class="card">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Ajouter une room</h2>
            <form>
              <div class="form-group">
                <label for="roomName">Nom de la room</label>
                <input type="text" class="form-control" id="roomName" placeholder="Entrez le nom de la room">
              </div>
              <div class="form-group">
                <label for="roomName">Sujet de la room</label>
                <input type="text" class="form-control" id="roomName" placeholder="Sujet de la room">
              </div>
              <div class="form-group">
                <label for="userList">Utilisateurs</label>
                <select class="form-control" id="userList" multiple>
                  <!-- Example options, replace with your dynamic content -->
                  <option value="user1">User 1</option>
                  <option value="user2">User 2</option>
                  <option value="user3">User 3</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Ajouter Room</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>





  <!-- Scripts JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Ajoutez vos propres scripts JS pour gérer les messages et l'interaction avec les rooms -->

</body>
</html>