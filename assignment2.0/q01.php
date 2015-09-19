<?php
include 'top.php';
print '<h1>Total Records: 1010 </h1>';
print '<article>';
print '<h3> SQL:  SELECT pmkNetId FROM tblTeachers</h3>';
print '<table>';



//now print out each record
    $query = 'SELECT pmkNetId FROM tblTeachers';
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
