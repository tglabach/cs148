
<?php
include "top.php";
?>
<ol>
    <li><a href="q01.php">Query #1:  </a> SELECT DISTINCT(fldCourseName) FROM tblCourses JOIN tblEnrolls on fnkCourseId = pmkCourseId WHERE fldGrade = 100 ORDER BY fldCourseName </li>
    <li><a href="q02.php">Query #2:  </a> SELECT DISTINCT(fldStart), fldStop, fldDays FROM tblSections JOIN tblTeachers on pmkNetId = fnkTeacherNetId WHERE concat(fldFirstName, " ", fldLastName) LIKE "Robert%Snapp" ORDER BY fldStart</li>
    <li><a href="q03.php">Query #3:  </a> SELECT DISTINCT(fldCourseName), fldStart, fldStop, fldDays FROM tblSections JOIN tblTeachers on pmkNetId = fnkTeacherNetId JOIN tblCourses on pmkCourseId = fnkCourseId WHERE concat(fldFirstName, " ", fldLastName) LIKE "Jackie%Horton" ORDER BY fldStart</li>
    <li><a href="q04.php">Query #4:  </a>  SELECT fnkSectionId, fldLastName, fldFirstName FROM tblCourses JOIN tblEnrolls on pmkCourseId = tblEnrolls.fnkCourseId JOIN tblStudents on pmkStudentId = fnkStudentId WHERE concat(fldDepartment, " ", fldCourseNumber) LIKE "CS 148" ORDER BY fnkSectionId, fldLastName, fldFirstName</li>
    <li><a href="q05.php">Query #5:  </a>  SELECT fldLastName, fldFirstName, SUM(fldNumStudents) as Total FROM tblTeachers, tblSections, tblCourses WHERE fnkTeacherNetId = pmkNetId AND pmkCourseId = fnkCourseId AND fldDepartment = "CS" AND fldType <> "LAB" GROUP BY fldLastName HAVING SUM(fldNumStudents) > 0 ORDER BY SUM(fldNumStudents) DESC</li>
    <li><a href="q06.php">Query #6:  </a>  SELECT fldFirstName, fldPhone, fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers)</li>
    <li><a href="q07.php">Query #7:  </a>  SELECT SELECT fldFirstName, fldLastName, AVG(fldGrade), COUNT(fnkStudentId) FROM tblStudents, tblEnrolls WHERE fldState = "VT" AND fnkStudentId = pmkStudentId GROUP BY pmkStudentId HAVING AVG(fldGrade) > (SELECT AVG(fldGrade) FROM tblEnrolls, tblStudents WHERE fldState = "VT" AND fnkStudentId = pmkStudentId)</li>
    <li><a href="q08.php">Query #8:  </a>  SELECT fldLastName, fldFirstName, SUM(fldNumStudents), fldSalary, (fldSalary/(SUM(fldNumStudents))) FROM tblTeachers, tblSections, tblCourses WHERE fnkTeacherNetId = pmkNetId AND pmkCourseId = fnkCourseId AND fldDepartment = "CS" AND fldType != "LAB" GROUP BY fldLastName HAVING SUM(fldNumStudents) > 0</li>


</ol>

<?php
include 'footer.php';
?>