-- employees 테이블과 dept_emp를 join해서 10001 회원의 사번과 이름, 소속부서번호를 출력해주세요.

SELECT first_name, dept_no
FROM employees emp
	INNER JOIN dept_emp dept
		ON emp.emp_no = dept.emp_no
WHERE emp.emp_no = 10001;


SELECT 
	emp.first_name
	,dep.dept_no
	,dep.dept_name
	,emp.emp_no
FROM employees emp
	INNER JOIN dept_emp dept
		ON emp.emp_no = dept.emp_no
		INNER JOIN departments dep
			ON dept.dept_no = dep.dept_no
WHERE emp.emp_no = 10001;

SELECT emp.first_name, emp.emp_no
FROM employees emp
WHERE emp_no = (
					SELECT emp_no
					FROM dept_emp dept
					WHERE emp_no = 10001);