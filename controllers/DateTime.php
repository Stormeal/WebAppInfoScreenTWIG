
<?php
function DateTime()
{

    echo "Today is " . date("Y/m/d") . "<br>";
    date_default_timezone_set("Europe/Copenhagen");
    echo "The time is " . date("h:i:sa");
}
?>

