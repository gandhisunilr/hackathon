<html>
<head>
<script type="text/javascript">
function showtweet(str)
{
if (str.length==0)
  { 
  document.getElementById("txttweet").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txttweet").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search2.php?searchstr="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showtweet(this.value)" size="20" />
</form>
<p>Suggestions: <div id="txttweet"></div></p>

</body>
</html>
