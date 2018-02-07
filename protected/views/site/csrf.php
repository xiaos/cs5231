<h1>CSRF</h1>
<p>an attack vector that tricks a web browser into executing an unwanted action in an application to which a user is logged in.</p>

<br/>
<br/>
<img src="https://www.incapsula.com/images/illustrations/web-app-security-mini-site/csrf-cross-site-request-forgery.png"/>

<br/>
<br/>

<h2>
    CSRF EXAMPLE
</h2>
<p>
    Before executing an assault, a perpetrator typically studies an application
    in order to make a forged request appear as legitimate as possible.
</p>
<p>
    For example, a typical GET request for a $100 bank transfer might look
    like:
</p>
<pre>GET http://netbank.com/transfer.do?acct=PersonB&amp;amount;=$100 HTTP/1.1</pre>
<p>
    A hacker can modify this script so it results in a $100 transfer to their
    own account. Now the malicious request might look like:
</p>
<pre>GET http://netbank.com/transfer.do?acct=AttackerA&amp;amount;=$100 HTTP/1.1</pre>
<p>
    A bad actor can embed the request into an innocent looking hyperlink:
</p>
<pre>&lt;a href="http://netbank.com/transfer.do?acct=AttackerA&amp;amount;=$100"&gt;Read more!&lt;/a&gt;</pre>
<p>
    Next, he can distribute the hyperlink via email to a large number of bank
    customers. Those who click on the link while logged into their bank account
    will unintentionally initiate the $100 transfer.
</p>
<p>
    Note that if the bank’s website is only using POST requests, it’s
    impossible to frame malicious requests using a &lt;a&gt; href tag. However,
    the attack could be delivered in a &lt;form&gt; tag with automatic
    execution of the embedded JavaScript.
</p>
<p>
    This is how such a form may look like:
</p>
<pre> &lt;body onload="document.forms[0].submit()"&gt;
   &lt;form action="http://netbank.com/transfer.do" method="POST"&gt;
     &lt;input type="hidden" name="acct" value="AttackerA"/&gt;
     &lt;input type="hidden" name="amount" value="$100"/&gt;
     &lt;input type="submit" value="View my pictures!"/&gt;
   &lt;/form&gt;
 &lt;/body&gt;
</pre>
<h2>
    METHODS OF CSRF MITIGATION
</h2>
<p>
    A number of effective methods exist for both prevention and mitigation of
    CSRF attacks. From a user’s perspective, prevention is a matter of
    safeguarding login credentials and denying unauthorized actors access to
    applications.
</p>
<p>
    Best practices include:
</p>
<ul>
    <li>
        Logging off web applications when not in use
    </li>
    <li>
        Securing usernames and passwords
    </li>
    <li>
        Not allowing browsers to remember passwords
    </li>
    <li>
        Avoiding simultaneously browsing while logged into an application
    </li>
</ul>
<p>
    For web applications, multiple solutions exist to block malicious traffic
    and prevent attacks. Among the most common mitigation methods is to
    generate unique random tokens for every session request or ID. These are
    subsequently checked and verified by the server. Session requests having
    either duplicate tokens or missing values are blocked. Alternatively, a
    request that doesn’t match its session ID token is prevented from reaching
    an application.
</p>
<p>
    Double submission of cookies is another well-known method to block CSRF.
    Similar to using unique tokens, random tokens are assigned to both a cookie
    and a request parameter. The server then verifies that the tokens match
    before granting access to the application.
</p>
<p>
    While effective, tokens can be exposed at a number of points, including in
    browser history, HTTP log files, network appliances logging the first line
    of an HTTP request and referrer headers, if the protected site links to an
    external URL. These potential weak spots make tokens a less than full-proof
    solution.
</p>
<div>
    <br/>
</div>