if (screen.width > 375) {
    document.getElementById('desktop').style.display = 'block';  

} else {
    document.getElementById('mobile').style.display = 'block';
}

function validateField(el) {
    if (document.getElementById(el).value == "") { 
        alert("Campo vazio !");
        document.getElementById(el).focus();
        return false;
    } 
}
function toLimit(el){
    document.getElementById(el).value = document.getElementById(el).value.substring(0,23);
}

var i = setInterval(function () {

    clearInterval(i);

    document.getElementById('loading').style.display = "none";
    document.getElementById('content').style.display = "block";

}, 900);
