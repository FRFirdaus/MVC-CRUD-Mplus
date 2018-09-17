<html>
<head>
    <title>Input Data</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>"
    rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<body>

<div class="panel panel-success">
  <div class="panel-heading" align="center"><h3 class="panel-title"><b><i class="glyphicon glyphicon-folder-open">.</i> Detail of Book </b></h3></div>
  

<br/>

  <div class="container">  
    <form>
    <div class="row"> 
      <div class="col-md-6">  
            <div class="form-group">
              <label>Book ID</label>
                <input value="<?php echo $book[0]->id; ?>" type="text" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
              <label>Title</label>
                <input value="<?php echo $book[0]->title; ?>" type="text" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
              <label>Author</label>
                <input value="<?php echo $book[0]->author; ?>" type="text" class="form-control" readonly="readonly">
            </div>

            


            
        </div>
        <div class="col-md-6">  
             <div class="form-group">
              <label>Date Published</label>
                <input value="<?php echo $book[0]->date; ?>" type="Date" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
             <label>Number of Pages</label>
                <input value="<?php echo $book[0]->page; ?>" type="Number" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
              <label>Type of Books</label>
                <input value="<?php echo $book[0]->type; ?>" type="text" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
            <a href="../../../" class="btn btn-primary"><span class="fa fa-remove"></span><i class="glyphicon glyphicon-home"></i> Home</a>
            </div>

          </div>
        
      </div>
      </div>
    </form>
</div>
</div>
</div>
</div>


</body>
</html>
