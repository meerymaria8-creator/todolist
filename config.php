<?php
// theme
if (!isset($_COOKIE['theme'])) {
    setcookie("theme", "dark", strtotime("+1 month"), "/");
}

// font
if (!isset($_COOKIE['font'])) {
    setcookie("font", "large", strtotime("+1 month"), "/");
}

$theme = "light";
$font  = "normal"; 

if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == "dark") {
    $theme = "dark";
}

if (isset($_COOKIE['font'])) {
    $font = $_COOKIE['font'];
}
?>
