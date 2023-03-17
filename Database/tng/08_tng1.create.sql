-- primary key 순서 
CREATE TABLE employees1(
	emp_no INT(11)
	,birth_date DATE NOT NULL
	,first_name VARCHAR(14) 
	,last_name VARCHAR(16)
	,gender ENUM('M', 'F')
	,hire_date DATE NOT NULL
	,CONSTRAINT PK_EMPLOYEES1_nodate PRIMARY KEY(emp_no)
);

CREATE TABLE salaries1 (
	emp_no INT(11)
	,salary INT(11) NOT null
	,from_date DATE
	,to_date DATE
	,CONSTRAINT PK_SALARIES1_fd PRIMARY KEY(emp_no,from_date)
	,CONSTRAINT kf_salaries1_empno FOREIGN KEY(emp_no) REFERENCES employees1(emp_no)
);

CREATE INDEX empno ON salaries1(emp_no);
SHOW INDEX FROM salaries1;

CREATE TABLE titles1 (
	emp_no INT(11)
	,title VARCHAR(50) NOT null
	,from_date DATE NOT null
	,to_date date
	,constraint pk_titles1_etf PRIMARY KEY(emp_no, title, from_date)
	,CONSTRAINT fk_titles1_empno FOREIGN KEY(emp_no) REFERENCES employees(emp_no)
);

CREATE INDEX titles1_emp_no ON titles1(emp_no);
SHOW INDEX FROM titles1;