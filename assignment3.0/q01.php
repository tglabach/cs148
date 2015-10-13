<?php

include 'top.php';
print '<article>';

//now print out each record
$query = 'SELECT DISTINCT(fldCourseName) '
        . 'FROM tblCourses '
        . 'JOIN tblEnrolls on fnkCourseId = pmkCourseId '
        . 'WHERE fldGrade = 100 ORDER BY fldCourseName';
$info2 = $thisDatabaseReader->select($query, "", 1, 1, 0, 0, false, false);

print '<h3>' . $query . '</h3>';
print "<h3> Count: " . count($info2) . '</h3>';
print '<table>';

print '<tr>';
print '<th> Course Name </th>';
print '</tr>';

foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[0] . '</td>';
    print '</tr>';
}

// all done
print '</table>';

print '</article>';
include "footer.php";
