<?php
include_once('koneksi.php');

$id = $_GET['id'];        // Collecting data from query string
if(!is_numeric($id)) echo "Data Error"; // Checking data it is a number or not

$sql = "DELETE FROM guestbook WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location:guestlist.php');
} else {
  echo "Error deleting record: " . $conn->error;
}