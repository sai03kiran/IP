<?php include 'con.php'; 
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($con,$query);
if ($data)
{
    ?>
    <script type="text/javascript">
        alert("data deleted successfully");
        window.open("http://localhost/view.php","_self");
        </Script>
        <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert("Please try again");
</script>
<?php
}
