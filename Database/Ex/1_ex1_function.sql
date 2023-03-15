-- 숫자열을 문자열로 변경 
SELECT CAST('1234' AS CHAR(4));

SELECT CONVERT(1234, CHAR(4));

-- if함수
SELECT emp_no, if(emp_no=10001, first_name , birth_date)
FROM employees;

-- ifnull 함수 null : 비어있다, 아얘 노존재, space공백은 null과 다르게 존재함
SELECT IFNULL(' ', 'aa');

-- nullif
SELECT NULLIF(1, 1);

-- case
SELECT
	emp_no
	,gender 
	,case gender
		when 'M' then '남자'		
		ELSE '여자'
	end
FROM employees LIMIT 10;