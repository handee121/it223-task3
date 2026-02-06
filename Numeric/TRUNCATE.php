<?php
include "../dbcon.php";

$sql = "SELECT id, fullname, amount, TRUNCATE(amount, 0) AS trunc_0, TRUNCATE(amount, 2) AS trunc_2 FROM records";
$result = $conn->query($sql);
?>

<h1>TRUNCATE() Example</h1>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Amount</th>
<th>Truncate (0 decimals)</th>
<th>Truncate (2 decimals)</th>
</tr>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>
<td>{$row['id']}</td>
<td>{$row['fullname']}</td>
<td>{$row['amount']}</td>
<td>{$row['trunc_0']}</td>
<td>{$row['trunc_2']}</td>
</tr>";
    }
}
$conn->close();
?>
</table>
