/*
$(document).ready(function(){
	$("#showSimpleModal").click(function() {
		$("div#simpleModal").addClass("show");
		return false;   
	});

	$("#closeSimple").click(function() {
		$("div#simpleModal").removeClass("show");
		return false;                   
	});
});

$("#closeSimple").click(function() {
//    $("div#simpleModal").removeClass("show");
    $("#videoContainer").pause();
    //return false;                   
});
*/

//var tabuleiro = new Array(new Array());

//function drag(t,event
//) {		
//	e.dataTransfer.setData('Text', t.id);
//}

//function drop(t,event) {
//	var id = e.dataTransfer.getData('Text');
//	t.appendChild(document.getElementById(id));
//	e.preventDefault();
//}

//arrastavel.ondragstart = function(event) {
//event.dataTransfer.setData("Info", "HTML5 eacute; demais!");
//}

//arrastavel.ondragend = function(event){
//this.style.left = event.pageX + "px";
//this.style.top = event.pageY-150 + "px";
//}

//$(function() {
//    $(".peca").draggable({ grid: [ 50, 50 ] });
//});

/*
function resetPecas(){
    tabuleiro = new Array(new Array());
// VERMELHAS
    tabuleiro[2][1] = "V1";    
    tabuleiro[4][1] = "V2";    
    tabuleiro[6][1] = "V3";    
    tabuleiro[8][1] = "V4";    
    tabuleiro[1][2] = "V5";    
    tabuleiro[3][2] = "V6";    
    tabuleiro[5][2] = "V7";    
    tabuleiro[7][2] = "V8";    
    tabuleiro[2][3] = "V9";    
    tabuleiro[4][3] = "V10";    
    tabuleiro[6][3] = "V11";    
    tabuleiro[8][3] = "V12";    

//AZUIS
    tabuleiro[1][6] = "A1";    
    tabuleiro[3][6] = "A2";    
    tabuleiro[5][6] = "A3";    
    tabuleiro[7][6] = "A4";    
    tabuleiro[2][7] = "A5";    
    tabuleiro[4][7] = "A6";    
    tabuleiro[6][7] = "A7";    
    tabuleiro[8][7] = "A8";    
    tabuleiro[1][8] = "A9";    
    tabuleiro[3][8] = "A10";    
    tabuleiro[5][8] = "A11";    
    tabuleiro[7][8] = "A12";    
}

function validaMovePeca(idCasaInicial, idCasaFinal){
    var resultado = true;
    
    var xCasaInicial = parseInt(idCasaInicial.substring(3, 4));
    var yCasaInicial = parseInt(idCasaInicial.substring(5, 6));
    var xCasaFinal = parseInt(idCasaFinal.substring(3, 4));
    var yCasaFinal = parseInt(idCasaFinal.substring(5, 6));
    
    if((xCasaInicial - xCasaFinal == 1 || xCasaInicial - xCasaFinal == -1) 
            && (yCasaInicial - yCasaFinal == 1 || yCasaInicial - yCasaFinal == -1)) {
        resultado = true;
    }else{
        resultado = false;
    }
    
    return resultado;
}

function movePeca(idPeca, idCasaInicial, idCasaFinal){
    if(validaMovePeca(idCasaInicial, idCasaFinal)){
        tabuleiro[parseInt(idCasaFinal.substring(3, 4))][parseInt(idCasaFinal.substring(5, 6))] = idPeca;
        tabuleiro[parseInt(idCasaInicial.substring(3, 4))][parseInt(idCasaInicial.substring(5, 6))] = "";
    }
}

function validaComePeca(idCasaInicial, idCasaFinal){
    var resultado = true;
    
    var xCasaInicial = parseInt(idCasaInicial.substring(3, 4));
    var yCasaInicial = parseInt(idCasaInicial.substring(5, 6));
    var xCasaFinal = parseInt(idCasaFinal.substring(3, 4));
    var yCasaFinal = parseInt(idCasaFinal.substring(5, 6));
    
    if((xCasaInicial - xCasaFinal == 2 || xCasaInicial - xCasaFinal == -2) 
            && (yCasaInicial - yCasaFinal == 2 || yCasaInicial - yCasaFinal == -2)) {
        resultado = true;
    }else{
        resultado = false;
    }
    
    return resultado;
}

function comePeca(idPeca, idCasaInicial, idCasaFinal){
    var xCasaPcComida = 0;
    var yCasaPcComida = 0;
    
    
    if(validaComePeca(idCasaInicial, idCasaFinal)){
        tabuleiro[parseInt(idCasaFinal.substring(3, 4))][parseInt(idCasaFinal.substring(5, 6))] = idPeca;
        tabuleiro[parseInt(idCasaInicial.substring(3, 4))][parseInt(idCasaInicial.substring(5, 6))] = "";
        
        // Encontra a casa da peça a ser comida
        if(parseInt(idCasaInicial.substring(3, 4)) - parseInt(idCasaFinal.substring(3, 4)) == -2){
            xCasaPcComida = parseInt(idCasaInicial.substring(3, 4)) + 1;
            yCasaPcComida = parseInt(idCasaInicial.substring(5, 6)) - 1;
        }else{
            xCasaPcComida = parseInt(idCasaInicial.substring(3, 4)) - 1;
            yCasaPcComida = parseInt(idCasaInicial.substring(5, 6)) + 1;
        }
        
//        var nomepecacomida = ""
//        $.(id=)
        // TODO: Excluir a peça comida
        
    }
}
*/