<?php
include 'top.php';
print '<h1>Total Records: 2 </h1>';
print '<article>';
print '<h3> SQL:  SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(*) > 50;</h3>';
print '<table>';



//now print out each record
    $query = 'SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(*) > 50;';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 1, false, false);

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

