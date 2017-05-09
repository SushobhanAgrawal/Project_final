<?php
/*  $userid = $_GET['userid'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  require('db.php');
  require('runq.php');
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
                <table>
                   <?php foreach($result as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];?>
                       <?php if($item_status == 0): ?>
                      
                        <td style="width:65%"> <?php echo $res['task'];?></td>
                        <td style="width:10%"> <?php echo $res['duedate'];?></td>
                        <td style="width:10%">
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="edit"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid']; ?>"/>
                            <input type="submit" class="btn btn-danger" value="edit"/>
                          </form>
                        </td>
                        <td style="width:10%">
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="delete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="delete"/>
                          </form>
                        </td>
                        <td style="width:10%">
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="complete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="Complete"/>
                          </form>
                        </td>
                      <?php endif; ?>
                    </tr>
                  <?php endforeach;?>
                </table>
            </table>
            
            <table id="mytable" class="table table-bordred table-striped" style="color:black;">
                <thead>
                  <th style="width:65%">Task</th>
                  <th style="width:10%">Due Date</th>
                  <th style="width:10%">Edit</th>
                  <th style="width:10%">Delete</th>
                  <th style="width:10%">Status</th>
                </thead>
                <table>
                   <?php foreach($result as $res):?>
                    <tr>                    
                      <?php $item_status = $res['isdone'];?>
                       <?php if($item_status == 1): ?>
                      
                        <td style="width:65%"> <?php echo $res['task'];?></td>
                        <td style="width:10%"> <?php echo $res['duedate'];?></td>
                        <td style="width:10%">
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="edit"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid']; ?>"/>
                            <input type="submit" class="btn btn-danger" value="edit"/>
                          </form>
                        </td>
                        <td style="width:10%">
                          <form action = 'index.php' method = 'post' >
                            <input type="hidden" class="btn btn-danger" name = 'action' value="delete"/>
                            <input type="hidden" class="btn btn-danger" name = 'item_id' value="<?php echo $res['taskid'];?>"/>
                            <input type="submit" class="btn btn-danger" value="delete"/>
                          </form>
                        </td>
                        
                      <?php endif; ?>
                    </tr>
                  <?php endforeach;?>
                </table>
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
</body>
</html>