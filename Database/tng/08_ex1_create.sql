-- create table 테이블명 
-- int()는 컬럼의 길이 
--  WITHDRAWAL:회원탈퇴 
-- 제약조건 테이블 
-- ALTER TABLE 주소 추가
-- ADDR = ADDRESS
-- 데이터 값 큰거에서 작은거 변경 안됨

CREATE TABLE TEST_TBL (
	MEM_NO INT(5)                                                 
	,MEM_NAME VARCHAR(50) NOT NULL
	,MEM_AGE INT(3) NOT NULL 
	,MEM_SEX ENUM('F', 'M')
	,MEM_SIGNIN_DATE DATETIME NOT NULL
	,MEM_SIGNOUT_DATE DATETIME                                          
	,CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)                                    
);

-- ALTER TABLE test_tbl ADD COLUMN ADDR1 VARCHAR(300);


-- ALTER TABLE test_tbl DROP COLUMN ADDR1;
-- SHOW FULL COLUMNs FROM test_tbl;

-- ALTER TABLE test_tbl alter COLUMN ADDR1 VARCHAR(200);

