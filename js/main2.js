var buttons = document.getElementsByTagName("button");
for (var i = 0; i <buttons.length; i++){
    buttons[i].onclick = function e() {
        if(id==A){
            mostrarvagascatA();
        } else if(id==B){
            mostrarvagascatB();
        }
    };
}
/*
function mostrarvagascatA(qtdVagacatA){
    qtdVagacatA= maxlength=50;

    alert("há" + qtdVagacatA +"no estacionamento")
// #max:50
}




function mostrarvagascatB(){
// #max:50
} */