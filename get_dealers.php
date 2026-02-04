<?php
include "config.php";

if (isset($_POST['pincode'])) {
    $pincode = $_POST['pincode'];

    $sql = "SELECT id, fullname, location FROM dealers WHERE pincode = '$pincode'";
    $result = $conn->query($sql);

    echo '<option value="">Select a dealer</option>';

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['id'].'">'.$row['fullname'].' - '.$row['location'].'</option>';
        }

    } else {
        echo '<option value="">No dealers found</option>';
    }
}
?>
