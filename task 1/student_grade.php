<!doctype html>
<html lang="en">

<head>
    <title>Negative Or Positive</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4>Calculate Your Degree</h4>
                    </div>
                    <div class="card-body text-center">
                        <form method="post">
                            <h6><label>Math Grade </label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="math" id="math">
                            </div>
                            <h6><label>Chemistry Grade </label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="chemistry" id="chemistry">
                            </div>
                            <h6><label>Physics Grade</label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="physics" id="physics">
                            </div>
                            <h6><label>Biology Grade </label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="biology" id="biology">
                            </div>
                            <h6><label>Computer Grade </label></h6>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="computer" id="computer">
                            </div>
                            <br>
                            <button class="btn btn-success" name="submit">Get Result</button>
                        </form>
                        <div>
                            <?php
                            if ($_POST) {
                                $math = $_POST['math'];
                                $chemistry = $_POST['chemistry'];
                                $biology = $_POST['biology'];
                                $physics = $_POST['physics'];
                                $computer = $_POST['computer'];
                                if ($math != '' && $chemistry != '' && $biology != '' && $computer != '' && $physics != '') {
                                    $grade = ($math + $chemistry + $physics + $biology + $computer);
                                    $percentage = ($grade / 500) * 100;
                                    $message = "";
                                    if ($percentage >= 90) $message = "A";
                                    else if ($percentage >= 80) $message = "B";
                                    else if ($percentage >= 70) $message = "C";
                                    else if ($percentage >= 60) $message = "D";
                                    else if ($percentage >= 50) $message = "E";
                                    else $message = "F";
                            ?>
                                    <p class="mt-2"><?php echo "Your Total Grade Is" ?> <span class='font-weight-bold'><?php echo $grade; ?> </span></p>
                                    <p class="mt-1"><?php echo "The Percentage" ?> <span class='font-weight-bold'><?php echo $percentage; ?> </span></p>
                                    <p class="mt-1"><?php echo "The Grade " ?> <span class='font-weight-bold'><?php echo $message; ?> </span></p>
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