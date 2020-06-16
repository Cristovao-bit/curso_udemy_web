//comandos retirados da página youteb api v3
//para pegar o nome do canal direito é só digitar no youtube o nome do canal que você deseja pegar
//e verifica na url se tem user/onomedocanal e pega só o nome.
var nomeCanal = 'CanalElegante';
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
        $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
            part: 'snippet',
            maxResults: 10,
            playlistId: id,
            key: 'AIzaSyCPAm29smA10lTAqQKqHytm7NcX4X0LJnM'},
        function(data){
            var imagem;
            var arquivo;
            $.each(data.items, function(i, item){
                imagem = item.snippet.thumbnails.medium.url;
                titulo = item.snippet.title;
                data = formatarData(item.snippet.publishedAt);
                descricao = item.snippet.description;
                videoId = item.snippet.resourceId.videoId;
                arquivo = '<li class="principal"><a class="fancybox-media" href="https://www.youtube.com/watch?v=' + videoId + '"><div class="foto"><img src="' + imagem + '"/><div class="legenda"><h5>' + titulo + '</h5><p>' + descricao + '</p></div></div></a></li>';
                $('div#janela ul').append(arquivo);
            });
        })
    }
    
    function formatarData(data){
        return data.substr(8,2) + '/' + data.substr(5,2) + '/' + data.substr(0,4);
    };
    
});

//UU9BUxkHwS4hIpb04DXgpvKw código de uploads retirado do browser em contentDetails/relatedPlaylists.