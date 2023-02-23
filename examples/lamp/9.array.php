<?php
echo "<h3>Looping through an Array using foreach loop </h3>";

$info = array("name" => "Situ",
            "surname" => "Singh");
foreach($info as $k => $v){
echo "Key = ".$k . "  Value = ". $v."<br>";
}

$info = array("Situ","Singh");

foreach($info as $k => $v){
echo "Key = ".$k . "  Value = ". $v."<br>";}


echo "<h3> Counted loop through an arrray. </h3>";

for($i = 0; $i < count($info); $i++)
{
    echo "Key =  ". $i. "  Value = " .$info[$i]. "<br>";
}


echo '<h3> Arrays of Arrays </h3>';

  $products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose" ,
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer" ,
            'photo' => "Photographic Paper"
        ),
        'pens' => array(
            'ball' => "Ball Point" ,
            'hilite'=> "Highlighters" ,
            'marker' => "Markers"
        ),
        'misc' => array(
            'tape' => "Sticky Tape" ,
            'glue' => "Adhesive" ,
            'clips' => "Paperclips"
        )
        );
     echo '<pre>';
    var_dump($products);
    echo '</pre>';

    echo '<p> Printing out an element of an array of array</p>';

    echo '<pre>echo $products[\'pens\'][\'hilite\']</pre>';
    echo $products['pens']['hilite'].'<br>'.'<hr>';
     

    // for($i = 0; $i < count($products); $i++){
    //    for($j = 0; $j < count($products[$i]); $j++){
    //    echo $products[$i][$j];
    //    }
    // }

 
    echo '<h3> Printing out an array of array using nested foreach loop </h3>';
foreach ($products as $key => $value){
    echo $key . '<br>';
    foreach ($value as $sub_key => $sub_value){
        echo $sub_key . " =" . $sub_value .'<br>';
    }
}