function getValue() {

  var heureLigne1 = Number(document.getElementById('square'+0+'_'+'1').value);
  var minuteLigne1 = Number(document.getElementById('square'+0+'_'+'2').value);
  var secondLigne1 = Number(document.getElementById('square'+0+'_'+'3').value);
  var heureLigne2 = Number(document.getElementById('square'+1+'_'+'1').value);
  var minuteLigne2 = Number(document.getElementById('square'+1+'_'+'2').value);
  var secondLigne2 = Number(document.getElementById('square'+1+'_'+'3').value);

  var heureConvertSecond = Number((parseInt(heureLigne1)+parseInt(heureLigne2))*3600)
  console.log('heureConvertSecond = '+ heureConvertSecond)

  var minuteConverSecond = Number((parseInt(minuteLigne1)+parseInt(minuteLigne2))*60)
  console.log('minuteConverSecond = '+minuteConverSecond)

  var secondResultat = Number((parseInt(secondLigne1)+parseInt(secondLigne2)))
  console.log('secondResultat = '+secondResultat)

  var totalSecond = Number(parseInt(heureConvertSecond+minuteConverSecond+secondResultat))
  console.log('totalSecond = '+totalSecond);

  var hrs = Number(parseInt(Math.floor(totalSecond / 3600)))
  console.log('hrs = '+hrs)

  var min = Number(parseInt(Math.floor((totalSecond - (hrs * 3600)) / 60)))
  console.log('min = '+min)

  var s = Number(parseInt(totalSecond - (hrs * 3600) - (min * 60)));
  console.log('s = '+s)

  var html = '';
    html +='<div>'
    html +='<p>'+hrs+':'+min+':'+s+'</p>'
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
