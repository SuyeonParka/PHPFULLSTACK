-- 1. 사원의 사원번호, 풀네임, 직책명을 출력해주세요.
-- 2. 사원의 사원번호, 성별, 현재 월급 출력 
-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요.
-- 4.사원의 사원번호, 풀네임, 소속부서명을 출력해주세요.
-- 5. 현재 월급의 상위 10까지 사원의 사번, 풀네임, 월급을 출력해 주세요.
-- 6. 각 부서의 부서장의 배속일을 출력해 주세요.
-- 7. 현재 직책이 "staff"인 사원의 현재 월급을 출력해주세요.
-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
-- 9. 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해주세요.
-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.



SELECT                                                   -- 1. 사원의 사원번호, 풀네임, 직책명을 출력해주세요. concat으로 합쳐줌. 각테이블의 공통된 emp_no로 연결
	emp.emp_no                                            -- WHERE emp.to_date = DATE(99990101) 또는 where emp.to_date >= now() 넣었는데 값이 안나옴
	,CONCAT(first_name,' ', last_name) AS full_name
	,tt.title   
FROM employees as emp
		INNER JOIN titles AS tt
			ON emp.emp_no = tt.emp_no;
			
			
SELECT                                                   -- 2. 사원의 사원번호, 성별, 현재 월급 출력. 현재 월급 출력을 위해서 and로 줌 
	sal.emp_no                      
	,emp.gender
	,sal.salary  
FROM employees AS emp
		INNER JOIN salaries AS sal
			ON emp.emp_no = sal.emp_no
			and sal.to_date = DATE('99990101');
					
			
SELECT                                                         -- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요. 
	CONCAT(first_name, ' ', last_name) AS full_name   
	,sal.salary
FROM employees AS emp
	 INNER JOIN salaries AS sal
	 	 ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;


SELECT                                                      -- 4.사원의 사원번호, 풀네임, 소속부서명을 출력해주세요. where조건을 안주면 중복되는 값이 나와서 줌
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
			
			
 
SELECT                                                       -- 5. 현재 월급의 상위 10까지 사원의 사번, 풀네임, 월급을 출력해 주세요. 
	emp.emp_no                                                -- '현재'월급의 상위 10까지이기 때문에 where조건을 이렇게 줌 
	,CONCAT(first_name, ' ', last_name) AS full_name          -- 내림차순을 이용해 월급이 높은 순으로 정렬해줌 그 중에서 limit을 이용해 상위 10위까지 도출
	,sal.salary              
FROM employees as emp
		INNER JOIN salaries as sal
			ON emp.emp_no = sal.emp_no
WHERE sal.to_date = DATE('99990101')
	ORDER BY sal.salary desc
	LIMIT 10;
	

SELECT rnk.*                                                      -- 5. 중복된 값 제거, 더 정확하게 결과 도출, 느림.
FROM (	
		SELECT 
			emp.emp_no
			,CONCAT(emp.first_name, ' ', emp.last_name) fullname
			,sal.salary
			,RANK() over(order by sal.salary DESC) rn
		FROM employees emp
			INNER JOIN salaries sal
			ON emp.emp_no = sal.emp_no
		WHERE sal.to_date >= NOW()
	) rnk
WHERE rnk.rn <= 10;
	
	
			
SELECT                                         -- 6. 각 부서의 부서장의 입사일을 출력해 주세요.부서장들의 to_date들이 공통적으로 9999-01-01까지라서
	man.dept_no                                 -- where 조건의 date를 99990101로 넣어줌
	,emp.hire_date                        
FROM dept_manager AS man
		INNER JOIN employees AS emp         
			ON man.emp_no = emp.emp_no
WHERE man.to_date = DATE('99990101');


SELECT                                             -- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요.
	dept.dept_name
	,CONCAT(last_name, ' ', first_name)
	,emp.hire_date
FROM employees emp
	INNER JOIN dept_manager de_m 
		ON emp.emp_no = de_m.emp_no
			INNER JOIN departments dept
				ON de_m.dept_no = dept.dept_no
WHERE de_m.to_date >= NOW();




SELECT                                                -- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요.
	dept.dept_name
	,CONCAT(last_name, ' ', first_name) fullname
	,emp.hire_date
	,dept.dept_no
FROM departments dept
	LEFT OUTER JOIN dept_manager de_m 
		ON dept.dept_no = de_m.dept_no
	LEFT OUTER JOIN employees emp
			ON emp.emp_no = de_m.emp_no
-- WHERE de_m.to_date >= NOW();



		
SELECT                                           -- 7. 현재 직책이 "staff"인 사원의 현재 평균 월급을 출력해주세요.
	tt.title                                      -- where 조건에 타이틀이 staff를 넣어주고 '현재'직책인 사람을 출력해야해서 to_date를 99990101로 줌
	,AVG(salary)                  
FROM titles tt
	INNER JOIN salaries sal
		ON tt.emp_no = sal.emp_no
