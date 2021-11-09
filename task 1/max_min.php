<!doctype html>
<html lang="en">

<head>
    <title>Negative Or Positive</title>
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
            <div class="col-4 offset-4">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Get The Max & Min Numbers</h4>
                    </div>
                    <div class="card-body text-center">
                        <form method="post">
                            <h6><label>Write Down Number 1</label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="num1" id="num1">
                            </div>
                            <h6><label>Write Down Number 2</label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="num2" id="num2">
                            </div>
                            <h6><label>Write Down Number 3</label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="num3" id="num3">
                            </div>
                            <br>
                            <button class="btn btn-success" name="submit">Get Result</button>
                        </form>
                        <div>
                            <?php
                            if($_POST) {
                                $num1 = $_POST['num1'];
                                $num2 = $_POST['num2'];
                                $num3 = $_POST['num3'];
                                if($num1 != '' && $num2 != '' && $num3 != '') {
                                ?>
                            <p class="mt-3"><?php echo "The Min Number Is "?> <span
                                    class='font-weight-bold'><?php echo  min($num1, $num2 ,$num3);?> </span></p>
                            <p class="mt-1"><?php echo "The Max Number Is "?> <span
                                    class='font-weight-bold'><?php echo  max($num1, $num2 ,$num3);?> </span></p>
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