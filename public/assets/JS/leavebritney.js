const mygirls = document.querySelectorAll("div.children_head_girl");
const myboys = document.querySelectorAll("div.children_head_boy");

mygirls.forEach(function(e){
    e.addEventListener("click", function() {
        document.getElementById("screamer_britney").classList.toggle("active");
        var audio = new Audio('/assets/britney.mp3');
        audio.play();

        setTimeout(function(){
            document.getElementById("screamer_britney").classList.toggle("active");
        },4000);

        window.setTimeout("location=('children');", 4000);
    });
});

myboys.forEach(function(e){
    e.addEventListener("click", function() {
        document.getElementById("screamer_kevin").classList.toggle("active");
        var audio = new Audio('/assets/kevin.mp3');
        audio.play();

        setTimeout(function(){
            document.getElementById("screamer_kevin").classList.toggle("active");
        },3000);

        window.setTimeout("location=('children');", 3000);
    });
});

