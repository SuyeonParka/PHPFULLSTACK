-- 현재 직책이 "senior engineer"인 사원의 사원번호,
-- 성을 조회해 주세요.
SELECT emp_no, last_name
FROM titles
WHERE title = "senior engineer"
	AND to_date >= NOW()
;

SELECT emp_no, last_name
FROM employees
WHERE emp_no in (
					SELECT emp_no
					FROM titles
					WHERE title = 'senior engineer'
					AND to_date >= NOW()
					);