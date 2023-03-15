-- 직책이 "senior Engineer"일 경우는 "관리자" 그 외의 직책은 "팀원"으로 사번 
SELECT
	emp_no
	,case title 
		when 'senior Engineer' then '관리자'
		ELSE '팀원'
	END AS 'K_title'
FROM titles;