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
    <title>Tech Admin AZ Test first CI/CD Pipeline AWS ECS Fargate Demo Page</title>
</head>
<body>

    <h1>Tech Admin AZ Test first CI/CD Pipeline Application Running Successfully</h1>

    <h2>Tech Admin AZ Test first CI/CD Pipeline Database Connectivity Status</h2>

    <p style="color:green;">
        Tech Admin AZ Test first CI/CD Pipeline Application connected to Amazon RDS MySQL Successfully
    </p>

    <p>
        Current DB Time:
        <?php echo htmlspecialchars($row['server_time']); ?>
    </p>

</body>
</html>
