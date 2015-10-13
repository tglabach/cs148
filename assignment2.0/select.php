
<?php
include "top.php";
?>
<ol>
    <li><a href="q01.php">Query #1:  </a> SELECT pmkNetId FROM tblTeachers</li>
    <li><a href="q02.php">Query #2:  </a>SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%"</li>
    <li><a href="q03.php">Query #3:  </a>SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart, fldStop, fldDays, fldBuilding, fldRoom 
            FROM tblSections
            WHERE fldBuilding="Kalkin" 
            AND fldStart="13:10"</li>
    <li><a href="q04.php">Query #4:  </a>SELECT * FROM tblCourses WHERE fldDepartment="CS" AND fldCourseNumber="148"</li>
    <li><a href="q05.php">Query #5:  </a>SELECT fldLastName, fldFirstName FROM tblTeachers WHERE pmkNetId LIKE ("r%o")</li>
    <li><a href="q06.php">Query #6:  </a>SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE "%Data%" AND fldDepartment != "CS"</li>
    <li><a href="q07.php">Query #7:  </a>SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses</li>
    <li><a href="q08.php">Query #8:  </a>SELECT  fldBuilding, count(*) as numberSections FROM tblSections GROUP BY fldBuilding</li>
    <li><a href="q09.php">Query #9:  </a>SELECT fldBuilding, SUM(fldNumStudents) FROM tblSections WHERE fldDays LIKE '%W%' GROUP BY fldBuilding ORDER BY fldBuilding DESC</li>
    <li><a href="q10.php">Query #10:  </a>SELECT fldBuilding, SUM(fldNumStudents) FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldBuilding DESC</li>
    <li><a href="q11.php">Query #11:  </a>SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(*) > 50;</li>
   
    

</ol>

<?php
include 'footer.php';
?>