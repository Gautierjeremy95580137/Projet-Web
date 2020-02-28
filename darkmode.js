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
      console.log("NousSommesDansLeBlanc");      
      document.getElementById("AncientPlaneImg").src="img/avion_ancien.jpeg";

    
  
  }
  else
  {
    blabel="Activer le mode clair";
      document.getElementById("balise").classList.replace('baliseBlack','baliseWhite');
  	  document.getElementById("testfooter").classList.replace('footer2','footer');
      document.getElementById("testheader").classList.replace('header','header2');
      console.log("nous sommes da ns le mode noir");
      document.getElementById("AncientPlaneImg").src="img/dark_plane_body.jpeg";

     

    
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}