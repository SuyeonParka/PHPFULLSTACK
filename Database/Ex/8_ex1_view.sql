-- view 생성

CREATE VIEW test_view
AS
	SELECT                                          
		tt.title
		,COUNT(*) AS cnt                     
		from employees emp
			INNER JOIN titles tt
				ON emp.emp_no = tt.emp_no
		WHERE emp.gender = 'F'
		AND tt.to_date = DATE('99990101')         
		GROUP BY tt.title	;

-- view 변경 [or replace]문

CREATE OR REPLACE VIEW TEST_VIEW
AS
	SELECT                                          
	tt.title
	,COUNT(*) AS cnt                     
	from employees emp
		INNER JOIN titles tt
			ON emp.emp_no = tt.emp_no
	WHERE emp.gender = 'F'
	AND tt.to_date = DATE('99990101')         
	GROUP BY tt.title	;
	
	
SELECT * FROM TEST_VIEW
WHERE TITLE='STAFF';

-- VIEW삭제
DROP VIEW TEST_VIEW;
	