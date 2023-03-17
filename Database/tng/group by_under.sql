SELECT emp_no, COUNT(emp_no)
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no) >= 3;


-- 3번이상 직책 바뀐 사람 