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
                            <h4><label for="product">Write Down The Three Numbers</label></h4>
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
                                if($number > 0) $message = "Positive";
                                else if($number < 0) $message = "Negative"; 
                                else $message = "Neither Positive Or Negative";
                                if($number != '') {
                                ?>
                            <p><?php echo $message; ?> </p>
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