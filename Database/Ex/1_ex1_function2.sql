SELECT CONCAT('안녕하세요', '좋은아침입니다.');

SELECT CONCAT(first_name,' ',last_name)
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS(' ',first_name, last_name)
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS(' / ', 'a', 'b', 'c');

-- format
select FORMAT(123456.555, 1);

-- left, right
SELECT LEFT('abcdefg', 3);
SELECT RIGHT('abcdefg', 3);

-- upper(소-대), lower(대 - 소)
SELECT UPPER('abc');
SELECT lower('aBCasdfasdf');

-- lpad, rpad
SELECT LPAD('abc', 7, '@');
SELECT LPAD('956', 6, '0');

SELECT RPAD('abc', 7, '@');
SELECT RPAD('956', 6, '0');

-- trim, ltrim, rtrim(leading, both, trailing)
SELECT TRIM('     a  bc ');
SELECT LTRIM('     a  bc');
SELECT RTRIM('     a  bc   ');
SELECT TRIM(both 'abc' FROM 'abcdefabc');

-- substring, index
SELECT SUBSTRING('abcdef', 2, 4);
SELECT SUBSTRING_index('ab.cd.ef.gh', '.', 4);
SELECT SUBSTRING('ab/cd/ef/gh' FROM 2 FOR 2);