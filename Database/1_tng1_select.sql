-- 사원별 급여의 평균이 3~50000사이 --
SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no 
HAVING avg_s >= 30000
AND avg_s <= 50000
;

SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no
HAVING avg(salary) BETWEEN 30000 AND 50000
;


-- 사원별 급여 평균이 7만 이상인 사원의 --
-- 사번, 이름, 성, 성별을 조회해 주세요 --
-- in 대신에 = any 넣어도 됨 --
SELECT emp_no, first_name, last_name, gender 
FROM employees
where emp_no in (
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no
						having avg(salary) >= 70000
						);


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