function botao(vl){
    var calculo;
    calculo = document.getElementById("tela").value += vl;
}

function resultado(){
    var resul = 0;
    resul = document.getElementById("tela").value;
    
    resul = document.getElementById("tela").value = eval(resul);

} 

function apagar(){
    var apagar;
    apagar = document.getElementById("tela").value="";
}

