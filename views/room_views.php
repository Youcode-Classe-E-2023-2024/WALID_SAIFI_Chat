


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
                <a href="index.php?page=ajouteroom" class="btn btn-primary mr-2" role="button">
                    Créer une room
                </a>
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
                <h2 class="titre_room">Liste des rooms</h2>
                <ul class="list-group room-list">
                    <?php
                    $id=$_SESSION['id'];
                    $rom = Room::getAllroom($id);
                    foreach ($rom as $tab) {
                        echo "<a href='index.php?page=room&id=" . $tab['id'] . "'><li class=\"list-group-item\">" . $tab['name'] . "</li></a>";
                    }
                    ?>


                </ul>
            </div>
        </div>

        <!-- Zone de messages -->
        <div class="col-md-9">
            <div id="message-section">
                <?php

                ?>
                <h2 class="titre_room">Messages Room 1</h2>

                <div class="message-container">
                    <?php
                    foreach ($res as $tab) {
                        echo '<div class="mes">' . $tab['username'] . ':' . $tab['timestamp'] . ':<br>';
                        echo $tab['content'] . '</div>';
                    }
                    ?>
                </div>

              <form action="index.php?page=room" method="post">
                <div class="input-group message-input">
                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="message" type="submit">Envoye</button>
                    </div>
                     </div>

              </form>
            </div>
        </div>

    </div>
</div>



