function sendMessage() {
    var xhr = new XMLHttpRequest();
    var message = document.getElementById("message").value;

    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "index.php?page=room&message=" + encodeURIComponent(message), true);
    xhr.send();
}