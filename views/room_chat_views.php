


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="./assets/pictures/chat.png" alt="Logo" style="height: 30px; width: auto;">
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
       
       
      </ul>
      <li class="nav-item">
        <button class="btn btn-danger" type="button">Déconnexion</button>
      </li>
    </div>
  </nav>

  <!-- Contenu principal -->
  <div class="container-fluid mt-4">
    <div class="row">

      <!-- Liste des rooms -->
      <div class="col-md-3">
        <div id="room-list-section">
          <h2 class="titre_room">Liste des rooms</h2>
          <ul class="list-group room-list">
            <!-- Remplacez ces éléments li par vos rooms dynamiquement -->
            <li class="list-group-item">Room 1</li>
            <li class="list-group-item">Room 2</li>
            <li class="list-group-item">Room 3</li>
          </ul>
        </div>
      </div>

      <!-- Zone de messages -->
      <div class="col-md-9">
        <div id="message-section">
          <h2 class="titre_room">Messages Room 1</h2>
          <div class="message-container">
            <!-- Messages exemples -->
            <div class="mes">User1: Hello!</div>
            <div class="mes">User2: Hi there!</div>
            <div class="mes">User1: How are you?</div>
            <div class="mes">User2: I'm good, thanks!</div>
            <div class="mes">User1: Great to hear!</div>
              <div class="mes">User1: Hello!</div>
              <div class="mes">User2: Hi there!</div>
              <div class="mes">User1: How are you?</div>
              <div class="mes">User2: I'm good, thanks!</div>
              <div class="mes">User1: Great to hear!</div>
              <div class="mes">User1: Hello!</div>
              <div class="mes">User2: Hi there!</div>
              <div class="mes">User1: How are you?</div>
              <div class="mes">User2: I'm good, thanks!</div>
              <div class="mes">User1: Great to hear!</div>
              <div class="mes">User1: Hello!</div>
              <div class="mes">User2: Hi there!</div>
              <div class="mes">User1: How are you?</div>
              <div class="mes">User2: I'm good, thanks!</div>
              <div class="mes">User1: Great to hear!</div>
          </div>
          <div class="input-group message-input">
            <textarea class="form-control" placeholder="Type your message..."></textarea>
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">Envoye</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modals pour les fonctionnalités -->
  <!-- Ajoutez des modals pour les fonctionnalités comme créer une room, inviter, kick, friend requests, etc. -->

  <!-- Scripts JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Ajoutez vos propres scripts JS pour gérer les messages et l'interaction avec les rooms -->


