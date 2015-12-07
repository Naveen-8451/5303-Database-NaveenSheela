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
#### Answer:
```
user_id	login_name	password	first_name	last_name	status	contact_phoneno	contact_emailid	address_id	dept_id	faculty_position	student_major	student_status	optional_info_id	car_id	user_id	manufacturer	year	model	
1	Aaron	12345	Aaron	Jones	STUDENT COMMUTER	1-(305)318-2252	ajones9@cam.ac.uk	1	0		Accounting	senior	1	1	1	Volkswagen	1998	Golf
5	Angela	12345	Angela	Harvey	STUDENT RESIDENT	1-(808)232-3233	aharveyu@umich.edu	5	0		Law	freshman	5	4	5	Toyota	2014	Prius
12	Beverly	12345	Beverly	Brooks	STUDENT RESIDENT	1-(269)333-4055	bbrooksm@flavors.me	12	0		Computer Science	junior	12	8	12	Honda	2005	Accord
15	Brandon	12345	Brandon	Mccoy	STUDENT COMMUTER	1-(517)954-4675	bmccoy19@canalblog.com	15	0		Agriculture	freshman	15	10	15	Volkswagen	2014	Jetta
16	Bruce	12345	Bruce	Carroll	STUDENT COMMUTER	1-(405)331-1093	bcarrollw@chicagotribune.com	16	0		Law	sophomore	16	11	16	Volkswagen	2003	Toureq
19	Diane	12345	Diane	Brown	STUDENT COMMUTER	1-(315)105-2761	dbrowne@tmall.com	19	0		Computer Science	freshman	19	12	19	Volkswagen	1995	Toureq
21	Donald	12345	Donald	Murray	STUDENT COMMUTER	1-(772)929-7440	dmurray15@europa.eu	21	0		Law	graduate	21	13	21	Mazda	1998	3
32	Harry	12345	Harry	Anderson	STUDENT RESIDENT	1-(406)595-9394	handersonp@phpbb.com	32	0		Computer Science	senior	32	19	32	Volkswagen	1998	Jetta
35	Janet	12345	Janet	Perez	STUDENT COMMUTER	1-(757)726-6324	jperez17@yahoo.com	35	0		Law	graduate	35	21	35	Mazda	2012	2
42	Jimmy	12345	Jimmy	Bishop	STUDENT RESIDENT	1-(518)264-9705	jbishop1a@feedburner.com	42	0		Agriculture	sophomore	42	25	42	Mazda	1998	2
56	Larry	12345	Larry	Foster	STUDENT COMMUTER	1-(920)991-2978	lfosterv@myspace.com	56	0		Law	freshman	56	33	56	Toyota	1998	Camry
59	Lisa	12345	Lisa	Bradley	STUDENT RESIDENT	1-(256)543-2187	lbradley16@ftc.gov	59	0		Law	graduate	59	34	59	Volkswagen	2005	Toureq
62	Louise	12345	Louise	Jacobs	STUDENT COMMUTER	1-(773)907-1727	ljacobst@lulu.com	62	0		Law	freshman	62	36	62	Volkswagen	2014	Golf
68	Michelle	12345	Michelle	Moreno	STUDENT RESIDENT	1-(520)726-8009	mmorenoa@shop-pro.jp	68	0		Accounting	senior	68	39	68	Toyota	2014	Prius
73	Patricia	12345	Patricia	Fuller	STUDENT COMMUTER	1-(434)172-2056	pfullerq@indiegogo.com	73	0		Computer Science	graduate	73	42	73	Mazda	2012	2
75	Philip	12345	Philip	Gonzales	STUDENT RESIDENT	1-(817)489-4481	pgonzalesg@tinypic.com	75	0		Computer Science	freshman	75	43	75	Honda	2014	Civic
79	Ralph	12345	Ralph	Thompson	STUDENT RESIDENT	1-(626)691-9969	rthompson1c@tuttocitta.it	79	0		Agriculture	senior	79	45	79	Toyota	1995	Camry
82	Robin	12345	Robin	Wallace	STUDENT RESIDENT	1-(828)258-8097	rwallace0@prlog.org	82	0		Accounting	freshman	82	47	82	Honda	2005	Accord
88	Steve	12345	Steve	Henry	STUDENT RESIDENT	1-(510)430-0632	shenryc@hhs.gov	88	0		Computer Science	freshman	88	50	88	Mazda	2003	6
91	Theresa	12345	Theresa	Martinez	STUDENT RESIDENT	1-(281)294-9889	tmartinezl@ow.ly	91	0		Computer Science	junior	91	51	91	Mazda	1995	2
92	Theresa	12345	Theresa	Rivera	STUDENT RESIDENT	1-(407)389-9160	triverax@patch.com	92	0		Law	sophomore	92	52	92	Honda	2012	Civic
95	Virginia	12345	Virginia	Cooper	STUDENT COMMUTER	1-(718)153-6177	vcooper1b@myspace.com	95	0		Agriculture	junior	95	54	95	Toyota	1998	Camry
96	Walter	12345	Walter	Morrison	STUDENT RESIDENT	1-(612)124-3532	wmorrisonf@noaa.gov	96	0		Computer Science	freshman	96	55	96	Toyota	2005	Corolla
99	Wayne	12345	Wayne	Cook	STUDENT COMMUTER	1-(407)408-5802	wcook11@springer.com	99	0		Law	junior	99	56	99	Honda	2012	Accord
```

