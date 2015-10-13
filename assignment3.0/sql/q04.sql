SELECT fnkSectionId, fldLastName, fldFirstName 
FROM tblCourses
JOIN tblEnrolls on pmkCourseId = tblEnrolls.fnkCourseId
JOIN tblStudents on pmkStudentId = fnkStudentId 
WHERE concat(fldDepartment, " ", fldCourseNumber) 
LIKE "CS 148" 
ORDER BY fnkSectionId, fldLastName, fldFirstName