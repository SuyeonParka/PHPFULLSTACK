-- 실수 방지를 위해서 where(조건)부터 주기 

UPDATE departments
SET dept_name = '2000'
WHERE dept_no ='d001';

UPDATE departments
SET dept_name = '3000'
WHERE dept_no = 'd001' or dept_no = 'd002';

SELECT *
FROM departments
ORDER BY dept_no;


UPDATE employees
SET first_name = 'SuIn'
,last_name = 'Park'
,birth_date = DATE(20050524)
,gender = 'F'
WHERE emp_no = 500000;


SELECT *
FROM employees
WHERE emp_no = 500000;



ROLLBACK;


SELECT @@autocommit;