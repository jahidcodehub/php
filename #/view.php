<?php
    include './include/connection.php';
    $sql = 'SELECT * FROM nu';
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
    <link rel="stylesheet" href="./css/view.css">
</head>
<body>
    <h1>Table Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <!-- Tbody Start -->
        <tbody>
            <tr>
            <?php
                while($data = mysqli_fetch_assoc($query)) {
            ?>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td class="view"><a href="">View</a></td>
                <td class="edit"><a href="">Edit</a></td>
                <td class="delete"><a href="delete.php?id=<?php echo $data['id']?>">Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>

