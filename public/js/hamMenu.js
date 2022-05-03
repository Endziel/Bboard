let btn = document.querySelector('.burger');
let nav = document.querySelector('.buttons');

btn.onclick = function (){
    // alert("hello");
    if(nav.style.display != 'flex'){
        nav.style.display = 'flex';
    }else{

            nav.style.display = '';

    }


}


function hamMenuFunction() {

}