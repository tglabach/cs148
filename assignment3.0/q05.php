<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName,  count(tblStudents.fldFirstName) as total '
        . 'FROM tblSections '
        . 'JOIN tblEnrolls on tblSections.fldCRN  = tblEnrolls.`fnkSectionId` '
        . 'JOIN tblStudents on pmkStudentId = fnkStudentId '
        . 'JOIN tblTeachers on tblSections.fnkTeacherNetId=pmkNetId '
        . 'WHERE fldType != "LAB" '
        . 'group by fnkTeacherNetId '
        . 'ORDER BY total desc';
$info2 = $thisDatabaseReader->select($query, "", 1, 2, 2, 0, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> Last Name </th>';
print '<th> First Name </th>';
print '<th> Total </th>';
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
