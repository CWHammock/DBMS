#EMPSCHEDULE
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (30,'yes',1);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (30,'yes',2);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (30,'yes',3);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (30,'no',1);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (30,'no',2);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (30,'no',3);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (40,'yes',1);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (40,'yes',2);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (40,'yes',3);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (40,'no',1);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (40,'no',2);
INSERT INTO empschedule(hours_a_week,work_weekends,shift) VALUES (40,'no',3);
#DEPARTMENT
INSERT INTO department(division,role) VALUES ('HelpDesk', 'Phone Tech');
INSERT INTO department(division,role) VALUES ('HelpDesk', 'Bench Tech');
INSERT INTO department(division,role) VALUES ('HelpDesk', 'Configuration Tech');
INSERT INTO department(division,role) VALUES ('Network', 'System Administrator');
INSERT INTO department(division,role) VALUES ('Network', 'System Redundancy');
INSERT INTO department(division,role) VALUES ('Network', 'Network Administrator');
INSERT INTO department(division,role) VALUES ('Network', 'Network Engineer');
#CERTIFY
INSERT INTO certify(certification) VALUES ('CompTIA A+');
INSERT INTO certify(certification) VALUES ('CompTIA Network+');
INSERT INTO certify(certification) VALUES ('CompTIA Security+');
INSERT INTO certify(certification) VALUES ('MCSE');
INSERT INTO certify(certification) VALUES ('MCITP');
INSERT INTO certify(certification) VALUES ('MCTS');
INSERT INTO certify(certification) VALUES ('CompTIA Linux+');
INSERT INTO certify(certification) VALUES ('CCNP');
INSERT INTO certify(certification) VALUES ('CCNA');
INSERT INTO certify(certification) VALUES ('CCiE');
#EMPLOYEE    
INSERT INTO employee(first_name,middle_initial,last_name,employee_street,employee_city,employee_state,employee_zip, empschedule_id, department_id, certify_id)
VALUES ('Michael', 'J', 'Dolan', '4552 Wilmont Ave', 'Eldersburg', 'MD', 21784, 2, 1, 2); 
INSERT INTO employee(first_name,middle_initial,last_name,employee_street,employee_city,employee_state,employee_zip, empschedule_id, department_id, certify_id)
VALUES ('Greg', 'D', 'Brown', '6804 Hamlet Ct', 'Frederick', 'MD', 21098, 3, 2, 3); 
INSERT INTO employee(first_name,middle_initial,last_name,employee_street,employee_city,employee_state,employee_zip, empschedule_id, department_id, certify_id)
VALUES ('Jason','W', 'Brown', '22 Breadford Ave', 'Baltimore', 'MD', 21768, 3, 4, 1); 
INSERT INTO employee(first_name,middle_initial,last_name,employee_street,employee_city,employee_state,employee_zip, empschedule_id, department_id, certify_id)
VALUES ('Sean', 'P', 'Dolan', '8360 Court Ave', 'Frostburg', 'MD', 21532, 6, 1, 2); 
INSERT INTO employee(first_name,middle_initial,last_name,employee_street,employee_city,employee_state,employee_zip, empschedule_id, department_id, certify_id)
VALUES ('Andy','R', 'Leio', '435 Oriole Street', 'LaVale', 'MD', 21502, 2, 6, 5); 
INSERT INTO employee(first_name,middle_initial,last_name,employee_street,employee_city,employee_state,employee_zip, empschedule_id, department_id, certify_id)
VALUES ('Jackson', 'W', 'Hammock', '87 Fairview Street', 'Cumberland', 'MD', 21502, 3, 6, 5); 
#LOCATION
INSERT INTO location(building,room_number) VALUES ('Macnore',232);
INSERT INTO location(building,room_number) VALUES ('Macnore',123);
INSERT INTO location(building,room_number) VALUES ('Macnore',255);
INSERT INTO location(building,room_number) VALUES ('Truman',3);
INSERT INTO location(building,room_number) VALUES ('Morris',34);
INSERT INTO location(building,room_number) VALUES ('Stallworth',156);
INSERT INTO location(building,room_number) VALUES ('Truman',221);
#INVSCHEDULE
INSERT INTO invschedule(week,months) VALUES (1,1);
INSERT INTO invschedule(week,months) VALUES (2,1);
INSERT INTO invschedule(week,months) VALUES (3,1);
INSERT INTO invschedule(week,months) VALUES (4,1);
INSERT INTO invschedule(week,months) VALUES (5,1);
INSERT INTO invschedule(week,months) VALUES (1,2);
INSERT INTO invschedule(week,months) VALUES (2,2);
INSERT INTO invschedule(week,months) VALUES (3,2);
INSERT INTO invschedule(week,months) VALUES (4,2);
INSERT INTO invschedule(week,months) VALUES (5,2);
INSERT INTO invschedule(week,months) VALUES (1,3);
INSERT INTO invschedule(week,months) VALUES (2,3);
INSERT INTO invschedule(week,months) VALUES (3,3);
INSERT INTO invschedule(week,months) VALUES (4,3);
INSERT INTO invschedule(week,months) VALUES (5,3);
INSERT INTO invschedule(week,months) VALUES (1,4);
INSERT INTO invschedule(week,months) VALUES (2,4);
INSERT INTO invschedule(week,months) VALUES (3,4);
INSERT INTO invschedule(week,months) VALUES (4,4);
INSERT INTO invschedule(week,months) VALUES (5,4);
INSERT INTO invschedule(week,months) VALUES (1,5);
INSERT INTO invschedule(week,months) VALUES (2,5);
INSERT INTO invschedule(week,months) VALUES (3,5);
INSERT INTO invschedule(week,months) VALUES (4,5);
INSERT INTO invschedule(week,months) VALUES (5,5);
INSERT INTO invschedule(week,months) VALUES (1,6);
INSERT INTO invschedule(week,months) VALUES (2,6);
INSERT INTO invschedule(week,months) VALUES (3,6);
INSERT INTO invschedule(week,months) VALUES (4,6);
INSERT INTO invschedule(week,months) VALUES (5,6);
INSERT INTO invschedule(week,months) VALUES (1,7);
INSERT INTO invschedule(week,months) VALUES (2,7);
INSERT INTO invschedule(week,months) VALUES (3,7);
INSERT INTO invschedule(week,months) VALUES (4,7);
INSERT INTO invschedule(week,months) VALUES (5,7);
INSERT INTO invschedule(week,months) VALUES (1,8);
INSERT INTO invschedule(week,months) VALUES (2,8);
INSERT INTO invschedule(week,months) VALUES (3,8);
INSERT INTO invschedule(week,months) VALUES (4,8);
INSERT INTO invschedule(week,months) VALUES (5,8);
INSERT INTO invschedule(week,months) VALUES (1,9);
INSERT INTO invschedule(week,months) VALUES (2,9);
INSERT INTO invschedule(week,months) VALUES (3,9);
INSERT INTO invschedule(week,months) VALUES (4,9);
INSERT INTO invschedule(week,months) VALUES (5,9);
INSERT INTO invschedule(week,months) VALUES (1,10);
INSERT INTO invschedule(week,months) VALUES (2,10);
INSERT INTO invschedule(week,months) VALUES (3,10);
INSERT INTO invschedule(week,months) VALUES (4,10);
INSERT INTO invschedule(week,months) VALUES (5,11);
INSERT INTO invschedule(week,months) VALUES (1,11);
INSERT INTO invschedule(week,months) VALUES (2,11);
INSERT INTO invschedule(week,months) VALUES (3,11);
INSERT INTO invschedule(week,months) VALUES (4,11);
INSERT INTO invschedule(week,months) VALUES (5,11);
INSERT INTO invschedule(week,months) VALUES (1,12);
INSERT INTO invschedule(week,months) VALUES (2,12);
INSERT INTO invschedule(week,months) VALUES (3,12);
INSERT INTO invschedule(week,months) VALUES (4,12);
INSERT INTO invschedule(week,months) VALUES (5,12);
#INVENTORY
INSERT INTO inventory(date_purchased,date_implemented,model,serial_number,company,type, location_id, invschedule_id, product_description,add_notes) 
VALUES ('2010-3-23','2010-3-23','DF56D33','RRFFR44324','HP','Printer', 3, 5, 'Color with networking','will have ted thomas call on the 5/15/16');
INSERT INTO inventory(date_purchased,date_implemented,model,serial_number,company,type, location_id, invschedule_id, product_description,add_notes) 
VALUES ('2014-6-14','2014-7-1','FC34224','TRE44533324','Cisco','Router', 2, 6, 'Allows access to back room','respond later');
INSERT INTO inventory(date_purchased,date_implemented,model,serial_number,company,type, location_id, invschedule_id, product_description,add_notes) 
VALUES ('2014-6-14','2014-7-1','CD343334','REWRFE333322','Dell','Printer', 1, 6, 'BW with networking','Nancy Bowers 4103133057 3rd party service call');
INSERT INTO inventory(date_purchased,date_implemented,model,serial_number,company,type, location_id, invschedule_id, product_description,add_notes) 
VALUES ('2015-3-6','2015-4-23','WE338374','YTR6566544','Dell','Printer', 4, 2, 'BW local','for metro use');
INSERT INTO inventory(date_purchased,date_implemented,model,serial_number,company,type, location_id, invschedule_id, product_description,add_notes) 
VALUES ('2015-3-6','2015-4-23','YU3478484','OP554432224','HP','Laptop', 3, 4, 'Standard Config','top down config');
INSERT INTO inventory(date_purchased,date_implemented,model,serial_number,company,type, location_id, invschedule_id, product_description,add_notes) 
VALUES ('2015-3-6','2015-4-23','IO47754','WERWEEF4445','Microsoft','Software', 6, 1, 'Proprietary for backend accouting','further work for micro');
#WORKS
INSERT INTO works(employee_id,inventory_id,date_assigned,date_complete,description,notes) 
VALUES (5,3,'2015-1-13','2015-1-14','Modification made to back', 'micro will be needed');
INSERT INTO works(employee_id,inventory_id,date_assigned,date_complete,description,notes) 
VALUES (4,4,'2015-2-1','2015-2-2','Update complete', 'transfer belt starting to go');
INSERT INTO works(employee_id,inventory_id,date_assigned,date_complete,description,notes) 
VALUES (2,6,'2015-2-1','2015-2-1','Called company, mod firmware', 'may have overheating issue');
INSERT INTO works(employee_id,inventory_id,date_assigned,date_complete,description,notes) 
VALUES (6,2,'2015-3-13','2015-3-13','Update complete for this year', 'micro will be needed');
INSERT INTO works(employee_id,inventory_id,date_assigned,date_complete,description,notes) 
VALUES (1,1,'2015-3-23','2010-3-23','Waiting for part 443223', 'micro will be needed');
INSERT INTO works(employee_id,inventory_id,date_assigned,date_complete,description,notes) 
VALUES (6,5,'2015-4-13','2014-6-14','Waiting for call back from company', 'micro will be needed');