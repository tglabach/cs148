<?php
include 'top.php';
print '<h1>Total Records: 4 </h1>';
print '<article>';
print '<table>';

print '<h3> SQL:  SELECT fldLastName, fldFirstName FROM tblTeachers WHERE pmkNetId LIKE ("r%o")</h3>';

//now print out each record
    $query = 'SELECT fldLastName, fldFirstName FROM tblTeachers WHERE pmkNetId LIKE ("r%o")';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);

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
