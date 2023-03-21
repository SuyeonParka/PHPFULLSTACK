CREATE TABLE test_text (
	txt_no INT PRIMARY KEY AUTO_INCREMENT 
	,f_text VARCHAR(4000)
	, FULLTEXT idx_full_test_text_f_text(f_text)
);

CREATE FULLTEXT INDEX 인덱스명 ON test_text(f_text);

CREATE FULLTEXT INDEX idx_test_text ON test_text(f_text);

INSERT INTO test_text(f_text) VALUES('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세');
INSERT INTO test_text(f_text) VALUES('무궁화 삼천리 화려강산 대한사람 대하나으로 길이 보전하세');
INSERT INTO test_text(f_text) VALUES('남산위에 저 소나무 철갑을 두른듯 바람서리 불변함은 일편단심일세');
INSERT INTO test_text(f_text) VALUES('가을하늘 공활한데 높고 구름없이 높고 구름없이 밝은 달은 우리가슴 일편단심일세');
INSERT INTO test_text(f_text) VALUES('이기상과 이맘으로 충성을 다하여 괴로우나 즐거우나 나라 사랑하세');


-- 검색어1 또는 검색어2(or검색)
SELECT * FROM TABLE_NAME
WHERE MATCH(컬럼) AGAINST('검색어1 검색어2');

SELECT * FROM test_text
WHERE MATCH(f_text) AGAINST('이기상과 이맘으로');
