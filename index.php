<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="main">
		<div id="header">
			<h2>php ajax pagination</h2>
		</div>
        <div id="load-data">
		
		</div>
	</div>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		function load_Data(page){

			$.ajax({
				url:"php-ajax-pagination.php",
				type:"POST",
				data:{page_no:page},
				success:function(data){
					$("#load-data").html(data);
				}

			});


		}

		load_Data();

		$(document).on("click","#pagination a",function(e){
			e.preventDefault();

			var page_id = $(this).attr("id");

			load_Data(page_id);

		});

		});
	</script>

</body>
</html>