#### Question 3:
Find the users that logged the most trips
SQL:
```
SELECT COUNT(`f`.`trip_user_detail_id`) AS `total_trip`, `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `trip_user_details` f WHERE `u`.`user_id` = `f`.`user_id` GROUP BY `u`.`user_id`ORDER BY `total_trip` DESC 
```
#### Answer:
```
total_trip	first_name	last_name	
13	Eric	Stevens
11	Ashley	Reyes
9	Kathryn	Hunt
7	Angela	Hughes
7	Donald	Smith
7	Dennis	Knight
6	Beverly	Watson
6	Earl	Perez
5	Brandon	Mccoy
5	Juan	Flores
5	Karen	Weaver
2	Andrew	Ruiz
2	Janet	Weaver
2	John	Fowler
1	Harold	Ellis
1	Howard	Stanley
1	Jeffrey	Johnson
1	Jimmy	Bishop
```
#### Question 4:
Calculate the longest trip
SQL
```
we do not have data to caluclate distance between "source to destination"
```
#### Question 5:
Find average cost of a trip
SQL:
```
SELECT `trip_id`, `max_compensation` / `distant` AS `Dollar cost per mile` FROM `trip_detail`

```
#### Answer:
```
trip_id	Dollar cost per mile	
1		0.75
2		0.47619047619047616
3		0.5454545454545454
4		0.6666666666666666
5		2.5
6		0.9166666666666666
7		1
8		0.5
9		0.5714285714285714
10		0.5454545454545454
11		0.4
12		0.6666666666666666
13		2.5
14		0.9166666666666666
15		0.55
16		0.7142857142857143
17		0.45454545454545453
18		0.4
19		0.45454545454545453
20		0.4
21		1.2
22		1.6666666666666667
23		1.25
24		0.5238095238095238
25		0.6818181818181818
26		0.3333333333333333
27		0.6
28		0.7142857142857143
29		0.45454545454545453
30		0.4
```
#### Question 6:
Find user that has the best feedback
SQL:
```
SELECT COUNT(`f`.`feedback_id`) AS `best rating`, `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `user_feedback` f WHERE `u`.`user_id` = `f`.`user_id` GROUP BY `u`.`user_id`ORDER BY `best rating` DESC 
```
#### Answer:
```
best rating	first_name	last_name	
3			Walter	Morrison
2			Larry	Foster
1			Steve	Henry
1			Diane	Brown
1			Ralph	Thompson
1			Earl	Bell
1			Ashley	Reyes
1			Sarah	Campbell
1			Harold	Ellis
1			Aaron	Jones
1			Karen	Weaver
1			John	Fowler
1			Michelle	Moreno
1			Lisa	Bradley
1			Theresa	Martinez
1			Bruce	Carroll
1			Benjamin	Martin
1			Jason	Riley
1			Janet	Weaver
1			Phillip	Wells
1			Nicole	Gonzales
1			Wayne	Cook
1			Angela	Hughes
1			Ernest	Garza
1			Joyce	Elliott
1			Martha	George
```
#### Question 7:
Show all feedback for each user
SQL:
```
SELECT `u`.`first_name`, `u`.`last_name`,`f`.`notes` FROM `user_information` u , `user_feedback` f WHERE  `u`.`user_id` = `f`.`user_id` 
```
#### Answer:
```
first_name	last_name		notes	
Diane		Brown		Driver nor friendly
Ralph		Thompson	Driver nor friendly
Ashley		Reyes		I'll give it 3/5 rating
Harold		Ellis		I'll give it 3/5 rating
Karen		Weaver		I'll give it 3/5 rating
Michelle	Moreno		I'll give it 3/5 rating
Theresa		Martinez	I'll give it 3/5 rating
Benjamin	Martin		Love the concept !
Janet		Weaver		Love the concept !
Nicole		Gonzales	Love the concept !
Walter		Morrison	Love the concept !
Angela		Hughes		Need some improvement on support
Ernest		Garza		Need some improvement on support
Joyce		Elliott		Need some improvement on support
Martha		George		Need some improvement on support
Steve		Henry		Need some improvement on support
Larry		Foster		Nice
Earl		Bell		Smelly car
Sarah		Campbell	Smelly car
Aaron		Jones		Very good !
John		Fowler		Very good !
Lisa		Bradley		Very good !
Bruce		Carroll		Will do it again
Jason		Riley		Will do it again
Phillip		Wells		Will do it again
Wayne		Cook		Will do it again
Walter		Morrison	Love the concept !
Walter		Morrison	Love the concept !
Larry		Foster		Nice
```
#### Question 8:
Show all feedback for each user within last month
SQL:
```
SELECT `f`.`date` , `u`.`first_name`, `u`.`last_name`,`f`.`notes` FROM `user_information` u , `user_feedback` f WHERE  `u`.`user_id` = `f`.`user_id`  AND MONTH(`f`.`date` ) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)
```
#### Answer:
```
date		first_name	last_name	notes	
2015-11-23	Ralph		Thompson	Driver nor friendly
2015-11-13	Harold		Ellis		I'll give it 3/5 rating
2015-11-23	Karen		Weaver		I'll give it 3/5 rating
2015-11-11	Michelle	Moreno		I'll give it 3/5 rating
2015-11-23	Theresa		Martinez	I'll give it 3/5 rating
2015-11-11	Benjamin	Martin		Love the concept !
2015-11-23	Nicole		Gonzales	Love the concept !
2015-11-18	Angela		Hughes		Need some improvement on support
2015-11-13	Ernest		Garza		Need some improvement on support
2015-11-23	Joyce		Elliott		Need some improvement on support
2015-11-02	Martha		George		Need some improvement on support
2015-11-23	Steve		Henry		Need some improvement on support
2015-11-23	Larry		Foster		Nice
2015-11-11	Earl		Bell		Smelly car
2015-11-11	Aaron		Jones		Very good !
2015-11-11	John		Fowler		Very good !
2015-11-13	Bruce		Carroll		Will do it again
2015-11-23	Jason		Riley		Will do it again
2015-11-23	Phillip		Wells		Will do it again
2015-11-23	Wayne		Cook		Will do it again
2015-11-23	Larry		Foster		Nice
```
#### Question 9:
Find the user that has the most time in route (total and monthly)
SQL
```
we do not have data to caluclate distance like ("source to destination")
we can't calculate the user who travel most in route.
it is related to distance table.. with Question 4.
```
#### Question 10:
Show all different type of car
SQL:
```
SELECT `manufacturer`, `model`, `year` FROM `car_information` GROUP BY `model`
```
#### Answer:
```
manufacturer	model	year	
Mazda			2		2014
Mazda			3		1998
Mazda			5		2005
Mazda			6		2012
Honda			Accord	1998
Toyota			Camry	2003
Honda			Civic	2005
Toyota			Corolla	1995
Volkswagen		Golf	1998
Volkswagen		Jetta	2012
Toyota			Prius	2014
Volkswagen		Toureq	2003
```

