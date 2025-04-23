<?php
function update_metric($conn, $metric_name, $increment = 1) {
    $stmt = $conn->prepare("INSERT INTO system_metrics (metric_name, metric_value) 
                            VALUES (?, ?) 
                            ON DUPLICATE KEY UPDATE metric_value = metric_value + VALUES(metric_value)");
    $stmt->bind_param("sd", $metric_name, $increment);
    $stmt->execute();
    $stmt->close();
}




?>



