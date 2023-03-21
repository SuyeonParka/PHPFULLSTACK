-- index
-- show index from 테이블 

SHOW INDEX FROM employees;

-- 인덱스 속도 체감해보기 
SELECT * FROM employees WHERE last_name = 'swan';

-- index 생성 
-- create index 인덱스명 on 테이블(컬럼);
CREATE INDEX idx_employees_last_name ON employees(last_name);

-- index 제거 
-- drop index 인덱스명 on 테이블;
DROP INDEX idx_employees_last_name ON employees;