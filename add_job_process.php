<?php
include('db_config.php');


if(isset($_POST['add']))
{
$job_id=$_POST['job_id'];
$job_title=$_POST['job_title'];
$job_specification=$_POST['job_specification'];
$job_salary=$_POST['job_salary'];
$job_location=$_POST['job_location'];
$job_address=$_POST['job_address'];

 if((strlen ( $job_title ))<1) {
 echo "<script>alert('enter job title')</script>";
 echo '<script>window.location="add_job.php"</script>';
 }
 else if((strlen ( $job_specification ))<1){
 echo "<script>alert('enter job specification')</script>";
 echo '<script>window.location="add_job.php"</script>';
 }
 else if ((strlen ( $job_salary ))<1) {
 echo "<script>alert('enter job salary')</script>";
 echo '<script>window.location="add_job.php"</script>';
 }
 else if((strlen ( $job_location ))<1){
 echo "<script>alert('enter job location')</script>";
 echo '<script>window.location="add_job.php"</script>';
 }
 else if( ((strlen ($job_address))<1)){
 echo "<script>alert('enter job address')</script>";
 echo '<script>window.location="add_job.php"</script>';
 }
 else  { 
$sql="INSERT INTO job(job_id,job_title, job_specification, job_salary, job_location, job_address)VALUES ('$job_id','$job_title','$job_specification','$job_salary','$job_location','$job_address')";
$result=mysql_query($sql);

echo "<script>alert('Job Registered successfully')</script>";
echo '<script>window.location="agent_home.php"</script>';
}
}

?>

