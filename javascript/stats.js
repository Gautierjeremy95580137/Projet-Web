function pageStat(){

  var i=0;
  var html = '';
  html +='<div class="maPage">'
  html +='<div>'
  html += '<h3>Ajouter vos heures de vol selon le format suivant H:M:S</h3>'
  html +='<input type="number" id="square'+1+'_'+'1">'
  html +='<input type="number" id="square'+1+'_'+'2">'
  html +='<input type="number" id="square'+1+'_'+'3">'
  html +='</div>'
  html +='<br>'
  html +='<div>'
  html += '<h3>Ajouter votre appareil selon le format suivant type-Depart-Arrivée</h3>'
  html +='<input type="text" id="squaretexav">'
  html +='<input type="text" id="squaretexav2">'
  html +='<input type="text" id="squaretexav3">'
  html +='</div>'
  html +='</div>'
  html +='<br>'
  html +='<button onclick="">VALIDER</button>'
  
  document.getElementById('Statpage').innerHTML = html; 

}
pageStat();