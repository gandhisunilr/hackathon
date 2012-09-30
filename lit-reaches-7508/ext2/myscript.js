document.getElementById("mastheadLogo").src = "http://localhost/font.jpg";
document.body.innerHTML += "<div id = \"tweettimes\" style=\"position:fixed;top:10px;right:10px;height:425px; width:350px;opacity:0.8;border:5px solid black; white-space: nowrap; overflow: auto; background:#ffc; z-index:20000; \"></div>";

var stories = document.getElementsByClassName("story"); 
for(i=0;i<stories.length;i++) {
  var children = stories[i].childNodes;
  for (j = 0; j < children.length; j++) {
    var child = children[j];
    if (child.tagName === 'H2' || child.tagName === 'H3' || child.tagName === 'H5') {
	child.onmouseover= function(){ 
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
  		}
		else
		{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		str=this.textContent.toString();
		xmlhttp.open("GET","http://gundeepbindra.com/hackny/search2.php?words="+str,false);
		xmlhttp.send();
		document.getElementById("tweettimes").innerHTML= xmlhttp.responseText;
		//document.body.innerHTML += xmlhttp.responseText;
		//document.getElementsByClassName("image")[0].innerHTML = xmlhttp.responseText;
	};


    }
  }
}
