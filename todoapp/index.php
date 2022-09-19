<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>TODO Application</title>
</head>

<body>

  <h1 class="text-center py-4 my-4">TODO Application</h1>

  <div class="w-50 m-auto">
    <form action="save-todo.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="Enter your TODO List" Required>

      </div><br>
      <button class="btn btn-success">Add TODO</button>

    </form>

  </div><br>
  <hr class="bg-dark w-50 m-auto">
  <div class="lists w-50 m-auto my-4">
    <h1 class="text-center">Your Lists</h1>
    <div id="lists">
      <table class="table ">
        <thead>
          <tr>
            <th scope="col" name="id">S.No</th>
            <th scope="col">TODO List</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'db_config.php';
          $sql = "SELECT * FROM todos";
          $result = mysqli_query($conn, $sql);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $title = $row['Title'];

          ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $title  ?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                  <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>

                </td>

              </tr>

          <?php

            }
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>