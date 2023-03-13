<h3>Multi-User / Multi-Browser</h3>
<ul>
    <li>When a server is interacting with many different browsers at the same time, the server needs to know which browser a particular request came from.</li>
    <li>Request / Response initially was stateless - all browsers looked identical - this was really bad and did not last very long at all.</li>
    <li>Web cookies were devised to tackle this problem.</li>
</ul>


<h3>Web Cookies</h3>
<p>Technically, cookies are the arbitrary pieces of data chosen by the Web Server and sent to the browser. The browser returns them unchanged to the server, introducing a state (memory of previous events) into otherwise stateless HTTP transactions. Without cookies, each retrieval of a web page or component of a web page is an isolated event, mostly unrelated to all other views of the pages of the same site.</p>

<h4>Cookies in the Browser</h4>
<ul>
    <li>Cookies are marked as to the web addresses they come from- the browser only sends back cookies that were originally set by the same web server.</li>
    <li>Cookies have an expiration date - some last for years - others short-term and go away as soon as the browser is closed.</li>
    <li>Cookies can be set in PHP by using <strong>setcookie() or setrawcookie() </strong> functions.</li>
    <li>Cookies are part of the HTTP header, so setcookie() must be called before any output is sent to the browser. This is the same limitation that header() has.</li>
    <li>cookie data belong to the browser (user).</li>
</ul>

<?php 
  //  Note - we cannot have any output before setcookie
   if (!isset($_COOKIE['cook'])) {
    setcookie('cook', '42', time()+3600);
   }

   echo '<pre>';
   print_r($_COOKIE);
   echo '</pre>';
 ?>
 <p><a href="28.cookies.php">Click Me!</a>  press Refresh</p>