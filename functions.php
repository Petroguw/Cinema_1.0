<?php
require_once "connect.php";
function getProducts() {
    global $conn;
    $stmt = mysqli_prepare($conn, "SELECT * FROM movies;");
    $success = mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $resultArr = false;
    if ($success && mysqli_num_rows($result) >= 0) {
        $resultArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    mysqli_stmt_close($stmt);
    return $resultArr;
}
function getProduct($id) {
    global $conn;
    $stmt = mysqli_prepare($conn, "SELECT * FROM movies WHERE id= ?;");
    mysqli_stmt_bind_param($stmt, "i", $productID);
    $success = mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $resultArr = false;
    if ($success && mysqli_num_rows($result) >= 0) {
        $resultArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    mysqli_stmt_close($stmt);
    return $resultArr;
}

function updateProduct($id, $mname, $description, $year, $genre) {
    global $conn;
    $stmt = mysqli_prepare($conn, "UPDATE movies SET mname=?,description=?, year=?, genre=? WHERE id=?;");
    mysqli_stmt_bind_param($stmt, "siisi", $product, $price, $quantity, $picture, $productID);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $success;
}

function updateProductNoPicture($id, $mname, $description, $year, $genre) {
    global $conn;
    $stmt = mysqli_prepare($conn, "UPDATE movies SET mname=?,description=?, year=? WHERE id=?;");
    mysqli_stmt_bind_param($stmt, "siii", $product, $price, $quantity, $productID);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $success;
}

function insertProduct($mname, $description, $year, $genre) {
    global $conn;
    $stmt = mysqli_prepare($conn, "INSERT INTO movies(mname,description, year, genre) VALUES (?,?,?,?);");
    mysqli_stmt_bind_param($stmt, "ssss", $product, $price, $quantity, $picture);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $success;
}

function deleteProduct($id) {
    global $conn;
    $stmt = mysqli_prepare($conn, "DELETE FROM movies WHERE id=?;");
    mysqli_stmt_bind_param($stmt, "i", $productID);
    $success = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $success;
}
?>
<?php
//require("includes/authorisation-admin.php");
if (session_status()==PHP_SESSION_NONE) {
session_start();}

if (!empty($_POST['mname'])  &&
!empty($_POST['description']) && 
!empty($_POST['year']) && 
!empty($_FILES['genre'])
){

insertProduct($_POST['mname'], $_POST['description'], $_POST['year'], file_get_contents($_FILES['genre']['tmp_name']));
redirect('edit-products-page.php', true);
}
?>