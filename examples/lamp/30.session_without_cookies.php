<h3>PHP Sessions Without Cookies</h3>
<ul>
    <li>For a simple application handling login, logout, and shopping cart like information, cookie sessions are sufficient.</li>
    <li>But if an application needs to function within an iframe, or have more than one session active (i.e. multiple tabs to the same site) we cannot use session cookies.</li>
    <li>PHP has nice support for maintaining a session without a cookie.</li>
</ul>

<p>Example code</p>

<?php 
   // Tell PHP  we won't be using cookies for the session
   ini_set( 'session.use_cookies', '0');
   ini_set( 'session.use_only_cookies', '0');
   ini_set('session.use_trans_sid', '1');

   session_start();
   
   // Start the view
   ?>
   <p><strong>No Cookies for You..!!!!</strong></p>

<?php
   if ( !isset($_SESSION['value'])) {
    echo '<p> Session is empty. </p>';
    $_SESSION['value'] = 0;
  } else if ($_SESSION['value'] < 3){
    $_SESSION['value'] = $_SESSION['value'] + 1;
    echo '<p> Added one.... </p>';
  } else {
    session_destroy();
    session_start();
    echo '<p> Session Restarted. </p>';
  }
  ?>

  <p><a href="30.session_without_cookies.php">Click Me</a></p>
  <p>Our session ID is:  <?=(session_id())?></p>
  <pre>
    <?php print_r($_SESSION); ?>
  </pre>