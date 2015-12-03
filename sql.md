### Title: Online Carpool System.

### Names: Naveen Kumar Sheela, Ankur Patel.


#### Question 1:
Show all users.

SQL:
```
SELECT * FROM `user_information`
```
#### Question 2: 
Show all users that are student and own a car
SQL:
```
SELECT `u`.*, `c`.* FROM `user_information` u , `car_information` c WHERE  `u`.`user_id` = `c`.`user_id` AND `u`.`status` LIKE '%student%' ;
```
#### Question 3:
Find the users that logged the most trips
SQL:
```
SELECT COUNT(`f`.`trip_user_detail_id`) AS `total_trip`, `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `trip_user_details` f WHERE `u`.`user_id` = `f`.`user_id` GROUP BY `u`.`user_id`ORDER BY `total_trip` DESC 
```
#### Question 4:
Calculate the longest trip
SQL
```
```
#### Question 5:
Find average cost of a trip
SQL:
```
SELECT `trip_id`, `max_compensation` / `distant` AS `Dollar cost per mile` FROM `trip_detail`

```

#### Question 6:
Find user that has the best feedback
SQL:
```
SELECT COUNT(`f`.`feedback_id`) AS `best rating`, `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `user_feedback` f WHERE `u`.`user_id` = `f`.`user_id` GROUP BY `u`.`user_id`ORDER BY `best rating` DESC 
```
#### Question 7:
Show all feedback for each user
SQL:
```
SELECT `u`.`first_name`, `u`.`last_name`,`f`.`notes` FROM `user_information` u , `user_feedback` f WHERE  `u`.`user_id` = `f`.`user_id` 
```
#### Question 8:
Show all feedback for each user within last month
SQL:
```
SELECT `f`.`date` , `u`.`first_name`, `u`.`last_name`,`f`.`notes` FROM `user_information` u , `user_feedback` f WHERE  `u`.`user_id` = `f`.`user_id`  AND MONTH(`f`.`date` ) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)
```
#### Question 9:
Find the user that has the most time in route (total and monthly)
SQL
```
```
#### Question 10:
Show all different type of car
SQL:
```
SELECT `manufacturer`, `model`, `year` FROM `car_information` GROUP BY `model`
```
#### Question 11:
11 : Find the ratio of men/smoker to women/smoker
SQL:
```
- Get smoker count
SELECT COUNT(`optional_info_id`) AS `total`, `sex`, `smoker` FROM `user_optional_info` WHERE `smoker` = 'YES' GROUP BY `sex`

- Get nonsmoker count
SELECT COUNT(`optional_info_id`) AS `total`, `sex`, `smoker` FROM `user_optional_info` WHERE `smoker` = 'NO' GROUP BY `sex`

SELECT * FROM `user_optional_info` WHERE `smoker` = “YES” GROUP BY `sex`
```
#### Question 12:
Find all commuter tht ride with someone in the same major
SQL:
```
SELECT  `u`.`first_name`,`u`.`last_name`,`u`.`student_major` FROM  `user_information` u , `trip_user_details` f  WHERE  `u`.`user_id` = `f`.`user_id`  
ORDER BY `u`.`student_major` DESC
```
#### Question 13:
List the person who gives most feedback
SQL:
```
SELECT  COUNT(`f`.`feedback_id`) AS `total_feedback`, `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `user_feedback` f WHERE  `u`.`user_id` = `f`.`user_id`  GROUP BY `u`.`user_id`
```
#### Question 14:
Find all commuters who offer rides on Friday
SQL:
```
SELECT  `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `trip_detail` f WHERE  `u`.`user_id` = `f`.`user_id`  AND `f`.`days_id` = 5

*day_id = Friday
```
#### Question 15:

#####Add new user

SQL:
```
INSERT INTO `user_information` (`user_id`, `login_name`, `password`, `first_name`, `last_name`, `status`, `contact_phoneno`, `contact_emailid`, `address_id`, `dept_id`, `faculty_position`, `student_major`, `student_status`, `optional_info_id`) VALUES (NULL, 'joe', '123', 'Joe', 'Han', 'STUDENT RESIDENT', '1-2234-2453', 'johan@gmail.com', '11', '0', NULL, 'Accounting', 'senior', '11');
```
#### Question 16:

#####Add a new trip
SQL:
```
INSERT INTO `bikinz_test`.`trip_details` (`trip_id`, `trip_type`, `time_frame_for_daily`, `days_info_id`, `flexible`, `flexible_minutes`, `date`, `reason`, `from_address_id`, `to_address_id`, `departure_time`, `ride`, `car_id`, `no_passengers`, `min_compensation`, `max_compensation`, `notes`) VALUES (NULL, 'NON-DAILY', 'SEMESTER', '2', '1', '20', '2015-12-02', 'Work', '2', '1', '06:20:00', 'OFFERED', '2', '4', '4', '15', 'Non smoking');
```
#### Question 17:
List department that has the least number of commuters
SQL:
```
SELECT  COUNT( `f`.`trip_user_detail_id`) AS `trip`,`d`.`dept_name` FROM  `trip_user_details` f 
INNER JOIN `user_information` u  ON  `u`.`user_id` = `f`.`user_id`  
INNER JOIN `department` d  ON  `u`.`dept_id` = `d`.`dept_id`  
GROUP BY`d`.`dept_name` ORDER BY `trip` ASC
```
#### Question 18:
Find the cheapest / most expensive trips
##### Cheapest by days_id
SQL
```
SELECT `trip_id` FROM `trip_detail` GROUP BY `days_id`
ORDER BY `min_compensation`  ASC LIMIT 1
```
##### Expensive by days_id
SQL
```
SELECT `trip_id` FROM `trip_detail` GROUP BY `days_id`
ORDER BY `min_compensation`  DESC LIMIT 1
```
