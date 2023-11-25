
<?php
// Array with names
$a[] = "siam45";
$a[] = "siam32";
$a[] = "morshed_siam";
$a[] = "siam32";
$a[] = "morshedul24";
$a[] = "siam_morshed";
$a[] = "kamil56";
$a[] = "kamil34";
$a[] = "kamil_ahmed";
$a[] = "ahmed_kamil";
$a[] = "kamil89ahmed";
$a[] = "kamil6272";
$a[] = "rafid24";
$a[] = "rafid45";
$a[] = "rafid_siddique";
$a[] = "siddique_rafid";
$a[] = "rafid_tahmid";
$a[] = "rafid76";
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