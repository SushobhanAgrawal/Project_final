<?php 
//  $user_id = $_GET['user_id'];
//  $fname = $_GET['fname'];
//  $lname = $_GET['lname'];
//  require('db.php');
//  $sql = 'select * from todo where user_id = "'.$user_id.'"';
//  $results = runQuery($sql);
?>

<html>
<head>
<link rel="stylesheet" href="css/task.css" />
</head>
<body>

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <!-- <h1 style="color:black"> -->
            <?php echo "<h1 style='color:black'>Welcome, ".$fname." ".$lname."</h1>";?> !
        <!-- </h1> -->
      </div>
    </div>
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>My Tasks</h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <th style="width:65%">Task</th>
                  <th style="width:10%">Due Date</th>
                  <th style="width:10%">Edit</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <tabel>
                   <?php foreach($results as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];
                        if ($item_status == 0){
                      ?>
                        <td> <?php echo $res['task'];?></td>
                        <td> <?php echo $res['duedate'];?></td>
                        <td>
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="edit"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid']; ?>"/>
                            <input type="submit" class="btn btn-danger" value="edit"/>
                          </form>
                        </td>
                        <td>
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="delete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="delete"/>
                          </form>
                        </td>
                        <td>
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="complete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="Complete"/>
                          </form>
                        </td>
                      <?php } ?>
                    </tr>
                  <?php endforeach;?>
                </tabel>
            </table>
            <form action="addtask.php">
              <input type="submit" value="Add New Task" class="btn btn-default" />
            </form>
          </div>
      </div>
    </div>
  </div>
</div>


<br><hr><br>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Completed Tasks</h4>
          <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <th style="width:65%">Task</th>
                  <th style="width:10%">Due Date</th>
                  <th style="width:10%">Edit</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <tabel>
                   <?php foreach($results as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];
                        if ($item_status == 1){
                      ?>
                        <td> <span style='text-decoration:line-through; font-style: italic; color: #c1c1c1'><?php echo $res['task'];?></span></td>
                        <td> <span style='text-decoration:line-through; font-style: italic; color: #c1c1c1'><?php echo $res['duedate'];?></span></td>
                        <td>
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="edit"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid']; ?>"/>
                            <input type="submit" class="btn btn-danger" value="edit"/>
                          </form>
                        </td>
                        <td>
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="delete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="delete"/>
                          </form>
                        </td>
                        <td>
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="incomplete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="Incomplete"/>
                          </form>
                        </td>
                      <?php } ?>
                    </tr>
                  <?php endforeach;?>
                </tabel>

            </table>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>