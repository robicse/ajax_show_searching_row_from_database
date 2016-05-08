<?php

$search_text=$_GET['text'];
/*$data=array('html','css','js','jquery','ajax','css3','html5','mysql');
if(in_array($search_text, $data))
{
    echo 'Found';
}
else{
    echo 'Not Found';
}*/

$conn=mysql_connect('localhost','root','');
if(!$conn)
{
    die('Database Server Not Connected!');
}
 else {
     mysql_select_db('db_ajax_batch12');
}




if($search_text==NULL)
{
    $sql="SELECT * FROM tbl_student";
}
 else {
    $sql="SELECT * FROM tbl_student WHERE student_name LIKE '%$search_text%'";
}
$result=  mysql_query($sql);
?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email Address</th>
        <th>Mobile No</th>
    </tr>
    <?php
        while($row=  mysql_fetch_assoc($result))
        {
    ?>
    
    <tr>
        <th><?php echo $row['student_id']?></th>
        <th><?php echo $row['student_name']?></th>
        <th><?php echo $row['student_email_address']?></th>
        <th><?php echo $row['student_mobile_no']?></th>
    </tr>
        <?php } ?>
</table>
