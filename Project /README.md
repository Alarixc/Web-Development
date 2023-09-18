A Healthcare Waste Management System with code written in HTML, PHP, JS, CSS3 and MySQL database used as backend. 
Flow of Project:
The webpage will have both a frontend and backend (storing complaints, 
inspection and hospital details, etc.). We use CSS to make the look become more 
attractive. Also, the usage of JavaScript to do client-side manipulation. We are 
planning to use php and MySQL server for the backend.
Our webpage has the following modules:
1) Ranking Module
 a) Create the table with the hospital rankings.
 b) Get the sorted data from the table using php.
 c) Finally display the data in our webpage.
2) Complaint (Can be accessed only if user is logged in)
 a) Use JavaScript to check if the login cookie has been set.
 b) Displaying old complaints
  i) Get the data from MySQL and display using php if any past complaints 
     from user is present
 c) Raising a complaint
  i) Get the form using php and validate the form.
  ii) If it’s a valid input, insert the complaint in the database.
3) Sign up
 a) Create two table with as user details and login details
 b) Get the input from php and validate it.
 c) If valid input, then insert the data in correspond table.
 d) Then create the login cookie and redirect to homepage.
4) Login
 a) Get the input from php and validate it.
 b) If valid input, then retrieve from the table the login details.
 c) If the username matches, then check if the password matches.
 d) If both matches, then create the login cookie and redirect to home page.
5) Logout
 a) Delete the login cookie.
6) Contact us
 a) Get the input using JavaScript and validate it.
 b) Then use smtp protocol to send mail to the email-id given and the body as 
 the data given by the user.
