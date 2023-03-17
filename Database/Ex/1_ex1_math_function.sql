-- ceiling
SELECT round(1.9);

-- truncate(삭제이력이 없음, 복구 불가능)
SELECT TRUNCATE(211.11, -2);

-- now
SELECT NOW();
SELECT DATE(NOW());
SELECT TIME(NOW());

-- adddate, subdate
SELECT ADDDATE(NOW(), INTERVAL -1 DAY);
SELECT SUBDATE(NOW(), INTERVAL 2 DAY);

-- addtime, subtime
SELECT ADDTIME(NOW(), '-1:1:1');
SELECT SUBTIME(NOW(), '1:1:1');

-- rank() over(order by 속성명 desc/asc):순위 매김 
SELECT emp_no, RANK() over(ORDER BY salary ASC) r, salary
FROM salaries;

-- row_number() over(order by 속성명 desc/asc):레코드에 순위를 매김 
SELECT emp_no, ROW_NUMBER() over(ORDER BY salary ASC) r, salary
FROM salaries;