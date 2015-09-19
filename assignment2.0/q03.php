<?php
include 'top.php';
print '<h1>Total Records: 10 </h1>';
print '<article>';
print '<table>';

print '<h3> SQL:  SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart, fldStop, fldDays, fldBuilding, fldRoom 
            FROM tblSections
            WHERE fldBuilding="Kalkin" 
            AND fldStart="13:10"</h3>';

//now print out each record
    $query = 'SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart, fldStop, fldDays, fldBuilding, fldRoom 
            FROM tblSections
            WHERE fldBuilding="Kalkin" 
            AND fldStart="13:10";';
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
    print '<td>' . $rec[6] . '</td>';
    print '<td>' . $rec[7] . '</td>';
    print '<td>' . $rec[8] . '</td>';
    print '<td>' . $rec[9] . '</td>';
    print '<td>' . $rec[10] . '</td>';
    print '<td>' . $rec[11] . '</td>';
    print '</tr>';
}

// all done
    print '</table>';

print '</article>';
include "footer.php";
?>
