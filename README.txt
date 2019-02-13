Quiz manual from Aleksejs Vesjolijs for technical task.

How to set up the project:
Step 1. At first, you need to install PHP on your machine and enable extensions:
extension=curl
extension=gd2
extension=mbstring
extension=mysql
extension=pdo_mysql
extension=xmlrpc
Then configure PHP as an Apache module.
Ensure Apache has started successfully, open a web browser and enter the address http://localhost/

Step 2. Install MySQL and connect to the MySQL server with the mysql Client.
Navigate in your cmd/shell/terminal to mysql parent directory with mysql binary file and then make to enable root:
mysql -u root -p
then do:
GRANT CREATE, INSERT, SELECT, DELETE, UPDATE ON printful_quiz.*
TO 'printful_quiz'@'localhost' //db_user
IDENTIFIED BY '123'; //pass

Step 3. Extract contents from prinful_php.zip or get it from my github.
3.1. Put content to the folder that is associated with localhost in your server.
E.g. c:/www

Step 3. Login to your MySQL server via phpmyadmin or any other convenient option and import printful_quiz.sql.
SQL dumpfile is located in the printful_quiz.sql folder

Step 4. Run localhost//

Details:
1. Please take into account I am newbie, so I don't have experience, only learning through online courses, tutorials and github examples.
2. I almost managed to create __add__.php file to create new questions. I didn't manage why but isset($_POST) doesn't work as it should. However theoretically it's functional.
3. I started to make some parts of code in JS (see screenshot in screens folder), but I thought to continue in sole PHP, had issues with SQL queries.
4. Didn't implement second test and block on to continue if none test is selected - have a lot of stuff to do in RL, if it's really needed I can code it.
