<?php
include 'koneksi.php';
?>

<html>
  <head>
    <title>Yayasan Hasnur Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="add.php" class="btn btn-primary mt-3">Add Project</a>
    <table class="table table-striped table-hover mt-1 table-bordered text-center">
        <thead class="table-dark">
            <th>Project Name</th>
            <th>Client</th>
            <th>Project Leader</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Progress</th>
            <th>Action</th>
        </thead>

        <?php
        $sqlGet="SELECT * FROM project";
        $query=mysqli_query($conn, $sqlGet);
        while($data=mysqli_fetch_array($query)){
            echo"
            <tbody>
            <tr>
              <td>$data[projectname]</td>
              <td>$data[client]</td>
              <td>$data[projectleader]</td>
              <td>$data[startdate]</td>
              <td>$data[enddate]</td>
              <td>$data[progress]%</td>
              <td>
              <div class='row'>
                <div class='col d-flex justify-content-center' href='update.php?projectname=$data[projectname]'o>
                  <a href='update.php?projectname=$data[projectname]' class='btn btn-warning'>Update</a>
                </div>
                <div class='col d-flex justify-content-center'>
                  <a href='delete.php?projectname=$data[projectname]' class='btn btn-danger'>Delete</a>
                </div>
            </div>
            </td>
            </tr>
            </tbody>";
        }
        ?>
    </table>
    </div>
  </body>
</html>