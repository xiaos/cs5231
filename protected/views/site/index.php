<?php $this->pageTitle=Yii::app()->name; ?>


<h1> CS5231 Demo </h1>
<br/>
<br/>

<div class="demo">
	<ul class="list-group">
		<li class="list-group-item"> <a href="/site/dom.html">DOM-based XSS</a></li>
		<li class="list-group-item"> <a href="/site/reflected.html">Reflected XSS</a></li>
		<li class="list-group-item"> <a href="/site/persistent.html">Persistent XSS</a></li>
		<li class="list-group-item"> <a href="/site/csrf.html">CSRF</a> </li>
	</ul>
</div>

<!--
https://excess-xss.com/
-->
<h3 id="attack-summary">
    Summary: XSS Attacks
</h3>
<ul>
    <li>
        <p>
            There are three major types of XSS attacks:
        </p>
        <ul>
            <li>
                <p>
                    Persistent XSS, where the malicious input originates from
                    the website's database.
                </p>
            </li>
            <li>
                <p>
                    Reflected XSS, where the malicious input originates from
                    the victim's request.
                </p>
            </li>
            <li>
                <p>
                    DOM-based XSS, where the vulnerability is in the
                    client-side code rather than the server-side code.
                </p>
            </li>
        </ul>
    </li>
    <li>
        <p>
            All of these attacks are performed in different ways but have the
            same effect if they succeed.
        </p>
    </li>
</ul>
<h3 id="prevention-summary">
    Summary: Preventing XSS
</h3>
<ul>
    <li>
        <p>
            The most important way of preventing XSS attacks is to perform
            secure input handling.
        </p>
        <ul>
            <li>
                <p>
                    Most of the time, encoding should be performed whenever
                    user input is included in a page.
                </p>
            </li>
            <li>
                <p>
                    In some cases, encoding has to be replaced by or
                    complemented with validation.
                </p>
            </li>
            <li>
                <p>
                    Secure input handling has to take into account which
                    context of a page the user input is inserted into.
                </p>
            </li>
            <li>
                <p>
                    To prevent all types of XSS attacks, secure input handling
                    has to be performed in both client-side and server-side
                    code.
                </p>
            </li>
        </ul>
    </li>
    <li>
        <p>
            Content Security Policy provides an additional layer of defense for
            when secure input handling fails.
        </p>
    </li>
</ul>
