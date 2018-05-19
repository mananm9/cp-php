<?php
include('db_config.php');


if(isset($_POST['add']))
{
$case_id=$_POST['case_id'];
$case_sub=$_POST['case_sub'];
$case_description=$_POST['case_description'];

 if((strlen ( $case_sub ))<1) {
 echo "<script>alert('enter case subject')</script>";
 echo '<script>window.location="add_case.php"</script>';
 }
 else if((strlen ( $case_description ))<1){
 echo "<script>alert('enter case description')</script>";
 echo '<script>window.location="add_case.php"</script>';
 }
 else  {

 
$sql="INSERT INTO case_details(case_id,case_sub, case_description)VALUES ('$case_id','$case_sub','$case_description')";
$result=mysql_query($sql);

echo "<script>alert('Case Registered Successfully')</script>";
echo '<script>window.location="minister_home.php"</script>';

}
}
?>

