<?php
include 'top.php';
print '<h1>Total Records: 1 </h1>';
print '<article>';
print '<table>';

print '<h3> SELECT * FROM tblCourses WHERE fldDepartment="CS" AND fldCourseNumber="148"</h3>';

//now print out each record
    $query = 'SELECT * FROM tblCourses WHERE fldDepartment="CS" AND fldCourseNumber="148"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);

$i = 0;
foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[$i] . '</td>';
    print '<td>' . $rec[1] . '</td>';
    print '<td>' . $rec[2] . '</td>';
    print '<td>' . $rec[3] . '</td>';
    print '<td>' . $rec[4] . '</td>';
    print '<td>' . $rec[5] . '</td>';
    
    print '</tr>';
}

// all done
    print '</table>';

print '</article>';
include "footer.php";
?>
