
    <?php include 'header.php' ?>
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
    $task = $_POST['sample'];
    echo $task;
    ?>
</body>

</html>