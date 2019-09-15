<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , inital-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn/bootstrapcdn.com/bootstrap/4.3.1/js.bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <title>Tracker</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    </head>
    <body>
        <div class="der navbar navbar-expand-sm bg-dark">
            <h1>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                100 days of Java</h1>
            <a href="index.php" role="button" class="buttn btn btn-success">HOME</a>
        </div>
        <center>
        <div class="jumbotron">
                <h1>What concept did you Learn Today</h1>
        </div>
        </center>
        <div class="Frm">
        <center>
            <form  method="post" action="">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
                <div class="form-group">
                   <label for="pwd">Password:</label>
                   <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </center>
        </div>
    </body>
</html>
