<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT fnkSectionId, fldLastName, fldFirstName FROM tblCourses '
        . 'JOIN tblEnrolls on pmkCourseId = tblEnrolls.fnkCourseId '
        . 'JOIN tblStudents on pmkStudentId = fnkStudentId '
        . 'WHERE concat(fldDepartment, " ", fldCourseNumber) '
        . 'LIKE "CS 148" '
        . 'ORDER BY fnkSectionId, fldLastName, fldFirstName';
$info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> CRN </th>';
print '<th> Last Name </th>';
print '<th> First Name </th>';
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
