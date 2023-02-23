<h3> Persisting Form Data </h3>
<ul>
    <li>When we submit forms and there is an error, we just expect that the data will remain in the form when the page is redisplayed.</li>
    <li>The application needs to make sure to put the previous values back into the form.</li>
</ul>

<p> Example: </p>

<?php
// form persistance using ternary operator 
//    $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';

// Form data persistance using Null Coalesce operator 
$oldguess = ($_POST['guess']) ??  '';
?>
<p> Guessing game... </p>
<form method = "post">
    <p><label for = "guess">Input Guess</label>
    <input type = "text" name = "guess" id = "guess"
    size = "40" value = "<?= htmlentities($oldguess) ?>" /></p>
    <input type = "submit" />

    <pre>
        <?= var_dump($_POST) ?>
    </pre>