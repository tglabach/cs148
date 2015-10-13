<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT fldFirstName, fldLastName, AVG(fldGrade), COUNT(fnkStudentId) '
        . 'FROM tblStudents, tblEnrolls '
        . 'WHERE fldState = "VT" '
        . 'AND fnkStudentId = pmkStudentId '
        . 'GROUP BY pmkStudentId HAVING AVG(fldGrade) > (SELECT AVG(fldGrade) '
        . 'FROM tblEnrolls, tblStudents WHERE fldState = "VT" '
        . 'AND fnkStudentId = pmkStudentId)';
$info2 = $thisDatabaseReader->select($query, "", 2, 2, 4, 1, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> First Name </th>';
print '<th> Last Name </th>';
print '<th> Grade </th>';
print '<th> Number of Courses </th>';
print '</tr>';


foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[0] . '</td>';
    print '<td>' . $rec[1] . '</td>';
    print '<td>' . $rec[2] . '</td>';
    print '<td>' . $rec[3] . '</td>';
    print '</tr>';
}

// all done
print '</table>';

print '</article>';
include "footer.php";
