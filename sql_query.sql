1
select name from passengers join pass_ticketed
 on passengers.passid=pass_ticketed.passid where pass_ticketed.fltno=3
  and pass_ticketed.date='4-1'
 
2
select name from passengers join pass_ticketed
 on passengers.passid=pass_ticketed.passid where pass_ticketed.fltno=5
  and pass_ticketed.date='4-2'

3


4
select name,count(name) from passengers join pass_ticketed
 on passengers.passid=pass_ticketed.passid GROUP BY passengers.passid
HAVING COUNT( * ) >1

5
SELECT name
FROM passengers
JOIN pass_ticketed ON passengers.passid = pass_ticketed.passid
GROUP BY passengers.passid
HAVING COUNT( passengers.passid )>1


6
select distinct flights.fltno from flights join aircraft_assignments on
 flights.fltno=aircraft_assignments.fltno where aircraft_assignments.acno='N173WY'

7
select name from pilots 
join pilot_assignments on pilots.pilotid=pilot_assignments.pilotid
where pilot_assignments.date = '4-1'

8
select name from pilots 
join pilot_assignments on pilots.pilotid=pilot_assignments.pilotid
where pilot_assignments.date = '4-1' or pilot_assignments.date = '4-2'

9

10

11
SELECT distinct fltno from flights where destination='DFW'

12
SELECT  fltno from flights where origin='LAX' or destination='LAX'

13
select distinct origin,destination from flights join passengers 
join pass_ticketed on flights.fltno=pass_ticketed.fltno 
and passengers.passid=pass_ticketed.passid 
where passengers.name='Duck, Donald' or passengers.name='Wayne, John'

14
SELECT distinct fltno,origin from flights

15
select distinct type from aircraft join aircraft_assignments
 join pilot_assignments on aircraft.acno=aircraft_assignments.acno and
  aircraft_assignments.fltno=pilot_assignments.fltno where 
pilot_assignments.pilotid=1030

16



18
select distinct name,passengers.passid from passengers join pass_ticketed
 join pilot_assignments on passengers.passid=pass_ticketed.passid
 and pilot_assignments.fltno=pass_ticketed.fltno where pilot_assignments.pilotid=1030
 
19
 SELECT name
FROM pilots
JOIN pilot_assignments
JOIN aircraft_assignments ON pilot_assignments.fltno = aircraft_assignments.fltno
AND pilot_assignments.pilotid = pilots.pilotid
WHERE aircraft_assignments.acno = 'N35A'
