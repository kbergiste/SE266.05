create new branch - git checkout-b Demo

<?php
$table = "<table>"; //Empty table var
for ($rows = 1; $rows <= 5; $rows++) { //creates table rows
    $table .= "\t<tr>"; //indents the rows in the code
    for ($cols = 1; $cols <= 5; $cols++): //creates the columns INSIDE the rows
        $table .= "<td>" . $rows * $cols . "</td>"; //multiplies the rows by columns
    endfor;
    $table .= "</tr>\n"; //makes each row in the code on a new line
}
$table .= "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>