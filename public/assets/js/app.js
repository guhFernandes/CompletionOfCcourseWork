if (document.getElementById('loading')) {
    var i = setInterval(function () {

        clearInterval(i);

        document.getElementById('loading').style.display = "none";
        document.getElementById('content').style.display = "block";
    }, 1650); 
}else if (document.getElementById('loadingDash')){
    var i = setInterval(function () {
        
        clearInterval(i);
    
        document.getElementById('loadingDash').style.display = "none";
        document.getElementById('contentDash').style.display = "block";
        document.body.style.overflow = 'visible';
    }, 999);
} else {
    clearInterval(i);
}
if (document.getElementById('loadingDash')) {
    document.getElementById('contentDash').style.display = "none";
    document.getElementById('loadingDash').scrollIntoView(true);
    document.body.style.overflow = 'hidden';
} 
function validateField(el) {
    if (document.getElementById(el).value == "") { 
        alert("Campo vazio !");
        return false;
    } 
}
function toLimit(el){
    document.getElementById(el).value = document.getElementById(el).value.substring(0,23);
}