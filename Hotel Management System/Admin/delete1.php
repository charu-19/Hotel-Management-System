<?php
include_once 'database1.php';
$sql = "DELETE FROM bookingparty WHERE fullname='" . $_GET["fullname"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>