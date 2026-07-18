<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Simple Web Task</h2>

    <form id="userForm">

        <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter Name"
            required
        >

        <input
            type="number"
            id="age"
            name="age"
            placeholder="Enter Age"
            required
        >

        <button type="submit">Submit</button>

    </form>

    <br>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="tableData">

<?php

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<button onclick="toggleStatus(<?php echo $row['id']; ?>)">
Toggle
</button>

</td>

</tr>

<?php

}

?>

        </tbody>

    </table>

</div>

<script src="script.js"></script>

</body>
</html>
