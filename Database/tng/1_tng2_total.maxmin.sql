-- 최고 연봉, 최소 연봉 넘버, 이름
SELECT MAX(salary)
FROM salaries

SELECT emp_no
FROM salaries
WHERE salary = (
SELECT MAX(salary)
FROM salaries)
-- 1번 방법
SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (
						(
						SELECT emp_no
						FROM salaries
						WHERE salary = (
							SELECT MAX(salary)
							from salaries
						)
					)
						,
						(
						 SELECT emp_no
						 FROM salaries 
						 WHERE salary = (
						 	SELECT MIN(salary) 
						 	FROM salaries
						 )
					 )
				);			

-- 2번 방법 만약에 똑같은 값이 두개이상일 경우에는 에러남
SELECT emp_no, first_name
FROM employees
WHERE emp_no in ((
					SELECT emp_no
					FROM salaries
					ORDER by salary ASC
					LIMIT 1
					),
					
					(
					SELECT emp_no
					FROM salaries
					ORDER BY salary DESC
					LIMIT 1
					));
-- 2-1번 방법			
SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
					SELECT emp_no
					FROM salaries
					ORDER by salary ASC
					LIMIT 1
					)
OR 	
		emp_no =	(
					SELECT emp_no
					FROM salaries
					ORDER BY salary DESC
					LIMIT 1
					);
						
SELECT emp_no, salary
FROM salaries
ORDER by salary ASC
LIMIT 1;

SELECT emp_no, salary
FROM salaries
ORDER BY salary DESC
LIMIT 1;

-- 3번 방법
SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM salaries
						WHERE salary IN (
							(SELECT MAX(salary) FROM salaries),
							(SELECT MIN(salary) FROM salaries)
						)
					);

