<?php
function ageFinder($birthdate) {
    $dob = new DateTime($birthdate);
    $today = new DateTime();
    $age = $today->diff($dob)->y;
    return $age;
}
?>
