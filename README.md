<img src="https://media.giphy.com/media/3og0IxeB7Hx7JBnhmM/giphy.gif" width=100%>

# Ichiban Japanese Restaurant

The aim of this project is to use of PHP fundamentals we've learned by using variables, data types, loops, functions etc. The idea for this project was to create a fictional restaurant that is about to open in central London. The intention of this website is for it to launch information about the restaurant and get guests interested before opening. You can visit the site [here.](https://shubistudios.com/ichiban/)


# Installation

Install this project by following these steps:

<b> Clone the repository from this address: </b>
   
  ```
  https://github.com/amandaprintz/ichiban.git
  
  ```

<br>
<b> In the project's root folder, start a php server by typing this in your terminal: </b>


  ```
  php -S localhost:8000
  ```
  
  <br>
<b> Open up your browser and paste this URL in the address bar: </b>


 ```
 https://localhost:8000
 ```
 


# Code Review

Code review written by [Sophie Wulff](https://github.com/sowulff).

1. index.php:1-16 - When header.php is required, there is no need for HTML emmet.
2. contact.php:1-16 - See as above, No need for HTML emmet.
3. about.php:1-16 - See as above, No need for HTML emmet.
4. data.php:5-30 - Since 'info' is the same everywhere, it could have been made into a variable.
5. menu.php:3 - data.php is required in this file but not being used.
6. menu.php:96-114 - instead of writing the same if statement for each menu-item, maybe a function could make the code more DRY.

# Testers

Tested by the following people:

1. Johanna Jönsson
2. Hanna Rosenberg
