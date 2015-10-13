<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT fldLastName, fldFirstName, SUM(fldNumStudents), fldSalary, (fldSalary/(SUM(fldNumStudents))) '
        . 'FROM tblTeachers, tblSections, tblCourses '
        . 'WHERE fnkTeacherNetId = pmkNetId '
        . 'AND pmkCourseId = fnkCourseId '
        . 'AND fldDepartment = "CS" '
        . 'AND fldType != "LAB" '
        . 'GROUP BY fldLastName '
        . 'HAVING SUM(fldNumStudents) > 0                                                 ';
$info2 = $thisDatabaseReader->select($query, "", 1, 3, 4, 3, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> Last Name </th>';
print '<th> First Name </th>';
print '<th> Number of Students </th>';
print '<th> Salary </th>';
print '<th> IBB Value </th>';
print '</tr>';


foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[0] . '</td>';
    print '<td>' . $rec[1] . '</td>';
    print '<td>' . $rec[2] . '</td>';
    print '<td>' . $rec[3] . '</td>';
    print '<td>' . $rec[4] . '</td>';
    print '</tr>';
}

// all done
print '</table>';

print '</article>';
include "footer.php";
