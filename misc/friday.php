<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender '
        . 'FROM tblStudents '
        . 'ORDER BY fldLastName, fldFirstName '
        . 'LIMIT 10 OFFSET 999';
$info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);

$variable = array_keys($array-variable);

$camelCase = preg_split('/(?=[A-Z])/', substr($key, 3));

foreach ($camelCase as $one) {
    $message .= $one . " ";
}

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

foreach ($message as $rec) {
    print '<tr>';
    print '<th>' . $rec[0] . '</th>';
    print '<th>' . $rec[1] . '</th>';
    print '<th>' . $rec[2] . '</th>';
    print '<th>' . $rec[3] . '</th>';
    print '<th>' . $rec[4] . '</th>';
    print '<th>' . $rec[5] . '</th>';
    print '<th>' . $rec[6] . '</th>';
     print '<th>'. $rec[7] . '</th>';
     print '</tr>';
}

foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[0] . '</td>';
    print '<td>' . $rec[1] . '</td>';
    print '<td>' . $rec[2] . '</td>';
    print '<td>' . $rec[3] . '</td>';
    print '<td>' . $rec[4] . '</td>';
    print '<td>' . $rec[5] . '</td>';
    print '<td>' . $rec[6] . '</td>';
    print '<td>' . $rec[7] . '</td>';
    print '</tr>';
}

// all done
print '</table>';

print '</article>';
include "footer.php";
