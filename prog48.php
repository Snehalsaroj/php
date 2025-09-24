<?php
// check karo cookie hai ya nhi
if (isset($_COOKIE['visits'])){
    //Agar cookie already hai to iski value +1 ho jayegi
    $visits = $_COOKIE['visits'] + 1;
    setcookie("visits", $visits, time() + (86400 * 30), "/");
    echo "You have visited $visits times.";
} else {
    // jab cookie first time set hoti hai
    $visits = 1;
    setcookie("visits", $visits, time() + (86400 * 30), "/");
    echo "This is your first visit";
}
?>