ELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart, fldStop, fldDays, fldBuilding, fldRoom 
            FROM tblSections
            WHERE fldBuilding="Kalkin" 
            AND fldStart="13:10"
