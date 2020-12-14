<?php
/**
 * Created by PhpStorm.
 * User: raphael.favre
 * Date: 01.12.2018
 * Time: 21:02
 * Title : DemoArrays.php
 */

/* Help:    https://www.w3schools.com/php/php_arrays.asp
            http://php.net/manual/en/function.array.php
*/

//<editor-fold desc="Indexed Array">
// each Element of this array content a name of a Web Browser
$browsers = array('Safari', 'Edge', 'Chrome', 'Firefox');

// assign 'Chrome' to $mostUsedBrowser
$mostUsedBrowser = $browsers[2];

// Replaces 'Edge' with 'Opera'
//TODO - il vous faut coder ici
$browsers[1] = "Internet Explorer";
echo $browsers[1];
?>
    <br>
<?php

// Loop through an Indexed Array
$arrLength = count($browsers);      // Assign the number of Elements of the Array '$browsers'
$browsersList = "";
//TODO - il vous faut coder ici

$browsersList = $arrLength;
echo "<br>";
for ($i = 0; $i < $arrLength; $i++) {

    $browsersList .= $browsers[$i]." ";
}

echo $browsersList;

//</editor-fold>

//<editor-fold desc="Associated Array">
// each Element of this associated array contains a part of the contact information
$contactInfo = array(
    'name' => 'John Doe',
    'address' => 'Rue de Lausanne 25',
    'NPA' => 1400,
    'City' => 'Yverdon'
);

// assign the city ("Yverdon") to $Home
//TODO - il vous faut coder ici

$Home = $contactInfo ["City"];
echo "<br>";
echo $Home;

// Replaces 'John Doe' with 'Jane Doe'
//TODO - il vous faut coder ici

$contactInfo["name"] = "Jane Doe";
echo "<br>";
echo $contactInfo["name"];

// Loop through an Associated Array
$completedContact = "";
echo "<br>";
foreach ($contactInfo as $element) {
    //TODO - il vous faut coder ici
    echo $element; ?><br>
    <?php
}
//</editor-fold>

//<editor-fold desc="Two-dimensional Array">
// Each Element of this Two-dimensional array contains a name of a person
$people = array(
    array('Perceval', 'Arthur', 'Lancelot', 'Leodagan'),
    array('Marge', 'Homer', 'Bart', 'Maggie'),
    array('Joe', 'Jack', 'William', 'Averell'),
);

// assign "Joe" to $person
//TODO - il vous faut coder ici
$person = $people[2][0];
echo $person;

// Replaces 'Bart' with 'Lisa'
//TODO - il vous faut coder ici
?><br><?php
$people[1][2] = "Lisa";
echo $people [1][2];

// Loop through an Two-dimensional Array
$rowLength = count($people);        //Assign the number of rows of the array "People"
$colLength = count($people[0]);     //Assign the number of Elements (columns) of the of the array "People"
$personList = "";                     // Initialise the string $PersonList

//TODO - il vous faut coder ici

  for ($x = 0 ; $x < $rowLength ; $x++){

      for ($y = 0 ; $y < $colLength ; $y++){
       $personList.=  "<br>" . $people[$x][$y];

      }
  }
echo $personList;
//</editor-fold>4
