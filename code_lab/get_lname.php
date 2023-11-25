
<?php
// Array with names
$a[] = "Ahmed";
$a[] = "Islam";
$a[] = "Siddique";
$a[] = "Hossain";
$a[] = "Akbar";
$a[] = "Rana";
$a[] = "Chouwdhury";
$a[] = "Jahan";
$a[] = "Iqbal";
$a[] = "Hasan";
$a[] = "Akter";
$a[] = "Ullah";
$a[] = "Talukder";
$a[] = "Sheikh";
$a[] = "Mohammad";
$a[] = "Tanvir";
$a[] = "Abdullah";
$a[] = "Faisal";
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