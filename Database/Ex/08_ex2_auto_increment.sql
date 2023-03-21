CREATE TABLE test_member (
	mem_no INT(11) PRIMARY KEY 
	,mem_name varchar(50)
);

-- 수정사항 있을 때 뒤에 modify
ALTER TABLE test_member MODIFY mem_no INT AUTO_INCREMENT;

ALTER TABLE test_member AUTO_INCREMENT=10;

INSERT INTO test_member(mem_name)
VALUES('박수연');

INSERT INTO test_member(mem_name)
VALUES('박지원');

DELETE FROM test_member;

TRUNCATE TABLE test_member;

SELECT *
FROM test_member;

COMMIT;

-- tabel 삭제 
DROP table test_member;

-- auto_increment의 특징:한번 숫자를 올리면 고정, 삭제했다고 내려가지 않음 
-- auto_increment 초기화하자 했을 떄의 문제점 : insert 에러뜸-auto_increment는 pk에 적용돼서 
-- auto_increment를 따로 관리하는 테이블 만들기 