

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php?page=room_chat">
          <img src="./assets/pictures/chat.png" alt="Logo" style="height: 30px; width: auto;">
          Chat Rooms
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <button class="btn btn-primary mr-2" type="button" data-toggle="modal" data-target="#createRoomModal">Créer une room</button>
              </li>
              <li class="nav-item">
                  <button class="btn btn-primary mr-2" type="button" data-toggle="modal" data-target="#inviteRoomModal">Inviter dans une room</button>
              </li>
              <li class="nav-item">
                  <form method="post" action="index.php?page=room_chat">
                      <button class="btn btn-danger" name="dec" type="submit">Déconnexion</button>
                  </form>
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
        <div class="col-md-9 bg-black">
        <div id="add-room-section" class="card">
          <div class="card-body " >
            <h2 class="card-title text-center mb-4">Ajouter une room</h2>
              <form action="index.php?page=ajouteroom" method="post">
              <div class="form-group">
                <label for="roomName">Nom de la room</label>
                <input type="text" name="name"class="form-control" id="roomName" placeholder="Entrez le nom de la room">
              </div>

                <div class="form-group">
                    <label for="userList">Utilisateurs</label>
                    <select class="form-control" name="user_list[]" id="userList" multiple>
                        <?php

                        foreach ($users as $user) {
                            echo "<option value='" . $user['id'] . "'>" . $user['username'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Ajouter Room</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>








