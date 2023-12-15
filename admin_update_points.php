<?php
session_start();
include "database_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userID = validate($_POST['userID']);
    $newPoints = validate($_POST['points']);

    // Perform validation on $newPoints if needed

    // Update the points in the database
    $updateQuery = "UPDATE Data SET Points = ? WHERE UserID = ?";
    $updateStmt = mysqli_prepare($conn, $updateQuery);
    mysqli_stmt_bind_param($updateStmt, "ii", $newPoints, $userID);
    $result = mysqli_stmt_execute($updateStmt);

    if (!$result) {
        header("Location: admin_profile_page.php?error=Points update failed");
        exit();
    } else {
        // Redirect to the admin profile page after successful points update
        header("Location: admin_profile_page.php?success=Points updated successfully");
        exit();
    }
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
