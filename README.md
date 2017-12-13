# FinalProject-CSC583

## Nonfunctional requirements
#### Abstract

The following is the evaluation criteria that used to find the a perfect framework for building sign-in system. The evaluation has a score range between 0 (the lowest) to 5 (the highest). Finally, I selected Xampp to run my website after I evaluated all the possible framework.

Technology | MEVN | Java Spring Boot | Sequel Pro    | xampp| 
---------- | ---- | ---------------- | ------------- | ---- | 
Skills     | 5.0  | 3.0             | 2.0            | 4.0  | 
Features   | 5.0  | 1.5              | 2.5           | 5.0  | 
Constraints| 4.0  | 2.3              | 2.3           | 4.5  | 
Usability  | 4.0  | 3.8              | 2.6           | 4.0  | 
Support    | 2.0  | 2.4              | 2.9           | 5.0  | 
Security   | 3.5  | 3.5              | 3.0           | 3.5  |  
Complexity | 3.0  | 2.0              | 2.0           | 4.5  |  
Average    | 3.8  | 2.7              | 2.4           | 4.35  | 

#### Framework Evaluation
Xampp is the best choice for me depending on the evaluation. There are several advantages for Xampp:1.large community. 2.easy code integration. 3.more powerful framework to website. I have a good experience with MVEN to build website but because of the time I selected to work in Xampp to build my page faster.

#### Summary
It can be clearly seen that Xampp has to most support and score in team. This support is due to some features that Xampp has. Features such as Support and Skills support are two of the reasons for choosing Xampp as the most preferable framework.

## Installation instructions
##### Fist we need download Xampp: [Xampp download from here](https://www.apachefriends.org/download.html) then start Apache and MySQL
##### After Donwload it we need to go htdocs file: 
```
C:\xampp\htdocs
```
##### then, git clone my repo: 
```
git clone https://github.com/fa1234/FinalProject-CSC583/
```
##### Now, the Back-end: First we need to inport the Database to 
```
http://localhost/phpmyadmin/
```
Wn need to press Import to impoet database from `FinalProject-CSC583`.
database Name `finalproject`.

#### Now, we are ready to open website in browser:   
to register:
```
http://localhost/FinalProject-CSC583/register.php

```
Admin Page:
```

http://localhost/FinalProject-CSC583/admin.php

```
## Architecture discussion

Website page is working on Xampp environment using PHP and HTML for front-end and Mysql for back-end. Front-end: there are two PHP files and one HTML file. the first file is Register.php which we can register UserName, Email, Phone Number, and Company Name. Also it has two CheckBox, one is if the visitor has official invited or not. The second CheckBox is if the visitor has a company, he or she select the company checkbox. Then, it will open a new text box to write his or her name. If the visitor does not have the company, the text box will be not required. The second file is Admin.php, it is to get the visitors from Mysql database. Third file is Home.html, when the visitor registers, if it accesses, the Register.php will transfers to Home page which is (welcome page). Second, Back-end, I created database called (finalproject) and one table called (users). Users table has UserName, Email, and Company as varchar and Phone Number as number. Also, two columns for checkbox as varchar to return value. Example when select official visitor, the database will return (official visitor).
## Plan of action
Here is the time line chart: [Here](https://github.com/fa1234/FinalProject-CSC583/blob/master/chart.png)
Plan : 
- [x] Nonfunctional
- [x] functional
- [x] Disgen
- [x] Development
- [x] Test
- [x] Delivery

