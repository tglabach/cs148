SELECT SELECT fldFirstName, fldLastName, AVG(fldGrade), COUNT(fnkStudentId) 
FROM tblStudents, tblEnrolls 
WHERE fldState = "VT" 
AND fnkStudentId = pmkStudentId 
GROUP BY pmkStudentId 
HAVING AVG(fldGrade) > (SELECT AVG(fldGrade) FROM tblEnrolls, tblStudents WHERE fldState = "VT" AND fnkStudentId = pmkStudentId)