WHERE tt.title = 'Staff'
	AND tt.to_date = DATE('99990101')
	AND sal.to_date = DATE('99990101');
-- and tt.to_date>=now()



SELECT                                               -- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
	CONCAT(first_name, ' ', last_name) fullname       -- 입사일, 부서번호 - 매니저 테이블 
	,emp.hire_date
	,emp.emp_no
	,dept.dept_no   
FROM employees emp
		INNER JOIN dept_manager dept
			ON emp.emp_no = dept.emp_no;



SELECT                                             -- 9. 현재 각  직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해주세요.
	tt.title                                        -- title에 있는 todate말고 salaries에 있는 todate 쓴 이유 : 전자를 쓰면 그 사람의 전적 기록까지 다 나와서서.
	,TRUNCATE(AVG(salary),0) avg_sal                -- truncate로 평균월급을 정수로 나타내줌. 
FROM titles tt													-- '현재 각 직급'조건줄려고 where로 date를 99990101, date
	INNER JOIN salaries sal
		ON sal.emp_no = tt.emp_no                       
WHERE sal.to_date = DATE('99990101')
AND tt.to_date = DATE('99990101')
	GROUP BY tt.title 
		having avg_sal >= 60000 
	ORDER BY avg_sal desc;
	
	
SELECT
	tt.title
	,round(AVG(salary),0) avg_sal                   -- floor이나 cast 사용 가능
FROM titles tt
	INNER JOIN salaries sal
		ON sal.emp_no = tt.emp_no
WHERE sal.to_date = DATE(99990101)
AND tt.to_date = DATE(99990101)
	GROUP BY tt.title
		HAVING avg_sal >= 60000
	ORDER BY avg_sal DESC;
			


SELECT                                            -- 10. 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.
	tt.title
	,COUNT(emp.emp_no) AS cnt                      -- count(*)
	from employees emp
		INNER JOIN titles tt
			ON emp.emp_no = tt.emp_no
WHERE emp.gender = 'F'
GROUP BY tt.title	;


SELECT                                          
	tt.title
	,COUNT(*) AS cnt                     
	from employees emp
		INNER JOIN titles tt
			ON emp.emp_no = tt.emp_no
WHERE emp.gender = 'F'
AND tt.to_date = DATE('99990101')              --중복되는 사람 제외
GROUP BY tt.title	;


                         
SELECT                                                -- 11.직급별 퇴사한 여자 사원수mu sun so ri??                                      
	title
	,COUNT(dept.emp_no) AS '사원수'
	FROM dept_emp dept
		INNER JOIN titles tt
			ON emp.emp_no = tt.emp_no
WHERE tt.title = 'F'
and dept.to_date NOT like DATE('99990101');
			

SELECT 
	A.gender
	,COUNT(A.gender)
FROM employees A
INNER join
( 
	SELECT A, emp_no
	FROM (
			SELECT emp_no
			FROM titles
			GROUP BY emp_no
			HAVING COUNT(emp_no) > 1
		) A
		
	WHERE A.emp_no NOT IN (
		SELECT A.emp_no FROM titles A
		INNER join (
			SELECT emp_no
			FROM titles
			GROUP BY emp_no
			HAVING COUNT(emp_no) > 1
		) B
		ON A.emp_no = B.emp_no
		WHERE to_date = DATE('99990101')
)

 UNION 
 
 SELECT a.emp_no
 FROM title A
 INNER JOIN (
 		SELECT emp_no
 		FROM titles
 		GROUP BY emp_no
 		HAVING COUNT(emp_no) = 1
) B
ON A.emp_no = B.emp_no 
WHERE A.to_date != DATE('99990101');


SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN
(
	SELECT  emp_no
	FROM titles
	WHERE to_date < NOW()
	AND (emp_no, to_date) in
	(
		SELECT emp_no, MAX(to_date)
		FROM titles
		GROUP BY emp_no
	)
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;



SELECT  A.gender, COUNT(A.gender) AS cnt                -- 11. 정답 , != 반대꺼 찾는 거 
FROM employees A
INNER JOIN (
	SELECT DISTINCT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) !=  DATE('99990101')
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;


SELECT  A.gender, COUNT(A.gender) AS cnt                -- 11. 정답 , != 반대꺼 찾는 거 distinct 없애준 이유: 어짜피 emp_no기준으로 group by를 줘서 공통된 emp_no는 그룹으로 묶였기 때문에 
FROM employees A                                        -- 굳이 중복값 없애는 걸 안줘도 됨.
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) !=  DATE('99990101')
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;



SELECT * 
FROM (SELECT emp_no
	FROM titles
	WHERE to_date < NOW()
	AND (emp_no, to_date) in
	(
		SELECT emp_no, MAX(to_date)
		FROM titles
		GROUP BY emp_no
	)
) A
WHERE A.emp_no NOT IN 
(
SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) !=  DATE(99990101)
	);

		

		

			