
function getValue() {
    // Sélectionner l'élément input et récupérer sa valeur
    var heureLigne1 = Number(document.getElementById('square'+0+'_'+'1').value);
    var minuteLigne1 = Number(document.getElementById('square'+0+'_'+'2').value);
    var secondLigne1 = Number(document.getElementById('square'+0+'_'+'3').value);

    var heureLigne2 = Number(document.getElementById('square'+1+'_'+'1').value);
    var minuteLigne2 = Number(document.getElementById('square'+1+'_'+'2').value);
    var secondLigne2 = Number(document.getElementById('square'+1+'_'+'3').value);






    var valueSecond = Number(parseFloat(secondLigne1)+parseFloat(secondLigne2));
    console.log('valueSecond ** = '+valueSecond);

    var secondResultat = 0;
    console.log('SecondResultat = '+secondResultat)

    var resultatsansVirguleSeconde =0;

    if(valueSecond>59){

        var divisionSecond =Number(parseFloat(valueSecond))/60;
        console.log('divisionSecond** = '+divisionSecond);

        resultatsansVirguleSeconde=Number.parseFloat(divisionSecond).toFixed(0);
        console.log('resultatsansVirguleSeconde = '+resultatsansVirguleSeconde);

        var resultatfloatSecond =Number.parseFloat(divisionSecond).toFixed(2);
        console.log('resultatfloatSecond = '+resultatfloatSecond);

        if(resultatfloatSecond<resultatsansVirguleSeconde){

          var A = parseInt(resultatsansVirguleSeconde)-1;
          console.log('A = '+A)

          console.log('****'+resultatfloatSecond)

          var B = parseFloat(resultatfloatSecond)-A;
          console.log('B = '+B)

          var C = parseFloat(B)*100;
          console.log('C = '+C)

          if(C>60){
            secondResultat =parseInt(C)-60;
            console.log('SecondResultat = '+secondResultat)
          }else{
            secondResultat = parseInt(C);
          console.log('SecondResultat = '+secondResultat)

          }
        }else{

          var AA = parseFloat(resultatfloatSecond)-parseInt(resultatsansVirguleSeconde);
          console.log('AA = '+AA)

          var BB = Number.parseFloat(AA).toFixed(2);
          console.log('BB = '+BB)

          var CC = parseFloat(BB)*100;
          console.log('CC = '+CC)


          if(CC>60){
            secondResultat = parseInt(CC)-60;
            console.log('SecondResultat = '+secondResultat)
          }else{
            secondResultat = parseInt(CC);
            console.log('SecondResultat = '+secondResultat)
          }
        }
      }else{

        secondResultat = valueSecond;

      }


    var valueMinute =0;

    if(resultatsansVirguleSeconde=0){

      valueMinute = Number(parseFloat(minuteLigne1)+parseFloat(minuteLigne2));

    }else{


    var valueMinute = Number(parseFloat(minuteLigne1)+parseFloat(minuteLigne2)+parseFloat(resultatsansVirguleSeconde));
    console.log('valueMinute** = '+valueMinute);


    }

    
    var minuteResultat=0;
    console.log('minuteResultat = '+minuteResultat);

    if(valueMinute>59){

      var divisionMinute = parseFloat(valueMinute)/60;
      console.log('divisionMinute** = '+divisionMinute);

      var resultatsansVirguleMinute = Number.parseFloat(divisionMinute).toFixed(0);
      console.log('resultatsansVirguleMinute = '+resultatsansVirguleMinute);

      var resultatfloatMinute =Number.parseFloat(divisionMinute).toFixed(2);
      console.log('resultatfloatMinute = '+resultatfloatMinute);

      

      if(resultatfloatMinute<resultatsansVirguleMinute){

        var AM = parseInt(resultatsansVirguleMinute)-1;
        console.log('AM = '+AM)

        var BM = parseFloat(resultatfloatMinute)-AM;
        console.log('BM = '+BM)

        var CM = parseFloat(BM)*100;
        console.log('CM = '+CM);

        if(CM>60){

          minuteResultat = parseInt(CM)-60;
          console.log('MinuteResultat = '+minuteResultat)
        }else{
          minuteResultat = parseInt(CM);
          console.log('SecondResultat = '+minuteResultat)
        }

      }else{

        var AAM = parseFloat(resultatfloatMinute)-parseInt(resultatsansVirguleMinute);
        console.log('AAM = '+AAM)

        var BBM = Number.parseFloat(AAM).toFixed(2);
        console.log('BBM = '+BBM)

        var CCM = parseFloat(BBM)*100;
        console.log('CCM = '+CCM)


        if(CCM>60){
          minuteResultat = parseInt(CCM)-60;
          console.log('minuteResultat = '+minuteResultat)
        }else{
          minuteResultat = parseInt(CCM);
          console.log('minuteResultat = '+minuteResultat)
        }
      }
    }else{

    minuteResultat=valueMinute;
    }

    var valueHeure = 0 ;

    if(resultatsansVirguleMinute=0){

      valueHeure = Number(parseFloat(heureLigne1)+parseFloat(heureLigne2));

    }else{

    var valueHeure = Number(parseFloat(heureLigne1)+parseFloat(heureLigne2)+parseFloat(resultatsansVirguleMinute));
    console.log('valueHeure** = '+valueHeure);

    }
  
    var html = '';
    html +='<div>'
    html +='<p>'+valueHeure+'/'+minuteResultat+'/'+secondResultat+'</p>'
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
