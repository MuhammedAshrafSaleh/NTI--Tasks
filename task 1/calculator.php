<!doctype html>
<html lang="en">
<head>
    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 offset-4">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Calculator</h4>
                    </div>
                    <div class="card-body text-center">
                        <form method="post">
                            <h6><label>Number 1</label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="number1" id="number1">
                            </div>
                            <h6><label>Number 2</label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="number2" id="number2">
                            </div>
                            <div class="d-flex justify-content-between"> 
                                <input type="submit" class="btn btn-secondary" name="operator" id="operator" value="+">
                                <input type="submit" class="btn btn-primary" name="operator" id="operator" value="-">
                                <input type="submit" class="btn btn-secondary" name="operator" id="operator" value="/">
                                <input type="submit" class="btn btn-primary" name="operator" id="operator" value="*">
                                <input type="submit" class="btn btn-secondary" name="operator" id="operator" value="%">
                            </div>
                            <br>
                        </form>
                        <div>
                            <?php
                            if ($_POST) {
                                $number1 = $_POST['number1'];
                                $number2 = $_POST['number2'];
                                $operator = $_POST['operator'];
                                $result = 0.0;
                                if ($number1 != '' && $number2 != '' && $operator != '')  {
                                if($operator == '+') $result = $number1 + $number2;
                                if($operator == '-') $result = $number1 - $number2;
                                if($operator == '/') $result = $number1 / $number2;
                                if($operator == '*') $result = $number1 * $number2;
                                if($operator == '%') $result = $number1 % $number2;
                            ?>
                                    <p class="mt-3"><?php echo "The Result  = " . $result ?>
                                    </p>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>