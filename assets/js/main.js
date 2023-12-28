
document.getElementById('sendButton').addEventListener('click', function() {
    var userId = document.getElementById('userIdInput').value;
    var roomId = document.getElementById('roomIdInput').value;
    var message = document.getElementById('messageInput').value;
  
    $.ajax({
        url: 'index.php?page=home1', // Update with the actual path
        type: 'POST',
        data: {
            user_id: userId,
            room_id: roomId,
            messageInput: message
        },
        success: function(response) {
            document.getElementById('messageInput').value = '';
        },
        error: function() {
            console.log('Error sending message');
        }
    });
  });