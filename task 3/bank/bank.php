<?php
if ($_POST) {
    $errors = [];
    if (empty($_POST['username'])) {
        $errors['username'] = "<div class='alert alert-danger'> Username Is Required </div>";
    }
    if (empty($_POST['amount'])) {
        $errors['amount'] = "<div class='alert alert-danger'> Amount Is Required </div>";
    }
    if (empty($_POST['year'])) {
        $errors['year'] = "<div class='alert alert-danger'> Year Is Required </div>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .bg-img {
        background-image: url('bank.jpg');
        width: 100%;
        background-size: cover;
        height: 100vh;
    }

    /* h1,
    label {
        color: #fff;
    } */
</style>

<body>

    <div class="row">
        <div class="col bg-img">
            <!-- <img src="bank.jpg" class="img-responsive"> -->
        </div>
        <div class="col-7 ">
            <h1 class="text-center mt-5">Online Transefer</h1>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php // if (isset($_POST['username'])) echo $_POST['username'] ?>">
                </div>
                <?php
                if (isset($errors['username'])) {
                    echo  $errors['username'];
                }
                ?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Loan Amount</label>
                    <input type="text" name="amount" class="form-control" value="<?php //if (isset($_POST['amount'])) echo $_POST['amount'] ?>">
                </div>
                <?php
                if (isset($errors['amount'])) {
                    echo  $errors['amount'];
                }
                ?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Loan Year</label>
                    <input type="number" class="form-control" name="year" value="<?php // if (isset($_POST['year'])) echo $_POST['year'] ?>">
                </div>
                <?php
                if (isset($errors['year'])) {
                    echo  $errors['year'];
                }
                ?>
                <div class="form-group">
                    <input type="submit" class="form-control" name="calculate" value="Calculate">
                </div>
            </form>
            <?php
            if (empty($errors)) {
                $amount = $_POST['amount'];
                $year = $_POST['year'];
                $monthly = 0;
                $total = 0;
                $interest = 0;
                if ($year < 3) {
                    $interest = $amount * 0.1 * $year;
                    $total = $amount + $interest;
                } else {
                    $interest = $amount * 0.15 * $year;
                    $total = $amount + $interest;
                }
                $monthly = $total / ($year * 12);

            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Interest Rate</th>
                            <th scope="col">Loan After Interest Rate </th>
                            <th scope="col">Monthly Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $interest; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><?php echo $monthly; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>