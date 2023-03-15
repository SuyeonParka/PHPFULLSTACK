1 - 0.1 * 7 = 0.3;

SELECT cast(1 AS INT) - CAST(0.1 AS DOUBLE) * CAST(7 AS INT) FROM DUAL;
-- 소수점을 버려버림, float 보다 double쓰는게 오류 줄임 

SELECT CAST(12345 AS decimal(5,0))
FROM DUAL;