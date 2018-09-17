<html>
<head>
    <title>Input Data</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>"
    rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<body>
<br>

<div class="panel panel-primary">
  <div class="panel-heading" align="center"><h3 class="panel-title"><b><i class="glyphicon glyphicon-folder-open">.</i> List of Books </b></h3></div>
  <div class="panel-body">
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">  
            <table class="table table-condensed">
               <div class="row text-center">
               <br/>
               <br/>
               <img src="logomplus.png" />
               <br/>
               <br/>
               </div>
               <h3><a href ="index.php/home/tambah" class="btn btn-success" ><i class="glyphicon glyphicon-plus"></i> Add Book</a></h3>
               <h3><b><span class="label label-primary">List Books
               </span></b></h3>
            <tr class="info">
                <td><b>#</b></td>
                <td><i class="glyphicon glyphicon-tag"></i><b> Title</b></td>
                <td><i class="glyphicon glyphicon-user"></i><b> Author</b></td>
                <td><i class="glyphicon glyphicon-bookmark"></i><b> Date Published</b></td>
                <td><i class="glyphicon glyphicon-bookmark"></i><b> Number of Pages</b></td>
                <td><i class="glyphicon glyphicon-book"></i><b> Type of Book</b></td>
                <td></td>
                <td></td>
            </tr>
            <?php
              foreach ($book as $row) {
            ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->title; ?></td>
                <td><span class="badge"><?php echo $row->author; ?></span></td>
                <td><?php echo $row->date; ?></td>
                <td><?php echo $row->page; ?></td>
                <td><?php echo $row->type; ?></td>
                <td>
                <a href="<?php echo "index.php/home/detail/" . $row->id; ?>" class="btn btn-info" title="Read"><i class="glyphicon glyphicon-eye-open"></i> Read <span class="fa fa-edit" aria-hidden="true"></span></a>

                <a href= "index.php/home/edit/<?php echo $row->id; ?>" class="btn btn-primary" title="Edit"><i class="glyphicon glyphicon-cog"></i> Update <span class="fa fa-edit" aria-hidden="true"></span></a>

                <a href= "<?php echo "index.php/home/hapus/" . $row->id; ?>" class="btn btn-danger" title="Delete"><i class="glyphicon glyphicon-remove"></i> Delete



                    
                </td>
            </tr>
            <?php
               }
            ?>
            </table>
        </div>
    </div>

</div>
  </div>
  <div class="panel-footer">PT.M+ Software</div>
</div>
</body>
</html>