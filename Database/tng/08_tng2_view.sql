-- 사원의 사원번호, 풀네임, 현재소속부서명을 출력해 주세요.

CREATE VIEW test_view1
AS
	SELECT                                                      
	emp.emp_no
	,CONCAT(first_name, ' ', last_name) AS full_name  
	,depm.dept_name 
FROM employees AS emp
		INNER JOIN dept_emp AS dep
			ON emp.emp_no = dep.emp_no
		INNER JOIN departments AS depm
			ON dep.dept_no=depm.dept_no
WHERE dep.to_date = DATE('99990101')
ORDER BY dep.emp_no;

SELECT * FROM test_view1;

DROP VIEW test_view1;