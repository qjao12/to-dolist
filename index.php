<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php' ?>
    <section class="bg-dark p-5 text-dark">
        <form action="index.php" method="POST">
            <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">Task:</span>
                <input type="text" name='sample' class="form-control" placeholder="Enter Task">
                <button type="submit" class="btn btn-primary">Button</button>
            </div>
        </form>
    </section>
    <?php
    $task = $_POST['sample'];
    echo $task;
    ?>
</body>

</html>