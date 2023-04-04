<?php include 'header.php' ?>
<section class="bg-dark p-5 text-dark">
    <form action="index.php" method="POST">
        <div class="input-group mb-3 mt-5">
            <span class="input-group-text" id="basic-addon1">Task:</span>
            <input type="text" name="sample[]" class="form-control" placeholder="Enter Task">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>
<?php


if (isset($_POST['sample']) and is_array($_POST['sample'])) {
    foreach ($_POST['sample'] as $task) {
        print $task;
    }
} else {
}

?>
</body>

</html>