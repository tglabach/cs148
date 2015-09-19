<?php
include 'top.php';
print '<h1>Total Records: 59 </h1>';
print '<article>';
print '<table>';

print '<h3> SQL:  SELECT  fldBuilding, count(*) as numberSections FROM tblSections GROUP BY fldBuilding </h3>';
//now print out each record
    $query = 'SELECT  fldBuilding, count(*) as numberSections FROM tblSections GROUP BY fldBuilding';
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

$i = 0;
foreach ($info2 as $rec) {
    print '<tr>';
    print '<td>' . $rec[$i] . '</td>';
    print '<td>' . $rec[1] . '</td>';
    print '</tr>';
}

// all done
    print '</table>';

print '</article>';
include "footer.php";
?>
