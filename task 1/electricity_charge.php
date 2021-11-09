<!doctype html>
<html lang="en">
<head>
    <title>Electricity Charge</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Calculate The Bill</h4>
                    </div>
                    <div class="card-body text-center">
                        <form method="post">
                            <h4><label for="product">Write Down Your Consumption</label></h4>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="number" id="number">
                            </div>
                            <br>
                            <button class="btn btn-success" name="submit">Let's Guess</button>
                        </form>
                        <div>
                            <?php
                            if($_POST) {
                                $number = $_POST['number'];
                                if($number != '') {
                                    $unit = 0.0;
                                    if($number <= 50) $unit = 0.5;
                                   else if($number <= 100) $unit = 0.75;
                                   else if($number <= 250 ) $unit = 1.2;
                                   else if($number > 250) $unit = 1.5;
                                   $bill = $number * $unit;
                                   $subCharge = $bill * 0.2;
                                   $total_bill = $bill * (1 + 0.2 );
                                ?>
                            <p><?php echo "The Bill Charge  =   " . $bill ; ?> </p>
                            <p><?php echo "The Subcharge 20%  =   " . $subCharge ; ?> </p>
                            <p class='font-weight-bold'><?php echo "So The Total Bill Charge  =   " . $total_bill ; ?> </p>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>