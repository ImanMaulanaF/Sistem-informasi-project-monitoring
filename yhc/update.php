<?php
include 'koneksi.php';
$projectname=$_GET['projectname'];
$sqlGet="SELECT * FROM project WHERE projectname='$projectname'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
?>
<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <title>Update Project</title>
  </head>
  <body>
    <div class="w-50 mx-auto border p-3 mt-5">
      <form action="update.php" method="post">
        <label for="projectname">Project Name</label>
        <input type="hiden" id="projectname" name="projectname" value="<?php echo "$data[projectname]";?>" class="form-control" readonly/>
        <label for="client">Client</label>
        <input type="text" id="client" name="client" value="<?php echo "$data[client]";?>" class="form-control" required />
        <label for="projectleader">Project Leader</label>
        <input type="text" id="projectleader" name="projectleader" value="<?php echo "$data[projectleader]";?>" class="form-control" required />
        <label for="startdate">Start Date</label>
        <input type="date" id="startdate" name="startdate" value="<?php echo "$data[startdate]";?>" class="form-control" required />
        <label for="enddate">End Date</label>
        <input type="date" id="enddate" name="enddate" value="<?php echo "$data[enddate]";?>" class="form-control" required />
        <label for="progress">Progress</label>
        <input type="text" id="progress" name="progress" value="<?php echo "$data[progress]";?>" class="form-control" />
        <div class="row mt-3">
          <input
            type="submit"
            class="btn btn-success mt-3"
            name="update"
            value="Submit"
          />
        </div>
        <div class="row mt-3">
          <a href="index.php" class="btn btn-primary">Back To Home</a>
        </div>
      </form>
      <?php
      if(isset($_POST['update'])){
        $projectname= $_POST['projectname'];
        $client= $_POST['client'];
        $projectleader= $_POST['projectleader'];
        $startdate= $_POST['startdate'];
        $enddate= $_POST['enddate'];
        $progress= $_POST['progress'];
        $sqlUpdate = "UPDATE project SET client='$client', projectleader='$projectleader', startdate='$startdate', enddate='$enddate', progress='$progress' WHERE projectname='$projectname'";
        $queryUpdate = mysqli_query($conn, $sqlUpdate) or die(mysqli_error);
        header("location:index.php");
      }
      ?>
    </div>
  </body>
</html>
