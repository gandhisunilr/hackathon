var stories = document.getElementsByClassName("story"); 
for(i=0;i<stories.length;i++) {
  var children = stories[i].childNodes;
  for (j = 0; j < children.length; j++) {
    var child = children[j];
    if (child.tagName === 'H2' || child.tagName === 'H3' || child.tagName === 'H5') {
//	document.getElementsByClassName("story")[0].childNodes[1].onmouseover=function(){ alert("sunil"); };

	child.onmouseover= function(){ 
	alert("sunil"); 
	};

	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
  	}
	else
	{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	str=child.textContent.toString();
	xmlhttp.open("GET","http://localhost/lit/search2.php?words="+str,false);
	xmlhttp.send();
	child.innerHTML = xmlhttp.responseText;
    }
  }
}
