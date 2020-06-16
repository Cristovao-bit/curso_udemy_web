$(document).ready(function() {
    $.get("https://www.googleapis.com/youtube/v3/videos", {
            part: 'statistics',
            id: 'TkRrjShYOBU',
            key: 'AIzaSyCPAm29smA10lTAqQKqHytm7NcX4X0LJnM'},
            function(data) {
                console.log(data);
            }
    );
});