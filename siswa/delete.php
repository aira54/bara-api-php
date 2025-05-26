<?php
require_once "../config/database.php";

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id)) {
    $query = "DELETE FROM siswabaru WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $data->id);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Siswa berhasil dihapus."]);
    } else {
        echo json_encode(["message" => "Gagal menghapus siswa."]);
    }
} else {
    echo json_encode(["message" => "ID tidak ditemukan."]);
}
?>
