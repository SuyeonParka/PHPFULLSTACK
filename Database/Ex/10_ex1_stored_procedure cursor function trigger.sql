-- 스토어드 프로시저
SHOW PROCEDURE STATUS;

delimiter $$ -- 실행하지 않음 
CREATE PROCEDURE 프로시저명 (
	IN 변수명 데이터타입
		,OUT 변수명 데이터타임
)
BEGIN
	프로시저의 실행 내용 정의
END $$
delimiter;

DELIMITER $$
CREATE PROCEDURE test_proc (
	IN in_num INT 
) 
BEGIN
	SELECT * 
	FROM employees
	LIMIT in_num;  -- 위에부터 잘라서 가져옴 
END $$
DELIMITER ; -- delimiter랑 ;사이에 공백주니까 만들어짐요


CALL test_proc(10);

SHOW PROCEDURE STATUS;

DROP PROCEDURE test_proc;



-- 스토어드 함수
delimiter $$
CREATE FUNCTION 함수명((num INT)
	RETURNS 데이터타입
BEGIN
	RETURN 반환값;
END $$
delimiter;

delimiter $$
CREATE function fc_sum(num INT)
	RETURNS int
BEGIN
	RETURN num + num + num;
END $$
delimiter ;

SELECT fc_sum(2);

DROP FUNCTION fc_sum;




-- 커서 

delimiter $$
CREATE PROCEDURE test()
BEGIN
DECLARE sal INT;
DECLARE sum_sal INT;
DECLARE cur_sal INT;
DECLARE end_row BOOLEAN DEFAULT FALSE;

-- 커서 선언 
DECLARE cur_sal CURSOR FOR
	SELECT salary FROM salaries WHERE emp_no = 10001;

-- 행이 끝이면 end_row에 true 대입 
DECLARE CONTINUE handler FOR NOT FOUND
	SET end_row = TRUE;
	
-- 커서 오픈 
OPEN cur_sal;

-- 루프 시작 
cursor_loop loop
	fetch cur_sal INTO sal;
	
--행이 끝이면 루프 종료 
if end_row then
	leave cursor_loop;
	END if;
	
	SET sum_sal = sum_sal + sal;
END loop cursor_loop;

SELECT sum_sal;
END $$
delimiter;


-- 트리거

DELIMITER $$
CREATE TRIGGER 트리거명
{BEFORE | AFTER} {INSERT | UPDATE| DELETE }    -- 실행시기와 작업 선택 
ON 테이블                  -- 트리거를 부착할 테이블 
FOR EACH ROW                 -- 아래 나올 조건에 해당하는 모든 row에 적용, 기본적으로 적용 

BEGIN
	-- 트리거시 실행되는 코드 
IF NEW.컬럼 != OLD.컬럼 THEN -- update 트리거는 old와 new 값이 존재한다.
	UPDATE 테이블
	SET 컬럼 = NEW.컬럼
	WHERE 컬럼 = OLD.컬럼;
END IF;
END $$
DELIMITER ;
	
	
DELIMITER $$
CREATE TRIGGER test_update
AFTER UPDATE
ON departments                
FOR EACH ROW                
BEGIN	 
	UPDATE departments
	SET dept_name = 'trigger test'
	WHERE emp_no = '10010'
END $$
DELIMITER ;

-- 트리거 확인 
SHOW TRIGGERS;

-- 트리거 삭제
DROP TRIGGER 트리거명;





