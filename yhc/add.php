<?php
include "koneksi.php";
?>
<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <title>Add Project</title>
  </head>
  <body>
    <div class="w-50 mx-auto border p-3 mt-5">
      <form action="add.php" method="post">
        <label for="projectname">Project Name</label>
        <input type="text" id="projectname "name="projectname" class="form-control" required />
        <label for="client">Client</label>
        <input type="text" id="client" name="client" class="form-control" required />
        <label for="projectleader">Project Leader</label>
        <input type="text" id="projectleader" name="projectleader" class="form-control" required />
        <label for="startdate">Start Date</label>
        <input type="date" id="startdate" name="startdate" class="form-control" required />
        <label for="enddate">End Date</label>
        <input type="date" id="enddate" name="enddate" class="form-control" required />
        <label for="progress">Progress</label>
        <input type="text" id="progress" name="progress" class="form-control" />
        <div class="row mt-3">
          <input
            type="submit"
            class="btn btn-success mt-3"
            name="add"
            value="Submit"
          />
        </div>
        <div class="row mt-3">
          <a href="index.php" class="btn btn-primary">Back To Home</a>
        </div>
      </form>
    </div>
    <?php
    if(isset($_POST['add'])){
        $projectname= $_POST['projectname'];
        $client= $_POST['client'];
        $projectleader= $_POST['projectleader'];
        $startdate= $_POST['startdate'];
        $enddate= $_POST['enddate'];
        $progress= $_POST['progress'];
        $sqlInsert = "INSERT INTO project(`projectname`, `client`, `projectleader`, `startdate`, `enddate`, `progress`) VALUES ('$projectname','$client','$projectleader','$startdate','$enddate','$progress')";
        mysqli_query($conn, $sqlInsert);
        "<div class='w-50 mx-auto border p-3 mt-5'> echo'Project $projectname Added'</div>";
        
    }
    ?>
  </body>
</html>
