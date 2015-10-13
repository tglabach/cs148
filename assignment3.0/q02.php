<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT DISTINCT(fldStart), fldStop, fldDays '
        . 'FROM tblSections '
        . 'JOIN tblTeachers on pmkNetId = fnkTeacherNetId '
        . 'WHERE concat(fldFirstName, " ", fldLastName) '
        . 'LIKE "Robert%Snapp" '
        . 'ORDER BY fldStart';
$info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> Start </th>';
print '<th> Stop </th>';
print '<th> Days </th>';
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
