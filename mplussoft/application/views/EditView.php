<html>
<head>
    <title>Edit Buku</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>"
    rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<body>

<div class="panel panel-success">
  <div class="panel-heading" align="center"><h3 class="panel-title"><b><i class="glyphicon glyphicon-folder-open"></i> <?= $tipe ?> Detail of Book </b></h3></div>
  

<br/>

  <div class="container">  
    <form method="post">
    <div class="row"> 
      <div class="col-md-6">  
            <div class="form-group">
              <label>Book ID</label>
                <input value="<?= isset($default['id'])? $default['id'] : ""?>" name="id" type="text" class="form-control" readonly="readonly">
            </div>

            <div class="form-group">
              <label>Title</label>
                <input value="<?= isset($default['title'])? $default['title'] : ""?>" name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
              <label>Author</label>
                <input value="<?= isset($default['author'])? $default['author'] : ""?>" name="author" type="text" class="form-control">
            </div>

        </div>
        <div class="col-md-6">  
             <div class="form-group">
              <label>Date Published</label>
                <input value="<?= isset($default['date'])? $default['date'] : ""?>" name="date" type="Date" class="form-control">
            </div>

            <div class="form-group">
             <label>Number of Pages</label>
                <input value="<?= isset($default['page'])? $default['page'] : ""?>" name="page" type="Number" class="form-control">
            </div>

            <div class="form-group">
              <label>Type of Books</label>
                <input value="<?= isset($default['type'])? $default['type'] : ""?>" name="type" type="text" class="form-control">
            </div>

            <div class="form-group">
            <button name="tombol_submit" class="btn btn-primary">
            <i class="glyphicon glyphicon-edit"></i> Update
            </button>
            <a href="../../../" class="btn btn-success"><span class="fa fa-remove"></span><i class="glyphicon glyphicon-home"></i> Home</a>
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
