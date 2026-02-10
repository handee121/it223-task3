<?php
include "../dbcon.php";

$sql = "SELECT CURRENT_USER() AS curr_user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>CURRENT_USER() Example</h1>
<p>Current User: <?php echo $row['curr_user']; ?></p>

<?php $conn->close(); ?>
