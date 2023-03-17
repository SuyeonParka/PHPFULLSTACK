INSERT INTO test_tbl(
		MEM_NO                                                 
	,MEM_NAME 
	,MEM_AGE 
	,MEM_SEX 
	,MEM_SIGNIN_DATE 
	,MEM_SIGNOUT_DATE 
)
VALUES (
	4
	,'박수인'
	,25
	,'F'
	,NOW()
	,NULL
);                                        
	
	
SELECT *
FROM test_tbl
WHERE mem_no = 1;

SELECT * FROM test_tbl;
COMMIT;

-- 롤백 됨
DELETE FROM test_tbl;
-- WHERE MEM_NO = 1

ROLLBACK;

-- 테이블의 데이터 삭제(롤백해도 안돌아옴)
TRUNCATE TABLE test_tbl;

-- 롤백 안됨 
DROP TABLE test_tbl;