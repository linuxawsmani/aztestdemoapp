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
    <title>Tech Admin AZ Test AWS ECS Fargate Demo PHP Page</title>
</head>
<body>

    <h1>Tech Admin AZ Test CI/CD PHP Application Running Successfully</h1>

    <h2>Tech Admin AZ Test Aurora/MYSQL/RDS Database Connectivity Status</h2>

    <p style="color:green;">
        Tech Admin AZ Test Application connected to Amazon Aurora/MYSQL/RDS Successfully
    </p>

    <p>
        Current DB Time:
        <?php echo htmlspecialchars($row['server_time']); ?>
    </p>

</body>
</html>
