<?php
include 'top.php';
print '<h1>Total Records: 1 </h1>';
print '<article>';
print '<table>';

print '<h3> SQL:  SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses </h3>';
//now print out each record
    $query = 'SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

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
