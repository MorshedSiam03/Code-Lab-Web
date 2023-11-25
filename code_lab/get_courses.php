
<?php
// Array with names
$a[] = "Introduction to HTML";
$a[] = "Introduction to CSS";
$a[] = "Introduction to Javascript";
$a[] = "Advanced HTML";
$a[] = "Advanced CSS";
$a[] = "Advanced Javascript";
$a[] = "Laravel";
$a[] = "Object Oriented Programming C#";
$a[] = "C++";
$a[] = "Java";
$a[] = "Complete CSS Tutorial";
$a[] = "Complete HTML Tutorial";
$a[] = "Code Forces";
$a[] = "Deep Learning";
$a[] = "Data Science";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 