<!-- Todolist -->
## Todo

- [ ] Frontpage
    - [ ] Can be reached without logging in
    - [ ] Contains a login form with the fields “username” and “password”
    - [ ] Contains a link to the registration page
- [ ] Registration page
    - [ ] Can be reached without logging in
    - [ ] Contains a form for registering a new user
    - [ ] Each field in the form is checked using regex
- [ ] Upload page
    - [ ] Can only be reached when logged in
    - [ ] Uploads an image, with a header and a description
- [ ] Image feed
    - [ ] Can only be reached when logged in
    - [ ] Shows all images, headers and descriptions, from any user, along with their username
- [ ] User list
    - [ ] Can only be reached when logged in
    - [ ] A list of all users in the system
- [ ] Security
    - [ ] Data sent from client to serveris sent using the proper HTTP method
    - [ ] Passwords are stored properly in the database
    - [ ] The server cleans any input before examining it
    - [ ] Strings that build SQL statements are made in a way that avoids SQL injection
    - [ ] Anything that is uploaded is cleaned to avoid cross-site scripting

Checklist:
- [ ] PHP uses PDO to connect to the database
- [ ] Database username and password is configured in config.php
- [ ] Put your database in a file named migration.sql–no online databases!
- [ ] Run your migration file in HeidiSQL or similar tool to make sure the script works and that your system works with the database it creates
- [ ] Make a Pull Request on GitHub with your project and changes



    