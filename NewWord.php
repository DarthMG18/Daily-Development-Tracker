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
                One New Word A DAY</h1>
            <a href="index.php" role="button" class="buttn btn btn-success">HOME</a>
        </div>
        <center>
        <div class="jumbotron">
            <h1>Enter The Word You learned today and its meaning </h1>
        </div>
        </center>
        <?php
        $Date = "2019-01-01";
        $Word = "Temp";
        $Meaning = "None";
        $conn = mysqli_connect("localhost","root","","Development_Tracker") or die(mysqli_error($conn));
        
                ?>
        <div class="Frm">
            <center>
                <form  method="post" action="">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group">
                       <label for="Word">New Word Learned</label>
                       <input type="text" class="form-control" id="Word">
                    </div>
                    <div class="form-group">
                       <label for="Meaning">Meaning</label>
                       <input type="text" class="form-control" id="Meaning">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </center>
        </div>
    <br>
    <?php
        $sql = "INSERT INTO NewWord (date,word,meaning)
                VALUES ($Date,$Word,$Meaning)";
        $sql_results = mysqli_query($conn, $sq) or die(mysqli_error($conn));
        $sq = "SELECT * FROM NewWord";
        $sq_results = mysqli_query($conn, $sq) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($sq_results);
        echo "The Total Number of Words Learned is ";
        echo $rows;
        mysqli_close($conn);
    ?>
    </body>
</html>
