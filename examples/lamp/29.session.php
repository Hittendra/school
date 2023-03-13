<h3>PHP Sessions</h3>

In The Server -Sessions:-
<ul>
    <li>In the server applications, as soon as we meet a new(unmarked) browser - we create a session.</li>
    <li>We set a session cookie to be stored in the browser which indicates the session id in use - give this browser a unique "mark".</li>
    <li>The creation and destruction of sessions is handled by a web framework or some utility code that we use in our applications.</li>
</ul>

<h4>Session Identifier</h4>
<ul>
    <li>A large random number that we place in a browser cookie the first time we encounter a browser.</li>
    <li>This number is used to pick from the many sessions that the server has active at any one time.</li>
    <li>Server software stores data in the session which it wants to have from one request to another from the same browser.</li>
    <li>Shopping cart or Login information is stored in the session in the server.</li>
    <li>Session data belongs to the application. so user cannot change it.</li>
</ul>

<h4>PHP Sessions</h4>
<ul>
    <li>We can establish / initialize a PHP session by calling <strong>session_start()</strong> before any output has come out.</li>
    <li>If the user has cookies set, we can use the array <strong>$_SESSION </strong> to store data from one request to the next with a particular browser.</li>
    <li>We have a bit of data that persists from one request to the next.</li>
    <li>By default these are stored in a temporary folder on disk.</li>
</ul>

<p>Example code </p>

<?php 
  // Note - we cannot have any output before this.

  session_start();
 
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

  <p><a href="29.session.php">Click Me</a></p>
  <p>Our session ID is:  <?=(session_id())?></p>
  <pre>
    <?php print_r($_SESSION); ?>
  </pre>