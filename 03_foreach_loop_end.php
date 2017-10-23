<?php 

$tanim = [
  'name' => 'tanim',
  'email' => 'tanim@gmail.com'
];

$mujibur = [
  'name' => 'mujibur',
  'email' => 'mujibur@gmail.com'
];
$israt = [
  'name' => 'israt',
  'email' => 'israt@gmail.com'
];
$sumon = [
  'name' => 'sumon',
  'email' => 'sumon@gmail.com'
];
$people = [
  $tanim, $mujibur, $israt, $sumon
];

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Hello world in php</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

  <table class="table">
    <tr>
      <th>Name</th>
      <th>Emails</th>
    </tr>

    <?php foreach ($people as $person): ?>
      <tr>
        <td><?php echo $person['name']; ?></td>
        <td><?php echo $person['email']; ?></td>
      </tr>
    <?php endforeach; ?>


  </table>

</body>
</html>