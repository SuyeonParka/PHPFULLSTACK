CREATE TABLE student_results (
	subject_no INT(20)
	,student_no INT(10)
	,subject_result INT(10) NOT NULL 
	,student_ranks INT(20) NOT NULL 
	,get_records_date DATE NOT NULL 
	,PRIMARY KEY (subject_no, student_no)
);

DROP TABLE student_results;


CREATE TABLE subject_info (
	subject_no INT(20) PRIMARY KEY
	,prof_no INT(10)
	,book_no INT(10)
	,class_name VARCHAR(20) NOT NULL 
	,subject_name VARCHAR(200) NOT NULL 
	,class_date DATE NOT NULL 
	,accept_num INT(20) 
	,class_semester INT(10) CHECK (
		class_semester >=1 AND class_semester <= 20)
	,class_no INT(10)
	,class_start_time DATETIME 
	,class_end_time DATETIME 
	,necessary ENUM('Y','N')	
);

DROP TABLE subject_info;

CREATE TABLE student_info(
	student_no INT(10) PRIMARY KEY
	,student_birth DATE NOT NULL
	,student_name VARCHAR(20) NOT NULL
	,gender ENUM('M', 'F')
	,student_addr VARCHAR(200) NOT NULL 
	,student_call CHAR(11) NOT NULL    -- 11글자 고정할려고 char,   
	,student_status ENUM('Y','N') NOT NULL 
	,student_admission DATE NOT NULL
	,student_graduate DATE
);

DROP TABLE student_info;

CREATE TABLE professor_info (
	prof_no INT(10)
	,prof_name VARCHAR(20) NOT NULL 
	,prof_birth DATE 
	,prof_major VARCHAR(20) NOT NULL 
	,degree_no INT(20) 
	,prof_email INT(20) NOT NULL 
	,class_name VARCHAR(20) NOT NULL 
	,labor_no INT(10) NOT NULL 
	,pfor_title VARCHAR(10) 
	,prof_hire DATE 
	,CONSTRAINT PROF_NO PRIMARY KEY(prof_no)
);

CREATE TABLE book_info (
	book_no INT(10)
	,book_name VARCHAR(200) NOT NULL 
	,CONSTRAINT BOOK_NO PRIMARY KEY(book_no)
);


CREATE INDEX
ON
SHOW INDEX FROM ;

DROP TABLE professor_info;

INSERT INTO book_info(
	book_no
	,book_name
)
VALUES (
	23
	,'math'
);

INSERT INTO professor_info(
	prof_no 
	,prof_name 
	,prof_birth 
	,prof_major  
	,degree_no 
	,prof_email 
	,class_name  
	,labor_no 
	,pfor_title  
	,prof_hire 
)
VALUES (
	1
	,'James'
	,'1997-03-31'
	,'language'
	,1234
	,12312321
	,234
	,101
	,'ff'
	,'2016-02-02'
);

INSERT INTO student_info(
		student_no
	,student_birth 
	,student_name 
	,gender 
	,student_addr 
	,student_call  
	,student_status 
	,student_admission 
	,student_graduate
)
VALUES (
	1
	,'2005-05_24'
	,'박지원'
	,'M'
	,'어디어디'
	,01011112222
	,'Y'
	,'2024-03-02'	
	,'2029-03-02'
);

INSERT INTO student_results (
	subject_no 
	,student_no 
	,subjent_result 
	,student_ranks 
	,get_records_date
)
VALUES (
	1
	,1
	,100
	,1
	,'2020-01-01'
);

INSERT INTO subject_info (
	subject_no 
	,prof_no 
	,book_no 
	,class_name 
	,subjent_name 
	,class_date 
	,accept_num  
	,class_semester	
	,class_no 
	,class_start_time
	,class_end_time
	,necessary	
)
VALUES (
	1
	,1
	,1
	,'math'
	,'math'
	, 10
	,'2002-01-01'
	,1
	,1-305
	,'2002-03-02 22:22:22'
	,'2002-05-13 22:22:22'
	,'Y'
);

	

SELECT *
FROM professor_info
WHERE prof_no = 1;


SELECT * 
FROM book_info 
WHERE book_no = 23;

	
	
	
	