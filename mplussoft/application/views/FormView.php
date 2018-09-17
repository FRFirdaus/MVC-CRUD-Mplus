<html>
<head>
    <title>Input Data</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>"
    rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<body>
<br/>
    <div class="row text-center">
        <h1 class="text-primary"> <i class="glyphicon glyphicon-pencil"></i><b> Create New List of Books</b></h1>
    </div>
<br/>
<br/>

<div class="container">  
    <div class="row"> 
        <div class="col-md-6 col-md-offset-3">  
            <form method="post">


                <div class="form-group has-warning has-feedback">
                    <label><i class="glyphicon glyphicon-tag"></i> Title :</label><b>
                    <input type="text" class="form-control" type="text" id="title" name="title" placeholder="Harry Potter : Goblet of Fire" aria-describedby="inputWarning2Status"></b>
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                    <span id="inputWarning2Status" class="sr-only">(warning)</span>
                </div>

                <div class="form-group has-warning has-feedback">
                    <label><i class="glyphicon glyphicon-user"></i> Author :</label><b>
                    <input type="text" class="form-control" type="text" id="author" name="author" placeholder="J.K. Rowling"></b>
                    <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group has-warning">
                    <label><i class="glyphicon glyphicon-bookmark"></i>  Date Published :</label><b>
                    <input type="Date" class="form-control" type="text" id="date" name="date"></b>
                </div>

                <div class="form-group has-warning">
                    <label><i class="glyphicon glyphicon-bookmark"></i>  Number of Pages :</label><b>
                    <input type="Number" class="form-control" type="text" id="page" name="page" placeholder="Pages in Book"></b>
                </div>

                <div class="form-group has-warning">
                    <label><i class="glyphicon glyphicon-book"></i>  Type of Book :</label><b>
                    <input class="form-control" type="text" id="type" name="type" placeholder="Novel, Documentation, other"></input></b>
                </div>

                <button class="btn btn-primary" type="submit" value="Simpan" name="submit"><i class="glyphicon glyphicon-floppy-disk"></i> Submit</button>
                
                <a href="../../" class="btn btn-danger"><span class="fa fa-remove"></span><i class="glyphicon glyphicon-home"></i> Back</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>