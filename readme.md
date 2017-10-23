# [:house: Feni Batch Home Page](http://poloey.github.io/feni)
# Class 18 

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

