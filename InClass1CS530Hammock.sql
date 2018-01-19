# question 1
SELECT customer_name, customer_city FROM customer WHERE customer_city LIKE '%on';

# question 2
SELECT c.customer_name, c.customer_city FROM customer c, depositor d, account a WHERE c.customer_name = d.customer_name and d.account_number = 
a.account_number and a.branch_name ='Downtown';

#question 3
SELECT c.customer_name, FORMAT(l.amount, 2) as account FROM customer c, borrower b, loan l WHERE c.customer_name = b.customer_name and b.loan_number = l.loan_number and
l.amount between 1000 and 2000 order by c.customer_name desc;
 
#question 4
SELECT a.branch_name, FORMAT(avg(a.balance), 6) as Balance FROM account a GROUP BY 
a.branch_name having avg(a.balance) > 700;

#question 5
(select customer_name from depositor) union (select customer_name from 
 borrower);

#question 6
select FORMAT(avg(balance), 6) as avg from account where branch_name='Perryridge';

#question 7
SELECT a.branch_name, count(distinct d.customer_name) as count FROM depositor d, account a WHERE a.account_number = d.account_number group
 by a.branch_name;