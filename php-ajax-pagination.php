<?php

include_once('config.php');
$limit_per_page =4;

if(isset($_POST['page_no'])){

	$page = $_POST['page_no'];
}else{
	$page =1;
}

$offset = ($page-1) * $limit_per_page;




?>

<table border="1" width="100%" style="border-collapse:collapse">
			<tr>
			<th>Id </th>
			<th>Name </th>	
			</tr>
			 <?php
			 $sql = "SELECT * FROM students LIMIT {$offset},{$limit_per_page}";
			 $result = mysqli_query($conn,$sql);
			 if(mysqli_num_rows($result)>0){
			 while($row=mysqli_fetch_assoc($result)){  
			 ?>
			<tr>
			<th><?php echo $row['id'];?></th>
			<th><?php echo $row['first_name'];?> <?php echo $row['last_name'];?></th>	
			</tr>
			<?php
	     }
	    }
	    ?>
		</table>


		
	</div>
	<?php
	$sql2 = "SELECT * FROM students";
	$records = mysqli_query($conn,$sql2)or die("query faild");
	$total_records = mysqli_num_rows($records);
	$total_page = ceil($total_records/$limit_per_page);


	?>

		<div id="pagination">

			<?php  for($i=1;$i<=$total_page;$i++) {   ?>
			<a id="<?php echo $i;?>" href=""><?php echo $i;?></a>

			<?php
			  }

			?>