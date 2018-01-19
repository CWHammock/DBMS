use cwh3db

# Homework 5
# Warren Hammock
# CS530
# 3/9/16

# Question 1
SELECT e.ename as NAME, e.age as AGE, e.salary as SALARY FROM emp AS e, works AS w, dept AS d 
WHERE e.eid = w.eid AND d.did = w.did 
AND d.dname = 'Operations' ORDER BY SALARY DESC;

#Question 2
SELECT d.dname AS DEPARTMENT, COUNT(w.eid) as EMPLOYEES FROM dept as d, works as w WHERE w.did = d.did  
GROUP BY DEPARTMENT
HAVING COUNT(w.eid) > 20;

#Question 3
SELECT ename as NAME FROM emp
WHERE salary > ALL (
  SELECT AVG(salary) FROM emp);	
	
	
#Question 4
SELECT d.managerid AS MANAGER_ID, e.ename AS NAME FROM emp as e, dept as d 
WHERE e.eid = d.managerid 
AND (1000000 < ALL(SELECT d2.budget FROM dept as d2 WHERE d2.managerid = d.managerid));
	
	
#Question 5
SELECT e.ename AS NAME, COUNT(d.dname) AS DEPTS_WORKED_IN 
FROM emp AS e, dept AS d, works AS w 
WHERE  e.eid = w.eid AND d.did = w.did 
GROUP BY NAME 
HAVING COUNT(*) > 1;


#Question 6

select e.ename AS NAME
from emp as e, dept as d, works as w 
where e.eid = w.eid and w.did = d.did 
and salary > (select avg(salary) from emp as e2, dept as d2, works as w2 
where e2.eid = w2.eid and w2.did = d2.did and d2.did = d.did) order by NAME;



