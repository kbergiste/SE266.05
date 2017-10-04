
<?php
$table = "<table>\n"; // Empty table var
for ($rows =1; $rows <= 10; $rows++) //creates table rows
{
    $table .= "\t<tr>";
    for ($cols=1; $cols<=10; $cols++): //creates table columns
        $val = randomColor();
        $table .= "<td style='background-color: #" . $val . ";'>" // styles cell background color to the hex generated
            . $val . "<br /> <span style='color:white'>" . $val . "</span> </td>"; //displays the hex both in black and white
    endfor;
    $table .= "</tr>\n";
}
$table .= "</table>";

function randomColorParts() //generates random numbers between 0 and 255 and limiting them to 2 places for Red Green and Blue
{
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0');
}

function randomColor() //concatenates the random numbers 3 times to create 6 numbers for the hex
{
    return randomColorParts() . randomColorParts() . randomColorParts();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $table; ?>
</body>
</html>