#### Question 11:
11 : Find the ratio of men/smoker to women/smoker

#####Get smoker count
SQL:
```
SELECT COUNT(`optional_info_id`) AS `total`, `sex`, `smoker` FROM `user_optional_info` WHERE `smoker` = 'YES' GROUP BY `sex`
```
#### Answer:
```
total	sex	smoker	
20		M	YES
30		F	YES
```

#####Get nonsmoker count
SQL:
```
SELECT COUNT(`optional_info_id`) AS `total`, `sex`, `smoker` FROM `user_optional_info` WHERE `smoker` = 'NO' GROUP BY `sex`

SELECT * FROM `user_optional_info` WHERE `smoker` = “YES” GROUP BY `sex`
```
#### Answer:
```
total	sex	smoker	
30		M	NO
20		F	NO
```
#### Question 12:
Find all commuter that ride with someone in the same major
SQL:
```
SELECT  `u`.`first_name`,`u`.`last_name`,`u`.`student_major` FROM  `user_information` u , `trip_user_details` f  WHERE  `u`.`user_id` = `f`.`user_id`  
ORDER BY `u`.`student_major` DESC
```
#### Answer:
```
first_name	last_name	student_major	
Eric		Stevens		Law
Dennis		Knight		Computer Science
Brandon		Mccoy		Agriculture
Jimmy		Bishop		Agriculture
Juan		Flores		Accounting
```
#### Question 13:
List the person who gives most feedback
SQL:
```
SELECT  COUNT(`f`.`feedback_id`) AS `total_feedback`, `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `user_feedback` f WHERE  `u`.`user_id` = `f`.`user_id`  GROUP BY `u`.`user_id`
```
#### Answer:
```
total_feedback	first_name	last_name	
	1				Aaron	Jones
	1				Angela	Hughes
	1				Ashley	Reyes
	1				BenjaminMartin
	1				Bruce	Carroll
	1				Diane	Brown
	1				Earl	Bell
	1				Ernest	Garza
	1				Harold	Ellis
	1				Janet	Weaver
	1				Jason	Riley
	1				John	Fowler
	1				Joyce	Elliott
	1				Karen	Weaver
	2				Larry	Foster
	1				Lisa	Bradley
	1				Martha	George
	1				Michelle	Moreno
	1				Nicole	Gonzales
	1				Phillip	Wells
	1				Ralph	Thompson
	1				Sarah	Campbell
	1				Steve	Henry
	1				Theresa	Martinez
	3				Walter	Morrison
	1				Wayne	Cook
