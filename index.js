function changes() {

    var err = document.getElementsByTagName("body")
    err[0].style.backgroundColor = "black";

}
function change() {
    var errr = document.getElementsByTagName("body")
    errr[0].style.backgroundColor = "white";
}
document.getElementById("year").innerHTML = new Date().getFullYear()

setTimeout(myFunction, 3000);

function myFunction() {
    document.getElementById("welcome").innerHTML = "Welcome to AgricKonnects!";
}



setInterval(myFunction, 1000);

function myFunction() {
    let d = new Date();
    document.getElementById("times").innerHTML =
        d.getHours() + ":" +
        d.getMinutes() + ":" +
        d.getSeconds();
}