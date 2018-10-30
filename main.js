var xmlhttp = new XMLHttpRequest();
var url = "data.json";
xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var gods = JSON.parse(xmlhttp.responseText);
        myFunction(gods);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(gods) {
    console.log(gods);
}
