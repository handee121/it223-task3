<?php
include "../dbcon.php";

$sql = "SELECT SUM(score) AS total_score, SUM(amount) AS total_amount FROM records";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h1>SUM() Example</h1>
<p>Total Score: <?php echo $row['total_score']; ?></p>
<p>Total Amount: <?php echo $row['total_amount']; ?></p>

<?php $conn->close(); ?>
