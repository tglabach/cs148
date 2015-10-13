SELECT DISTINCT(fldStart), fldStop, fldDays 
FROM tblSections
JOIN tblTeachers on pmkNetId = fnkTeacherNetId
WHERE concat(fldFirstName, " ", fldLastName) 
LIKE "Robert%Snapp" 
ORDER BY fldStart