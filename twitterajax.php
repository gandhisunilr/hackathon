<html>
<head>
<script type="text/javascript">
function showTweets(str)
{
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
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
    document.getElementById("tweets").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search.php?searchstr="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form>
Search string: <input type="text" name="searchstr" onkeyup="showTweets(this.value)">
<input type="submit" value="submit" >
</form>

<p>Tweets: <span id="tweets"></span></p>

</body>
</html>
