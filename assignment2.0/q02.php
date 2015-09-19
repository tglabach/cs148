<?php
include 'top.php';
print '<h1>Total Records: 12 </h1>';
print '<article>';
print '<table>';

print '<h3> SQL:  SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%"</h3>';

//now print out each record
    $query = 'SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);

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
