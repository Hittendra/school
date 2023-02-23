<h3>Many field types example </h3>

<form action="" method="post">
    <p><label for = "inp01">Account:</label>
       <input type = "text" name = "account" id = "inp01" size = "40">
    </p>
    <p><label for = "inp02"> Password: </label>
       <input type = "password" name = "pw" id = "inp02" size = "40">
    </p>
    <p><label for = "inp03"> Nick Name: </label>
      <input type = "text" name = "nick" id = "inp03" size = "40">
    </p>
    <p>Preferred Time: <br>
      <input type = "radio" name = "when" value="am">AM <br>
      <input type="radio" name="when" value="pm" checked>PM
    </p>
    <p>Classes Taken: <br>
      <input type="checkbox" name="class1" value="si502" checked>
        SI502 - Network Tech <br>
      <input type="checkbox" name="class2" value="si539">
        SI539 - App Engine <br>
      <input type="checkbox" name="class3" value="si503">
        SI503 - Java <br>
    </p>
    <p> <label for="inp06">Which soda:</label>
        <select name="soda" id="inp06">
            <option value="0">Please select</option>
            <option value="0">Coke</option>
            <option value="1">Pepsi</option>
            <option value="2">Mountain Dew</option>
            <option value="3">Orange Juice</option>
            <option value="4">Lemonade</option>
    </select>
    </p>
    <p><label for="inp07">Which Snack:</label>
       <select name="sanck" id="inp07">
       <option value="0">Please select</option>
        <option value="1">chips</option>
        <option value="2">Kurkure</option>
        <option value="3">Popcorn</option>
        </select>
       </label></p>

    <p><label for="inp08">Tell us about yourself:</label>
    <textarea name="about yourself" id="inp08" cols="30" rows="10">Currentyl I'm learning PHP and Drupal CMS.</textarea>
    </p>
    <p><label for="inp09">Which are awesome:</label>
      <select multiple="multiple" name="code[]" id="inp09">
    <option value="PHP">PHP</option>
<option value="Html">HTML</option>
<option value="Css">CSS</option>
<option value="JS">Javascript</option>
<option value="SQL">SQL</option>
</select>
</p>
<input type="submit">

</form>

<pre>
    <?= print_r($_POST) ?>
</pre>

