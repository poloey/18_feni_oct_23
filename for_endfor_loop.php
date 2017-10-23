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

     <?php for ($i = 0; $i < count($people); $i++) : ?>
      <tr>
        <td><?php echo $people[$i]['name'] ?></td>
        <td><?php echo $people[$i]['email'] ?></td>
      </tr>

     <?php endfor ?>


  </table>

</body>
</html>