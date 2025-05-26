<?php
echo json_encode([
    "message" => "Selamat datang di API Siswa",
    "endpoints" => [
        "GET /siswa/read.php",
        "POST /siswa/create.php",
        "PUT /siswa/update.php",
        "DELETE /siswa/delete.php"
    ]
]);
?>
