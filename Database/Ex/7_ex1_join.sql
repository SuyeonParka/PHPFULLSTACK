INSERT INTO departments
VALUES(
	'd010'
	,'test'
);

COMMIT;

SELECT *
FROM departments
;

-- inner join
-- select <열목록> from <첫번쨰 테이블> inner join (두 번째 테이블) on <조인될 조건> where [검색 조건]
SELECT emp.emp_no, demp.dept_no, emp.first_name 
FROM employees AS emp
	INNER JOIN dept_emp AS demp
		ON emp.emp_no = demp.emp_no
LIMIT 10;

-- outer join
-- select <열목록> from <첫 번째 테이블> inner join <두 번째 테이블> on<조인될 조건> [where 검색조건]
SELECT dept.dept_no, dept.dept_name, d_m.emp_no  -- 추가시킨 'd010'의 값이 departments에 들어가서 left로 값을 도출 가능.
FROM departments dept
	LEFT OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;
		
SELECT dept.dept_no, dept.dept_name, d_m.emp_no  -- 추가시킨 'd010'의 값이 departments에만 들어가고 dept_manager에는 없어서 도출 노.
FROM departments dept
	right OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;
		
SELECT dept.dept_no, dept.dept_name, d_m.emp_no  -- mariadb에는 full지원 노.
FROM departments dept
	full OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;

-- employees 테이블에 새로운 테이블을 추가하는 것 
ALTER TABLE employees ADD COLUMN sup_no INT(11);
ALTER TABLE employees ADD drop sup_no INT(11); -- 추가된 거 삭제

-- self join(결국 두 테이블을 조인)
-- 10001의 상사 데이터를 뽑아주세요 결과 10002의 정보 나옴
SELECT emp2.* 
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
WHERE emp1.emp_no = 10001;

-- union/union all :두 결과를 합침 
SELECT * FROM employees WHERE emp_no = 10001 or emp_no= 10005
UNION
SELECT * FROM employees WHERE emp_no = 10005;
