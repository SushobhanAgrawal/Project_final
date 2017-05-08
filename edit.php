<html>
<body>
<link rel="stylesheet" href="css/style.css" />
<hr size="100">
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Edit Item</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="post" action="index.php" >
      <div class="form-group">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" placeholder="Change Task" />
      </div>
      <div class="form-group">
        <label>Start Date:</label>
        <input type="date" name="createddate" class="form-control" id="createddate" />
      </div>
      <div class="form-group">
        <input type="hidden" name="item_id" class="form-control" id="item_id" value="<?php echo $id;?>" />
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="date" name="duedate" class="form-control" id="duedate" />
      </div>
      <div class="form-group">
        <input type="hidden" name="action" class="form-control" value="after_edit">
      </div>
      <div class="form-group">
        <input type="submit" value="Finish Editing" class="btn btn-default" />
      </div>
    </form>
  </div>
  
</body>
</html>