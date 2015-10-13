SELECT DISTINCT(fldCourseName) 
FROM tblCourses 
JOIN tblEnrolls on fnkCourseId = pmkCourseId 
WHERE fldGrade = 100 
ORDER BY fldCourseName