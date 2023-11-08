-- 1) Create a trigger for the employee table that would fire for INSERT or UPDATE operations performed on the employee table. This trigger will display the salary difference between the old values and new values.

CREATE OR REPLACE TRIGGER salary_difference_trigger
BEFORE INSERT OR UPDATE ON emp_21co50
FOR EACH ROW
BEGIN
      DBMS_OUTPUT.PUT_LINE('Salary Difference: ' || (:NEW.salary - :OLD.salary));
END;
/

-- Update the employee's salary
UPDATE emp_21co50 SET salary = 8500 WHERE eid = 705;






-- 2) Convert employee name into uppercase whenever an employee record is inserted or
-- updated. Trigger to be fired before the insert or update.

CREATE OR REPLACE TRIGGER uppercase_name_trigger
BEFORE INSERT OR UPDATE ON emp_21co50
FOR EACH ROW
BEGIN
  :NEW.ename := UPPER(:NEW.ename);
END;
/

-- Insert a new employee with a lowercase name
INSERT INTO emp_21co50 (eid, ename, salary, hire_date, job, DID, mid, did, mid) 
VALUES (102, 'jane smith', 7500, TO_DATE('2023-01-01', 'YYYY-MM-DD'), 'Clerk', 2, 2, 2, 2);

-- Update the employee's name to lowercase
UPDATE emp_21co50 SET ename = 'david brown' WHERE eid = 102;

-- Query the updated employee name
SELECT ename FROM emp_21co50 WHERE eid = 102;



-- 3) Trigger before deleting a record from emp table. Trigger will insert the row to be deleted into another table.

CREATE OR REPLACE TRIGGER delete_employee_trigger
BEFORE DELETE ON emp_21co50
FOR EACH ROW
BEGIN
  INSERT INTO deleted_employees (eid, ename, salary, hire_date, job, DID, mid, did, mid)
  VALUES (:OLD.eid, :OLD.ename, :OLD.salary, :OLD.hire_date, :OLD.job, :OLD.DID, :OLD.mid, :OLD.did, :OLD.mid);
END;
/

-- Insert a new employee
INSERT INTO emp_21co50 (eid, ename, salary, hire_date, job, DID, mid, did, mid) 
VALUES (103, 'Alice Johnson', 8500, TO_DATE('2023-01-01', 'YYYY-MM-DD'), 'Analyst', 3, 3, 3, 3);

-- Delete the employee record
DELETE FROM emp_21co50 WHERE eid = 103;

-- Query the deleted employee in the other table
SELECT * FROM deleted_employees WHERE eid = 103;





-- 4) Program to indicate invalid salary (if salary is more than 9000) condition using Trigger

CREATE OR REPLACE TRIGGER invalid_salary_trigger
BEFORE INSERT OR UPDATE ON emp_21co50
FOR EACH ROW
BEGIN
  IF :NEW.salary > 9000 THEN
    RAISE_APPLICATION_ERROR(-20001, 'Invalid Salary: Salary cannot be more than 9000');
  END IF;
END;
/

-- Insert an employee with an invalid salary
INSERT INTO emp_21co50 (eid, ename, salary, hire_date, job, DID, mid, did, mid) 
VALUES (104, 'Mark Davis', 9500, TO_DATE('2023-01-01', 'YYYY-MM-DD'), 'Programmer', 4, 4, 4, 4);




