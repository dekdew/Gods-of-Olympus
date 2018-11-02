var data;
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        data = JSON.parse(this.responseText);
        
    }
};
xmlhttp.open("GET", "data.json", true);
xmlhttp.send();
var zeus='zeus';
function setGod(god) {
    alert(data.god.greekName);
}