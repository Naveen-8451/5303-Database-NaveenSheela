
### Title : Sql Flight Assignment
### Naveen Kumar Sheela

### Question 1
Print a passenger list for flight 3 on 4-1

SQL:
```
select name from passengers join pass_ticketed
 on passengers.passid=pass_ticketed.passid where pass_ticketed.fltno=3
  and pass_ticketed.date='4-1'
  
```
### Answer:
```

SELECT name
FROM pilots
JOIN pilot_assignments
JOIN aircraft_assignments ON pilot_assignments.fltno = aircraft_assignments.fltno
AND pilot_assignments.pilotid = pilots.pilotid
WHERE aircraft_assignments.acno = 'N35A'



SQL:
```
### Question 2
Print a passenger list for flight 5 on 4-2

select name from passengers join pass_ticketed
 on passengers.passid=pass_ticketed.passid where pass_ticketed.fltno=5
  and pass_ticketed.date='4-2'
```
### Answer:

SQL:
```
### Question 3
Print a list of all overbooked flights.
```
### Answer:


SQL:
```
### Question 4
Print a list of passengers with more than one ticket.

select name,count(name) from passengers join pass_ticketed
 on passengers.passid=pass_ticketed.passid GROUP BY passengers.passid
HAVING COUNT( * ) >1
```
### Answer:

SQL:
```
### Question 5
Print a list of passengers with more than one ticket on the same day.

SELECT name
FROM passengers
JOIN pass_ticketed ON passengers.passid = pass_ticketed.passid
GROUP BY passengers.passid
HAVING COUNT( passengers.passid )>1
```
### Answer:

SQL:
```
### Question 6
Print a list of flights that use aircraft N173WY.

select distinct flights.fltno from flights join aircraft_assignments on
 flights.fltno=aircraft_assignments.fltno where aircraft_assignments.acno='N173WY'
```
### Answer:

SQL:
```
### Question 7
Print a list of pilots who fly on April 1.

select name from pilots 
join pilot_assignments on pilots.pilotid=pilot_assignments.pilotid
where pilot_assignments.date = '4-1'
```
### Answer:

SQL:
```
### Question 8
Print a list of pilots who fly on both days.

select name from pilots 
join pilot_assignments on pilots.pilotid=pilot_assignments.pilotid
where pilot_assignments.date = '4-1' or pilot_assignments.date = '4-2'
```
### Answer:

SQL:
```
### Question 9
Print a list of pilots who have two flights on the same day.
```
### Answer:

SQL:
```
### Question 10
Print a List of flights that do not have a complete crew.
```
### Answer:

SQL:
```
### Question 11
Print of list of flights where destination is DFW.

SELECT distinct fltno from flights where destination='DFW'
```
### Answer:

SQL:
```
### Question 12
Print a list of flights where origin or destination is LAX

SELECT  fltno from flights where origin='LAX' or destination='LAX'
```
### Answer:

SQL:
```
### Question 13
Print the origin and destination of flights with passenger equals Duck, Donald or Wayne, John.

select distinct origin,destination from flights join passengers 
join pass_ticketed on flights.fltno=pass_ticketed.fltno 
and passengers.passid=pass_ticketed.passid 
where passengers.name='Duck, Donald' or passengers.name='Wayne, John'
```
### Answer:

SQL:
```
### Question 14
Print a list of flight numbers and origins.

SELECT distinct fltno,origin from flights
```
### Answer:

SQL:
```
### Question 15
Print a list of aircraft types from equipment assigned where pilot number=1030.

select distinct type from aircraft join aircraft_assignments
 join pilot_assignments on aircraft.acno=aircraft_assignments.acno and
  aircraft_assignments.fltno=pilot_assignments.fltno where 
pilot_assignments.pilotid=1030
```
### Answer:

SQL:
```
### Question 16
Print a list of pilots who fly with at least two other pilots.
```
### Answer:

SQL:
```
### Question 17
Print a list of pilots who fly only one type of plane.

select name from pilots join pilot_assignments
 on pilots.pilotid=pilot_assignments.pilotid
  group by pilots.name having count(pilot_assignments.pilotid)=1
```
### Answer:

SQL:
```
### Question 18
Print a list of passengers booked on flights assigned to pilot=1030.

select distinct name,passengers.passid from passengers 
join pass_ticketed join pilot_assignments on passengers.passid=
pass_ticketed.passid and pass_ticketed.fltno = pilot_assignments.fltno 
where pilot_assignments.pilotid=1030
```
### Answer:

SQL:
``` 
### Question 19
Print a list of pilots assigned to fly plane=N35A.

SELECT name
FROM pilots
JOIN pilot_assignments
JOIN aircraft_assignments ON pilot_assignments.fltno = aircraft_assignments.fltno
AND pilot_assignments.pilotid = pilots.pilotid
WHERE aircraft_assignments.acno = 'N35A'
```
### Answer:



