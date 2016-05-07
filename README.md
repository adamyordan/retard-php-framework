Retard - MVC PHP Framework
==========================
MVC Framework for retards and dummies


Guide [Retards]
===============
Step by step to create a page: 
- create view 
  - create a .php file in folder `views`, example: `views/pages/home.php`
- create controller
  - create a function in page_controller.php
- done

example of controller function:
===============================
```
public static function home() {
	// calculate stuffs
	$age = 2016 - 1996;
	$name = $_POST['myname'];

	// render view
	View::render('pages/home', [
		'age'  => $age,
		'name' => $name
	]);
}
```

example of view file:
```
<h1> 
	Hello, <?php echo $data['name']; ?> 
</h1>
<p>
	Your age is <?php echo $data['age']; ?>
</p>
```

you can open your created page in : `http://localhost/?p=home`


Guide [Retards]
===============
Step by step to create a page: 

- create view 
  - create a .php file in folder `views`, example: `views/pages/home.php`

- create controller
  - create a function in page_controller.php

- done


Guide [Dummies]
===============
Step by step to create a page: 

- create view 
  - select or make appropriate folder in `views`, example: `views/user`
  - create a .php file in folder `views`, example: `views/user/profile.php`

- create controller
  - select or make appropriate controller in `controllers`, example: `controllers/user_controller.php`
  - create a class and function in the controller file, example: `class UserController { . . .}`

- registering controller
  - add your new controller in `include/routes.php` on `$CONTROLLER_LIST`;

- done


Guide [NormalThinker]
===============
Step by step to create a page: 

- create view 
  - select or make appropriate folder in `views`, example: `views/user`
  - create a .php file in folder `views`, example: `views/user/profile.php`
  - use data passed from controller using variable $data, example: `$data['name']`
  - make sure to direct your url link with prefix `?p=`, for example: `<a href='?p=profile'>`
  - use data passed from controller using variable `$data`, example: `$data['name']`
  - avoid doing calculation in view

- create controller
  - select or make appropriate controller in `controllers`, example: `controllers/user_controller.php`
  - create a class and function in the controller file, example: `class UserController { . . .}`
  - do data calculation inside the function, and pass data that are needed for view
  - you can get POST and GET request data like usual, example: `$name = $_POST['name'];` 

- registering controller
  - add your new controller in `include/routes.php` on `$CONTROLLER_LIST`;
  - you can explicitly direct your route inside the `switch ($route)`, just add new case,
    example: `case 'biodata': call('UserController', 'profile'); break;`
  - if you do not define it explicitly, the framework will try to check if any function name matches the url request. example: `http://localhost/?p=profile` will use function `profile` in `UserController`

- done
