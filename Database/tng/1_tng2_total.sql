

insert into employees             -- 나와 짝궁의 정보 
SET emp_no = 500000
,first_name = 'SuYeon'
,birth_date = DATE(19970331)
,last_name = 'Park'
,gender = 'F'
,hire_date = NOW();

insert into employees
SET emp_no = 500001
,first_name = 'Hum'
,birth_date = DATE(19850101)
,last_name = 'Park'
,gender = 'M'
,hire_date = NOW();

INSERT INTO salaries             -- 나와 짝궁의 월급
SET emp_no = 500000
,salary = 5000000
,from_date = DATE(20000110)
,to_date = DATE(20050524);

INSERT INTO salaries
SET emp_no = 500001
,salary = 1000000000
,from_date = DATE(20000101)
,to_date = DATE(20100101);


INSERT INTO titles               -- 짝궁의 정보
SET emp_no = 500001
,title = 'Senior engineer'
,from_date = DATE(20000101)
,to_date = DATE(20100101);


INSERT INTO titles               -- 7. 처음에 직급을 스탭으로 줬다가 업데이트로 시니어로 바꿈(오늘 날짜 부로)
SET emp_no = 500000
,title = 'Staff'
,from_date = NOW()
,to_date = NOW();


UPDATE titles
SET title = 'Senior engineer'
WHERE emp_no = 500000;


INSERT INTO dept_emp               -- 4. 나와 짝궁의 소속부서를 d009로 변경 
SET emp_no = 500000
,dept_no = 'd004'
,from_date = DATE(20000110)
,to_date = DATE(20050524);

UPDATE dept_emp
SET dept_no = 'd009'
WHERE emp_no = 500000;


INSERT INTO dept_emp             -- 처음에는 insert로 바로 dept_no번호를 'd009'로 줬다가 '변경'을 해야한다고 해서 'd004'로 줌 
SET emp_no = 500001              -- 짝궁거는 이미 정보를 삭제한 후라서 업데이트 실행안시킴 
,dept_no = 'd009'
,from_date = DATE(20000101)
,to_date = DATE(20100101);
 
 
DELETE FROM employees    -- 5. 짝꿍의 모든 정보 삭제 
WHERE emp_no = 500001; 

INSERT INTO dept_manager   -- 6. 'd009'관리자를 나로 변경하기 위해서 기존의 관리자 값을 바꿔주고 나의 to_date값을 제일 크게 줌.
SET emp_no = 500000
,dept_no = 'd004'
,from_date = DATE(19970101)
,to_date = DATE(99990101);

UPDATE dept_manager             -- 나의 dept_no를 d004에서 doo9로 변경
SET dept_no = 'd009'
WHERE emp_no = 500000;

UPDATE dept_manager
SET to_date = DATE(19970101)
WHERE emp_no = 111939;


SELECT emp_no, first_name                   -- 8. 최고 연봉 사원과 최저 연봉 사원의 사번과 이름을 출력해 주세요.
FROM employees
WHERE emp_no IN (

		(
			SELECT emp_no
			FROM salaries
			WHERE salary = (		
				SELECT MAX(salary)
				FROM salaries
			)
		),
		
		(	
			SELECT emp_no
			FROM salaries
			WHERE salary = (		
				SELECT min(salary)
				FROM salaries
			)
		)
);
					
					
SELECT AVG(salary)   					-- 9. 전체 사원의 평균 연봉--
FROM salaries;

               
SELECT emp_no, AVG(salary)               -- 10. 499,975 사원의지금까지 평균 연봉 --
FROM salaries
WHERE emp_no =(
					SELECT emp_no
					FROM employees
					WHERE emp_no = 499975
					);  	
					
					
SELECT emp_no, AVG(salary)                 -- 10번 간단하게 
FROM salaries
WHERE emp_no = 499975;								
					




