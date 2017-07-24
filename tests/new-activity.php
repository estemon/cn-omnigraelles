<?php $title = 'Activitats';
include('header.php');

$newActTitle = $_POST['newActTitle'];
$newActTeacher = $_POST['newActTeacher'];
$newActDescription = $_POST['newActDescription'];
$newActMinAge = $_POST['newActMinAge'];
$newActOptAge = $_POST['newActOptAge'];
$newActMaxAge = $_POST['newActMaxAge'];

?>

  <body>
<?php 

echo date('<p>H:i, j/F</p>');
echo '<h2>Your new activity details</h2>';
echo '<p>Title: ' . $newActTitle . '</p>';
echo '<p>Teacher: ' . $newActTeacher . '</p>';
echo '<p>Description: ' . $newActDescription . '</p>';
echo '<p>Min age: ' . $newActMinAge . ', opt: ' . $newActOptAge . ',max: ' . $newActMaxAge . '</p>';

?>
  </body>
</html>