<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Fetch Database from mySql</title>
    <?php include 'naim.php' ?>
    <?php include 'showDatabase.php' ?>
</head>

<body>
    <div class="container">
        <div class="">
            <form action="index.php" method="post">
                <label class="form-label">ID</label>
                <input type="text" class="form-control" name="id">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="username">
                <label class="form-label">Sex</label>
                <input type="text" class="form-control" name="sex">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email">
                <button type="submit" class="btn btn-secondary btn-lg mt-5">Submit</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Fetch Data From Database in PHP</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white ">
                                <td>ID</td>
                                <td>Username</td>
                                <td>Sex</td>
                                <td>E-mail</td>
                            </tr>  
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($resul)){
                                        ?>
                                <td> <?php echo $row['id']; ?></td>
                                <td> <?php echo $row['username']; ?></td>
                                <td> <?php echo $row['sex']; ?></td>
                                <td> <?php echo $row['email']; ?></td>
                            </tr> 
                                        <?php
                                    }
                                ?>
                              
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>