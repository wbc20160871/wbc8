<?php
    require_once('php/util/db.php');
    $sql = "select * from reg_login order by id desc";
    $users = $db -> rawQuery($sql);
    $index = 0;
    // print_r($users);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php include "inc/nav.php"; ?>
    <div class="container">
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>账号</th>
          <th>邮箱</th>
          <th>性别</th>
          <th>学历</th>
          <th>介绍</th>
          <th>爱好</th>
        </tr>

        <?php 
        foreach ($users as $key => $value) {
        ?>

        <tr>  
          <td><?php echo ++$index; ?></td>
          <td><?php echo $value["username"] ?></td>
          <td><?php echo $value["email"] ?></td>
          <td><?php echo $value["gender"] ?></td>
          <td>item5</td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>

    
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    !function(window, document, $, undefined) {
      $('.del-btn').on('click', function() {
        // TODO
        var id = this.id,
          uname = this.getAttribute('uname');

        if (confirm('确定要删除 “' + uname + '” 吗？')) {
          location.href = '../api/reg_login_del.php?id=' + id + '&t=' + new Date().getTime();
        }
      });
    }(window, document, jQuery);
  </script>
  </body>
</html>



