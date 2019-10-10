<?php

$servername = "localhost";
$db="mehenry";
$username = "mehenry";
$password = "samsvyzt";
$charset='utf8mb4';


try {


    $connection = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

    $sql = "SELECT * FROM product_records";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll();
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

    <h2>Update users</h2>

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Location</th>
            <th>Date</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $row) : ?>
            <tr>
                <td><?php echo ($row["id"]); ?></td>
                <td><?php echo ($row["item_name"]); ?></td>
                <td><?php echo ($row["item_name"]); ?></td>
                <td><?php echo ($row["email"]); ?></td>
                <td><?php echo ($row["age"]); ?></td>
                <td><?php echo ($row["location"]); ?></td>
                <td><?php echo ($row["date"]); ?> </td>
                <td><a href="update.php"<?php echo ($row["id"]); ?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php">Back to home</a>
