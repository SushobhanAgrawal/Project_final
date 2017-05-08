<?php
/*  $userid = $_GET['userid'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  require('db.php');
  $sql = 'select * from todo where userid = "'.$userid.'"';
  $results = runQuery($sql);
*/?>

<html>
<head>
<link rel="stylesheet" href="css/task.css" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<hr size="100">
  <?php
  echo "<div style='text-align:right'><h2>Welcome ".$_COOKIE['login']." !!</h2></div>";
  ?><hr>

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
<br><hr><br>
<a href = "newtask.php">New Task</a>
</body>
</html>