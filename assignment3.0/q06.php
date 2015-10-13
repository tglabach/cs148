<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT fldFirstName, fldPhone, fldSalary '
        . 'FROM tblTeachers '
        . 'WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers)';
$info2 = $thisDatabaseReader->select($query, "", 1, 0, 0, 1, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> First Name </th>';
print '<th> Phone </th>';
print '<th> Salary </th>';
print '</tr>';


foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[0] . '</td>';
    print '<td>' . $rec[1] . '</td>';
    print '<td>' . $rec[2] . '</td>';
    print '</tr>';
}

// all done
print '</table>';

print '</article>';
include "footer.php";
