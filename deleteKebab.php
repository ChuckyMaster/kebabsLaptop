<!-- <?php



require_once 'db.php';

if(isset($_POST['delete'])) {

    $idTodelete = $_POST['delete'];

    $sqlDeleteOne = "DELETE FROM `kebab` WHERE `kebab`.`id` = '$idTodelete' ";
    $check = mysqli_query($accessDataBase, $sqlDeleteOne);
    header("Location: http://localhost/PhpProceduraleCours/kebabs/");
}




?> -->