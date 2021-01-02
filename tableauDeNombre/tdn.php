<?php

///creation of the table

echo '<table border>
<tr>
    <th> Number </th>
    <th> Square </th>
    <th> Square Root </th>
</tr>';

/// We re gonna put numbers with a loop

for($i = 1; $i < 11; $i++){
echo '  <tr>
            <td>'.$i.' </td>
            <td>'.$i*$i.' </td>
            <td>'.sqrt($i).' </td>
        </tr>';
};


////We close the table

echo'</table>';