const mychildren = document.querySelectorAll("div.children_head");

mychildren.forEach(function(e){
    e.addEventListener("click", function() {
        document.getElementById("screamer_britney").classList.toggle("active");
        var audio = new Audio('/assets/britney.mp3');
        audio.play();

        setTimeout(function(){
            document.getElementById("screamer_britney").classList.toggle("active");
        },4000);

        window.setTimeout("location=('../home/index');", 4000);
    });
});

