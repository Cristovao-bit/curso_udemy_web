//comandos retirados da página youteb api v3
var nomeCanal = 'backtotriangle';
var upload_id;

$(document).ready(function () {
    $.get("https://www.googleapis.com/youtube/v3/channels", {
        part: 'contentDetails',
        forUsername: nomeCanal,
        key: 'AIzaSyCPAm29smA10lTAqQKqHytm7NcX4X0LJnM'},
      function(data){
          upload_id = data.items[0].contentDetails.relatedPlaylists.uploads;
          pegarVideos(upload_id);
      }    
    );
    
    function pegarVideos(id){
        console.log(id);
    }
    
});

//UU9BUxkHwS4hIpb04DXgpvKw código de uploads retirado do browser em contentDetails/relatedPlaylists.