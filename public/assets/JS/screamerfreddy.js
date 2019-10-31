setTimeout(function() {
    document.getElementById('screamer_freddy').style.display='block';
    var audio = new Audio('/assets/ahahah.mp3');
    audio.play();
},6000);


setTimeout(function() {
    document.getElementById('screamer_freddy').style.display='none';
},9000);

window.setTimeout("location=('/Result/index');", 9000);

