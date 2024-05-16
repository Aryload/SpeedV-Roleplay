$(document).ready(function() {
  var serverOnline = true; // Setzen Sie den Status hier entsprechend der tatsächlichen Serververfügbarkeit

  function updateServerStatus() {
      var statusText = '';
      var statusIconSrc = '';

      if (serverOnline) {
          statusText = 'Der Server ist derzeit online.';
          statusIconSrc = 'html/assets/img/online.png'; // Pfad zum Online-Icon aktualisieren
          $('#serverStatus').removeClass('status-offline').addClass('status-online');
      } else {
          statusText = 'Der Server ist derzeit offline.';
          statusIconSrc = 'html/assets/img/offline.png'; // Pfad zum Offline-Icon aktualisieren
          $('#serverStatus').removeClass('status-online').addClass('status-offline');
      }

      $('#statusIcon').attr('src', statusIconSrc);
      $('.status-text p').text(statusText);
  }

  updateServerStatus(); // Initialen Serverstatus aktualisieren
});
