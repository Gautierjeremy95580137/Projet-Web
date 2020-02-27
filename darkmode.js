var buttonstate=0;
function onoff(element)
{

  buttonstate= 1 - buttonstate;
  var blabel, bstyle, bcolor;
  if(buttonstate)
  {
    blabel="Activer le mode sombre";
      document.getElementById("balise").classList.replace('baliseWhite','baliseBlack');
  	  document.getElementById("testfooter").classList.replace('footer','footer2');
  	  document.getElementById("testheader").classList.replace('header2','header');
    
  
  }
  else
  {
    blabel="Activer le mode clair";
      document.getElementById("balise").classList.replace('baliseBlack','baliseWhite');
  	  document.getElementById("testfooter").classList.replace('footer2','footer');
  	  document.getElementById("testheader").classList.replace('header','header2');
    
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}