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
    <?php
    include 'header.php';
    ?>

    <section class="bg-dark p-5 mt-5">
        <form class="row g-3">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Task</span>
                <input type="text" name="task" class="form-control" placeholder="Enter Task" aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn btn-primary" type="button">Submit</button>
            </div>
        </form>
        <?php
        $task = $_POST['task'];
        echo $task;
        ?>
        </div>
        </div>
    </section>

</body>

</html>