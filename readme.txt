CHAT:
-This is a chat application that can be used for local usage in a small network. It creates a local server and people connected to the network can do a group chat. 

Tools:
-Sublime text: Text Editor to write code for the website.
-PhpmYADMIN: GUI based Database interface.
-AWS EC2: A virtual System with features as desired.
-Putty:It is a software that is used to connect to the virtual machine.
-Puttygen:It is used to covert the key extension into *.ppk format.
-Google Chrome: It is the software in which application was tested.

Instructions to run:

User Interface:
-Go to browser and type localhost in place of url.
-Register user by giving basic details.
-Login from the same screen.
Note: emailid should be unique for every user.


Code Structure:
folder and sub files description:-
-css: Two files  home.css and style.css.
-images: An image file for background color.
-pages: 1. dbh.php: It contains codes related to the database connection. 
	2. getmsgs: It contains codes that displays the messages to the users.
	3. home.php: It contain codes where conversation takes placec.
	4. index.php: It contain codes related to the login information.
	5. send.php: It contain codes which stores the message send by one user to another.
	6. login.php: It contain codes that verify wheather user is registered or not.
	7. logout.php: It contain codes the enable use to exit the chat room.
	8. sess.php: It contain the detail about the user currently active at a particular time.  
	9. signup: It contain the codes that help user to register on the website.

Implementation Detail:

-I have used html,css,php and mysqladmin along with Amazon web services.
-there are total 9 php files and 1 database name mydatabase having two table posts and signup.
-posts has 4 columns they are id, msg, name, date.
-signup has 3 columns they are uid, name, email, password.
-The database was created on phpmyadmin.
-The private cloud that was used to deploy application is AMAZON WEB SERVICES.
-The ec2 instance was created and apache2, php and mysql were installed with the help of following commands:-
	-sudo apt-get install apache2
	-sudo apt-get install php7.0
	-sudo apt-get install mysql-server mysql-client
-At last the database was connected by enter userid and password in dbh.php file.
