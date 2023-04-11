
if (window.screen.width > 375) {
    document.getElementById('desktop').style.display = 'block';  

} else {
    document.getElementById('mobile').style.display = 'block';
}

function validateField(el) {
    if (document.getElementById(el).value == "") { 
        alert("Campo vazio !");
    }
}
