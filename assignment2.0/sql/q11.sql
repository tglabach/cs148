SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(*) > 50;
