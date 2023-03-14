-- 테이블의 원래 순서와 같게 적--
INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500000
	,NOW()
	,'SuYeon'
	,'Park'
	,'F'
	,NOW()
);

-- emp_no로 검색 해야함.
SELECT emp_no
FROM employees
WHERE emp_no = 500000;


SELECT *
FROM employees
WHERE emp_no = 500000;

SELECT @@autocommit;

SET autocommit = FALSE;
