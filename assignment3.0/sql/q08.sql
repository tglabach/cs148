SELECT fldLastName, fldFirstName, SUM(fldNumStudents), fldSalary, (fldSalary/(SUM(fldNumStudents))) 
FROM tblTeachers, tblSections, tblCourses 
WHERE fnkTeacherNetId = pmkNetId 
AND pmkCourseId = fnkCourseId 
AND fldDepartment = "CS" 
AND fldType != "LAB" 
GROUP BY fldLastName 
HAVING SUM(fldNumStudents) > 0
