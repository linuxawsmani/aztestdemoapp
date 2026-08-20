<?php

require_once "config.php";

try {

    $stmt = $pdo->query("SELECT NOW() AS server_time");
    $row = $stmt->fetch();

} catch (PDOException $e) {

    die("Database Error: " . $e->getMessage());

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Tech Admin AZ Test AWS ECS Fargate Demo PHP Page</title>
</head>
<body>

    <h1>Welcome to Tech Admin AZ Test Second CI/CD PHP Application Running Successfully</h1>

    <h2>Welcome to Tech Admin AZ Test Aurora/MYSQL/RDS Database Connectivity Status check</h2>

    <p style="color:green;">
        Welcome to Tech Admin AZ Test Application connected to Amazon Aurora/MYSQL/RDS Successfully
    </p>

    <p>
        Current DB Time:
        <?php echo htmlspecialchars($row['server_time']); ?>
    </p>

</body>
</html>