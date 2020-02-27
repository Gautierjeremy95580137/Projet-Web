function isChange(arg){

	if(arg==1){
		//document.body.style.backgroundColor = "black";
		document.getElementById("balise").classList.replace('baliseWhite','baliseBlack');
		document.getElementById("testfooter").classList.replace('footer','footer2');
		document.getElementById("testheader").classList.replace('header2','header');

	}else{
		//document.body.style.backgroundColor = "white";
		document.getElementById("balise").classList.replace('baliseBlack','baliseWhite');
		document.getElementById("testfooter").classList.replace('footer2','footer');
		document.getElementById("testheader").classList.replace('header','header2');
	}
}
var buttonstate=0;
function onoff(element)
{
  buttonstate= 1 - buttonstate;
  var blabel, bstyle, bcolor;
  if(buttonstate)
  {
    blabel="Dark";
    //bstyle="lightgray";
    //bcolor="gray";
    //color="red";
    isChange();
  }
  else
  {
    blabel="White";
    //bstyle="lightgray";
    //bcolor="gray";
    //color="red";
    isChange(1)
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}