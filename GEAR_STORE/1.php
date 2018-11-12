<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<style>
	.container
	{
		margin:0 auto;
		width:1140px;
	}
	.khung1
	{
		width:300px;
		height:150px;
		border: 1px #000000 solid;
		background-color:#FFF;
		position:absolute;
		bottom:-150px;
		
	}
	.khung2
	{
		width:300px;
		height:200px;
		border: 1px #000000 solid;
		background-color:#03F;
	}
	.input1
	{
		position:relative;
	}
	.input1:hover .khung1
	{

		transition:5s all linear;
	}


</style>
<body>
	<div class="container">
        <form method="post">
            <div class="input1">
                <input type="text" name="txt" class="input11" />
                <div class="khung1">
        		</div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="khung2">
        </div>
    </div>
</body>
</html>
<script>
	$(".input11").keyup(function(){
		//var $key=$(this).attr("id");
		/*var form_data = {
			"ma_san_pham":$key,
			"don_gia":$don_gia
			}*/
		$.ajax(
		{
			url: "2.php", 
			type:"POST",
			success: function(data)
					{
						$(".khung1").html(data)
					}
			
		})
	});

</script>