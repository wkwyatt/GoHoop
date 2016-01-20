# GoHoop - Local chat website for basketball players
Using PHP and MySQL

## Summary
Basketball players who like to play pick up games sometimes have a hard time finding where other players are playing.  This website creates a live local feed of post for people who are interested in gathering together to play basketball.  

## Existing Features
 - Login / Signup Page for users to enter the site

## Screenshots
![](https://github.com/wkwyatt/GoHoop/blob/gh-readme/screenshots/login.png)

 ## Code
 I use AngularJS to show or hide the login and register page based on the button the user clicks
 >      <div id="login-form" ng-hide="signup">
			...
		</div>
		<div id="signup-form" ng-show="signup">
			...
		</div>

## In Progress
* I still need to create my app and controller in a controller.js file 
* Make the navigation and footer for the newsfeed
* Display user posts in the newsfeed

## Links
I didn't include the local file to Angular or JQuery, make sure to add these CDNs
* [JQuery](https://developers.google.com/speed/libraries/)
	* https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js
* [Angular](https://developers.google.com/speed/libraries/)
	* https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js

## Bugs 
* navigation header does not resize (check script.js for errors)

[login-pic]:(https://github.com/wkwyatt/GoHoop/blob/gh-readme/screenshots/login.png)
