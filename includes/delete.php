<?php

require 'functions.php';

$id = $_GET["id"];

if (deleteData($id) > 0) {
   echo "
   <script>
      alert('Data berhasil dihapus!');
      window.location.href = '../admin/data/mentor.php';
   </script>
   ";
} else {
   echo "
   <script>
      alert('Data gagal dihapus!');
      window.location.href = '../admin/data/mentor.php';
   </script>
   ";
}
