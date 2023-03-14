SELECT *
FROM employees
WHERE emp_no = 10001	
	OR emp_no = 10005
;

-- or and 구분 잘하기 -- 
SELECT *
FROM employees
WHERE emp_no IN(10001, 10005)
;
-- in은 데이터 양이 적을 경우 사용--
-- beween,in 속도저하 생김(비교연산자로 해결) --
-- like 문자열의 내용을 조회 --
SELECT *
FROM employees
WHERE first_name LIKE('%m')
;

SELECT emp_no, title
FROM titles
WHERE title LIKE '%engineer%'
;

-- 레코드 단위로 distinct 중복데이터 삭제 --
SELECT DISTINCT *
FROM dept_emp;

-- limit 뒤 숫자 만큼만 표시 (5부터 10개나타냄)--
SELECT *
FROM employees
LIMIT 10 OFFSET 4
;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name ASC 
;

-- 집계함수 (뭔가를 합쳐서 수치로 나타냄) --
-- count 레코드 개수 세림 --
SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT avg(salary)
FROM salaries 
;

SELECT MAX(salary)
FROM salaries
;

SELECT MIN(salary)
FROM salaries
;

SELECT SUM(salary)
FROM salaries
;

-- 그룹으로 묶어서 조회 --
SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;

-- having은 조건안에서 조건 또 줄때 줌(group by의 조건을 줄 때) --
-- 사원별 급여의 평균 조회 --
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no
;
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

-- 문자열 합치기 --
SELECT concat(last_name,' ',first_name) AS fullname
FROM employees;

-- subquery : 쿼리 안에 또다른 쿼리가 있는 형태 --
SELECT *
FROM dept_manager
WHERE dept_no = 
		(
			SELECT dept_no 
			FROM dept_manager
			WHERE emp_no = 110344
		);
		
SELECT dept_no 
FROM dept_manager
WHERE emp_no = 110344;

SELECT *
FROM dept_manager
WHERE emp_no in
		(
			SELECT emp_no 
			FROM dept_manager
			WHERE dept_no = 'd009'
		);
		
SELECT *
FROM dept_manager
WHERE emp_no = ANY(
						SELECT emp_no
						FROM dept_manager
						WHERE dept_no = 'd009'
						);

SELECT *
FROM dept_manager
WHERE dept_no = All(
						SELECT dept_no
						FROM dept_manager
						WHERE dept_no IN (111133, 111035)
						);
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

-- date 타입의 속성 비교 방법
-- 10009번 사원의 현재 직책--

SELECT *
FROM titles
WHERE emp_no = 10009
  AND to_date;
						
					
						