<?php include 'header.php' ?>
<?php session_start() ?>
<section class="bg-dark p-5 text-dark">
    <form action="index.php" method="POST">
        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1">Task:</span>
            <input type="text" name="sample" class="form-control" placeholder="Enter Task">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>
<?php



$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $newTask = $_POST['sample'];
    fwrite($myfile, "$newTask \n");
}


echo file_get_contents("newfile.txt");

?>
</body>

</html>