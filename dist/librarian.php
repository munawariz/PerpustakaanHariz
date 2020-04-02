<?php
    require_once("config.php");
    require("../snippets/navbar.php");
    $page = "Librarian Site";
    $sql = "SELECT * FROM pustakawan WHERE pustakawan.idPustakawan=".$_GET['id'];
    $result = $dbConn -> prepare($sql);
    $result -> execute();
    $librarian=$result->fetch(PDO::FETCH_ASSOC);
    $id = $librarian['idPustakawan'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo file_get_contents("../snippets/header.html"); ?>
        <title>Heaven's Door</title>
    </head>

    <body>
        <!--Navbar-->
        <?php echo CNavigation::GenerateMenu($page, $id); ?>
        <!--End Of Navbar-->

        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="login.php">Login</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <!-- End Of Breadcrumbs -->
    </body>
</html>