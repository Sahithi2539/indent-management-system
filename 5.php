<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" style="margin: 100px auto;">
        <div class="row">
            <p class="headingparagraph text-center centertext">EMPLOYEE MANAGEMENT SYSTEM</p>
        </div>
        <div class="row">
            <p class="text-end" style="font-size: larger; font-weight: bold;">Welcome,<?php echo($_SESSION['username'] ); ?> </p>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Institute</span>
                    <input type="text" class="form-control" value="VIIT" aria-describedby="basic-addon1" readonly>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Category</span>
                    <input type="text" class="form-control" value="Electrical" aria-describedby="basic-addon1" readonly>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Type</span>
                    <input type="text" class="form-control" value="New" aria-describedby="basic-addon1" readonly>
                  </div>
            </div>
        </div>
        <p style="margin: 50px;"></p>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Block</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Room No</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Department</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">HoD</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                  </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" style="height: 200px;" aria-label="With textarea"></textarea>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary align-text-bottom" style="margin-top: 50px; float:right;">SUBMIT</button>
            </div>
        </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center">
            Your indent has been
            submitted successfully <br>
            Ticket ID: VIITNELE01
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="3.html">OK</a></button>
        </div>
      </div>
    </div>
  </div>
    </div>
</body>

</html>