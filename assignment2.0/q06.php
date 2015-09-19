<?php
include 'top.php';
print '<h1>Total Records: 7 </h1>';
print '<article>';
print '<table>';

print '<h3> SQL:  SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%Data%" AND fldDepartment != "CS"</h3>';

//now print out each record
    $query = 'SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%Data%" AND fldDepartment != "CS"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 4, 0, false, false);

$i = 0;
foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[$i] . '</td>';
    print '</tr>';
}

// all done
    print '</table>';

print '</article>';
include "footer.php";
?>