```
#### Question 14:
Find all commuters who offer rides on Friday 
#####day_id = Friday

SQL:
```
SELECT  `u`.`first_name`, `u`.`last_name` FROM `user_information` u , `trip_detail` f WHERE  `u`.`user_id` = `f`.`user_id`  AND `f`.`days_id` = 5

```
#### Answer:
```
first_name	last_name	
Eric		Stevens
Ernest		Garza
Ernest		Hayes
Gloria		Scott
Juan		Flores
Judy		Wilson
Karen		Weaver
Karen		Morgan
Katherine	Tucker
Kathryn		Hunt
Kimberly	Hall
Larry		Foster
Angela		Hughes
Annie		Hanson
Arthur		Owens
Ashley		Reyes
Barbara		Perez
Benjamin	Martin
Beverly		Brooks
Beverly		Watson
Beverly		Cunningham
Brandon		Mccoy
Bruce		Carroll
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
#### Answer:
```
rip	dept_name	
10	General
14	Finance
17	Information Technology
19	Human Resources
```
#### Question 18:
#####Find the cheapest / most expensive trips
##### Cheapest by days_id
SQL
```
SELECT `trip_id` FROM `trip_detail` GROUP BY `days_id`
ORDER BY `min_compensation`  ASC LIMIT 1
```
#### Answer:
```
trip_id	
139
```
##### Expensive by days_id
SQL
```
SELECT `trip_id` FROM `trip_detail` GROUP BY `days_id`
ORDER BY `min_compensation`  DESC LIMIT 1
```
#### Answer:
```
trip_id	
113
```
