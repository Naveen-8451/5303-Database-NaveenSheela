### Title: Online Carpool System.

### Names: Naveen Kumar Sheela, Ankur Patel.


#### Question 1:
Show all users.

SQL:
```
SELECT * FROM `user_information`
```
#### Answer:
```
user_id	login_name	password	first_name	last_name	status	contact_phoneno	contact_emailid	address_id	dept_id	faculty_position	student_major	student_status	optional_info_id	
1	Aaron	12345	Aaron	Jones	STUDENT COMMUTER	1-(305)318-2252	ajones9@cam.ac.uk	1	0		Accounting	senior	1
2	Adam	12345	Adam	Freeman	FACULTY	1-(214)540-2142	afreeman2j@yellowpages.com	2	4	Cleaner			2
3	Andrea	12345	Andrea	Mitchell	STAFF	1-(651)461-6191	amitchell27@china.com.cn	3	3	Credit			3
4	Andrew	12345	Andrew	Ruiz	STAFF	1-(615)924-8525	aruiz1x@bloglines.com	4	2	HR Analyst			4
5	Angela	12345	Angela	Harvey	STUDENT RESIDENT	1-(808)232-3233	aharveyu@umich.edu	5	0		Law	freshman	5
6	Angela	12345	Angela	Hughes	STAFF	1-(915)282-2319	ahughes1o@sciencedaily.com	6	2	Clerk			6
7	Annie	12345	Annie	Hanson	STAFF	1-(720)987-3487	ahanson1u@washingtonpost.com	7	2	HR Analyst			7
8	Arthur	12345	Arthur	Owens	STAFF	1-(260)814-5328	aowens1p@mozilla.com	8	2	Clerk			8
9	Ashley	12345	Ashley	Reyes	STAFF	1-(618)734-7014	areyes1i@acquirethisname.com	9	1	Admin			9
10	Barbara	12345	Barbara	Perez	STUDENT RESIDENT	1-(805)407-4457	bperez6@smh.com.au	10	0		Accounting	sophomore	10
11	Benjamin12345	Benjamin	Martin	STAFF	1-(404)248-0748	bmartin1m@t-online.de	11	2	Manager			11
12	Beverly	12345	Beverly	Brooks	STUDENT RESIDENT	1-(269)333-4055	bbrooksm@flavors.me	12	0		Computer Science	junior	12
13	Beverly	12345	Beverly	Watson	STAFF	1-(772)347-4371	bwatson1f@facebook.com	13	1	Support			13
14	Beverly	12345	Beverly	Cunningham	STAFF	1-(813)905-8928	bcunningham26@weibo.com	14	3	Credit			14
15	Brandon	12345	Brandon	Mccoy	STUDENT COMMUTER	1-(517)954-4675	bmccoy19@canalblog.com	15	0		Agriculture	freshman	15
16	Bruce	12345	Bruce	Carroll	STUDENT COMMUTER	1-(405)331-1093	bcarrollw@chicagotribune.com	16	0		Law	sophomore	16
17	Catherine12345	Catherine	Freeman	STAFF	1-(617)660-6356	cfreeman1h@zimbio.com	17	1	Support			17
18	Dennis	12345	Dennis	Knight	STUDENT COMMUTER	1-(920)710-9362	dknighto@go.com	18	0		Computer Science	senior	18
19	Diane	12345	Diane	Brown	STUDENT COMMUTER	1-(315)105-2761	dbrowne@tmall.com	19	0		Computer Science	freshman	19
20	Donald	12345	Donald	Howell	STUDENT RESIDENT	1-(610)809-5766	dhowell7@ebay.co.uk	20	0		Accounting	junior	20
21	Donald	12345	Donald	Murray	STUDENT COMMUTER	1-(772)929-7440	dmurray15@europa.eu	21	0		Law	graduate	21
22	Donald	12345	Donald	Smith	STAFF	1-(303)791-6431	dsmith1r@tinypic.com	22	2	Clerk			22
23	Donna	12345	Donna	Wallace	STAFF	1-(913)476-7492	dwallace1q@ucsd.edu	23	2	Clerk			23
24	Earl	12345	Earl	Perez	STAFF	1-(212)875-1109	eperez21@myspace.com	24	3	Payrole			24
25	Earl	12345	Earl	Bell	STAFF	1-(770)393-0059	ebell23@ameblo.jp	25	3	Payrole			25
26	Emily	12345	Emily	Burton	STUDENT RESIDENT	1-(209)798-8133	eburton2@dailymail.co.uk	26	0		Accounting	freshman	26
27	Eric	12345	Eric	Stevens	STUDENT RESIDENT	1-(213)813-3773	estevens12@moonfruit.com	27	0		Law	junior	27
28	Ernest	12345	Ernest	Garza	STAFF	1-(480)485-2724	egarza1z@blogger.com	28	3	Payrole			28
29	Ernest	12345	Ernest	Hayes	STAFF	1-(209)197-0172	ehayes2b@umich.edu	29	3	Manager			29
30	Gloria	12345	Gloria	Scott	STUDENT COMMUTER	1-(574)288-6923	gscotts@cloudflare.com	30	0		Law	freshman	30
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
#####Get smoker count
SQL:
```

SELECT COUNT(`optional_info_id`) AS `total`, `sex`, `smoker` FROM `user_optional_info` WHERE `smoker` = 'YES' GROUP BY `sex`
```
#####Get nonsmoker count
SQL:
```
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
#####day_id = Friday
SQL:
```
SELECT  `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `trip_detail` f WHERE  `u`.`user_id` = `f`.`user_id`  AND `f`.`days_id` = 5


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
#####List department that has the least number of commuters
SQL:
```
SELECT  COUNT( `f`.`trip_user_detail_id`) AS `trip`,`d`.`dept_name` FROM  `trip_user_details` f 
INNER JOIN `user_information` u  ON  `u`.`user_id` = `f`.`user_id`  
INNER JOIN `department` d  ON  `u`.`dept_id` = `d`.`dept_id`  
GROUP BY`d`.`dept_name` ORDER BY `trip` ASC
```
#### Question 18:
#####Find the cheapest / most expensive trips
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
