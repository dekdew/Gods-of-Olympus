var data;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        data = JSON.parse(this.responseText);
        
    }
};
xmlhttp.open("GET", "data.json", true);
xmlhttp.send();
<<<<<<< HEAD
var zeus='zeus';
function setGod(god) {
    alert(data.god.greekName);
}
=======

function myFunction(gods) {
    console.log(gods);
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
>>>>>>> a4ed533c386d7cb2ddf833e0ff045d13b84fe2ed
