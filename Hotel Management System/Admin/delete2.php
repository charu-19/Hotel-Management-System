<?php
include_once 'database2.php';
$sql = "DELETE FROM bookingtable WHERE fullname='" . $_GET["fullname"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>