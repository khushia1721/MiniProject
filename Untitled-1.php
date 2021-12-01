<?php
$connection = new mysqli("localpost","root","",db_name); // object[mysqli ka object hai yeh]
if($connection-> connect_error){
       echo "there is a problem connect:".$connection->connect_error; //[$connection->connect_error = this will tell u k error kya aa rhi h]
     die(); // control ko whai rokk kar execution kar deta ha
}

$insert_query="";
if($connection->query($insert_query)==true) { // data insert using object oriented

}



1. 2 marks database connection string,php myadmin, website connect database
procedural approach pehle ho gaya
2.form with field in value ko database me store karo and display and insert
3. step for creation of php myadmin database.
4. date[only date] and timestmp[data with time] two input type difference [database type]
5. delete button database coding
6. session and cookies comparison 2 memory
7. session type-> time bound[time k according destroy] and event bound[jaha par control dete h],session variable, session delete with coading
8. cookies make and destroy both coading - 5 marks
9. user defined function,string type,diff actual parameter and formal ,func with argu with return type diff without
10. check whether a number is adam or not using function with argument
11. 10 marks mid 1 k string
12. instance,local and variable difference, static,local and global variable difference
13. pseudocode 4 marks with object oriented programming
14. reflection





























































?>