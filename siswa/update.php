<?php
require_once "../config/database.php";

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id) && !empty($data->nama) && !empty($data->kelas)) {
    $query = "UPDATE siswabaru SET nama = :nama, kelas = :kelas WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $data->id);
    $stmt->bindParam(":nama", $data->nama);
    $stmt->bindParam(":kelas", $data->kelas);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Siswa berhasil diperbarui."]);
    } else {
        echo json_encode(["message" => "Gagal memperbarui siswa."]);
    }
} else {
    echo json_encode(["message" => "Data tidak lengkap."]);
}
?>
