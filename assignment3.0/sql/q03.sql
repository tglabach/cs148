SELECT DISTINCT(fldCourseName), fldStart, fldStop, fldDays 
FROM tblSections
JOIN tblTeachers on pmkNetId = fnkTeacherNetId 
JOIN tblCourses on pmkCourseId = fnkCourseId
WHERE concat(fldFirstName, " ", fldLastName) 
LIKE "Jackie%Horton"  
ORDER BY fldStart