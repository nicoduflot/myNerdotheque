function loaded(callable){document.addEventListener("DOMContentLoaded", callable);}
function $(selector){return document.querySelector(selector);}
function $$(selector){return document.querySelectorAll(selector);}

var eventClickMouse = new MouseEvent('click', {
    'view': window,
    'bubbles': true,
    'cancelable': true
});


loaded(function(){
    $$(".editMediaButton").forEach(function(mediaLine){
        mediaLine.addEventListener("click", function (){
            console.log(this);
            console.log(this.dataset.id);
            console.log('./includes/ajaxModMedia.php?idMedia='+this.dataset.id);
            fetch('./includes/ajaxModMedia.php?idMedia='+this.dataset.id)
                .then(response => response.json())
                .then( (json) => {
                    //console.log(json);
                    console.log(json);
                    $("#titre").value = json["titre"];
                    $("#resume").value = json["resume"];
                    $("#idMedia").value = json["idMedia"];
                    $("#idUtilisateur").value = json["idUtilisateur"];
                })
                .catch(error => alert("Erreur : " + error));
            //         './includes/ajaxModMedia.php?idMedia='+this.dataset.id,
        });
    });
});
