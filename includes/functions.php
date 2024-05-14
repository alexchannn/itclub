<?php

$conn = mysqli_connect("localhost", "root", "", "itclub");

function query($query)
{
   global $conn;

   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

function data($data)
{
   global $conn;

   $nama = htmlspecialchars($data["nama"]);
   $gambar = htmlspecialchars($data["nama"]) . ".jpg";
   $clubs = htmlspecialchars($data["clubs"]);
   $status = htmlspecialchars($data["status"]);

   $query = "INSERT INTO tb_mentor VALUES ('', '$nama', '$gambar', '$clubs', '$status')";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

function deleteData($id)
{
   global $conn;

   mysqli_query($conn, "DELETE FROM tb_mentor WHERE id_mentor = $id");

   return mysqli_affected_rows($conn);
}
