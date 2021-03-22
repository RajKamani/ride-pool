const checkbox = document.getElementById('agree');
const button = document.querySelector('.flat-button');


checkbox.onchange = function(){
    if(this.checked){
        button.disabled = false;
        button.classList.remove('disabled-button');
    } else {
        button.disabled = true;
        button.classList.add('disabled-button');
    }

}






