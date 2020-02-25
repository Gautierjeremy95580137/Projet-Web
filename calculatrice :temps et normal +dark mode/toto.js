function isChange(arg){

	if(arg==1){
		//document.body.style.backgroundColor = "black";
		document.getElementById("balise").classList.replace('baliseWhite','baliseBlack');
	}else{
		//document.body.style.backgroundColor = "white";
		document.getElementById("balise").classList.replace('baliseBlack','baliseWhite');
	}
}
function getValue() {
    // Sélectionner l'élément input et récupérer sa valeur
    var heureLigne1 = Number(document.getElementById('square'+0+'_'+'1').value);
    var minuteLigne1 = Number(document.getElementById('square'+0+'_'+'2').value);
    var secondLigne1 = Number(document.getElementById('square'+0+'_'+'3').value);

    var heureLigne2 = Number(document.getElementById('square'+1+'_'+'1').value);
    var minuteLigne2 = Number(document.getElementById('square'+1+'_'+'2').value);
    var secondLigne2 = Number(document.getElementById('square'+1+'_'+'3').value);


    var valueSecond = secondLigne1+secondLigne2;
    var valueMinute = minuteLigne1+minuteLigne2;
    var valueHeure = heureLigne1+heureLigne2;

    var test =valueSecond/60;

	var entierSuperieurResultat=Number.parseFloat(test).toFixed(0);

	var minuteadd=valueMinute+entierSuperieurResultat;

	var floatResultat =Number.parseFloat(test).toFixed(2);

	if(floatResultat<entierSuperieurResultat){

   		var take = entierSuperieurResultat-1;

   		var take2=(floatResultat-take)*100;

   		var entierSuperieurResultattake2=Number.parseFloat(take2).toFixed(0);

   		var mesVraiSecond =0;

   		if(entierSuperieurResultattake2>60){

   				mesVraiSecond=entierSuperieurResultattake2-60;
   				
   		}else{
   				mesVraiSecond=entierSuperieurResultattake2;
   		}
   }



    

    console.log(valueMinute)
  


    var html = '';
    html +='<div>'
		html +='<p>'+valueHeure +'/'+ mesVraiminute +'/'+ mesVraiSecond+'</p>'
	html +='</div>'

	document.getElementById('Down2').innerHTML = html;
   




   
}


function isWhriteInput(){

	var i=0;
	var html = '';

	for (var i = 0; i < 2; i++) {

		html +='<div>'
		html +='<input type="number" id="square'+i+'_'+'1">'
		html +='<input type="number" id="square'+i+'_'+'2">'
		html +='<input type="number" id="square'+i+'_'+'3">'
		html +='</div>'
		html +='<br>'
	}
	document.getElementById('Down').innerHTML = html;	
}


isWhriteInput()
/*
function isChange2(arg){

	if(arg==1){
		document.body.style.backgroundColor = "black";
		document.getElementsByClassName(baliseB).getElementsByClassName(baliseW);
	}else{
		document.body.style.backgroundColor = "white";
		document.getElementsByClassName(baliseB).getElementsByClassName(baliseW);
	}
}
<button onclick="isChange()">white</button>
*/