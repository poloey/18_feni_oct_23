# [:house: H-43 Home Page](https://poloey.gitlab.io/h43/)
# Class 18 

## Homework (Generate a todo List)
Create a `Todo` class. Keep at least 2 properties. Like `todo_text` and `completed`.      
Make lot of todo object by instantiating `Todo` class. Keep all todo object inside a array.     
Iterate That todo array using `foreach` or `for` loop inside a table or inside ul tag.
If any todo is completed keep style `line-through`



### Writing `html` convenient way inside control flow (iterative and conditional).    
In order to write some html inside control flow we will end `php`  tag. Instead of `;` we will use `:`. Which means this control flow didn't end yet. whenever we want to end this control flow we will prefix `end` before control flow keyword.

~~~php
<?php if (true/false) : ?>
  <h1>some html</h1>
<?php endif; ?>

<?php for($i = 0; $i < 3; $i++ ):  ?>
  <h1>some html <?php echo $hello[$i] ?></h1>
<?php endfor; ?>

<?php foreach($people as $person):  ?>
  <h1>some html $person['some value']</h1>
<?php endfor; ?>
~~~

### Writing properties (variable) and method (function) inside class.
In order to write properties and method in a class, you have to write visibility filter (`public`, `private` `protected`) before `properties` and `method`. If you need to access any value without object instantiation you have write `static` keyword after visibility filter. We can access static `properties` or `method` by using `::` (scope resolution) operator.   

Without static 
~~~php
class Person {
  public $age = 20;
}

$tanim = new Person();
echo $tanim->age;

~~~

With Static 
~~~php
class Person {
  public static $age = 20;
}
echo Person::$age;
~~~

### foreach loop
We use foreach loop to iterate a array. we can use `for` loop and `foreach` loop interchangeably. Therefore using `foreach` is clever. Since it's hassle free and very easy. It cut all completions. 
~~~php
<?php 
  $friends = ['sumon', 'sarwar', 'kayes', 'mujibur', 'mamun', 'tasnia', 'israt', 'imran', 'nizam', 'tofael'];
 ?>
 <ul>
   <?php foreach($friends as $friend) : ?>
    <li><?= $friend ?></li>
   <?php endforeach; ?>
 </ul>

~~~

### Magic method   
In PHP functions that start with a `__` (double underscore) are called magic functions / magic methods. Today we have seen `__construct` magic method. Which automatic being called when new object we instantiate.
~~~php
class Person {
  public $name;
  public $email;
  public function __construct ($name, $email) {
    $this->$name = $name;
    $this->email = $email;
  }
}

$tanim = new Person ('Tanim', 'tanim@gmail.com');
print_r($tanim);
~~~

### About visibility filter (`public`, `protected`, 'private') 

`private property` or `private method` can be used inside **own class**.      
`protected property` or `protected method` can be used inside **own class** and **child class**     
`public property` or `public method` can be anywhere in your application.






