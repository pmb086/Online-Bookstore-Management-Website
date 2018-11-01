<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		
		if(!(is_numeric($_POST['category'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		if(!(is_numeric($_POST['discount'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		else
		{
			$b_cat =$_POST['category'];
			$b_dis=$_POST['discount'];
			if($b_cat == 1){
				$query="UPDATE book SET b_price = b_price - (($b_dis/100)*b_price) WHERE b_subcat = '$b_cat'";
				echo "success";
			}
		    if($b_cat == 2){
				$query="UPDATE book SET b_price = b_price - (($b_dis/100)*b_price) WHERE b_subcat = '$b_cat'";
				echo "success";
			}
			if($b_cat == 3){
				$query="UPDATE book SET b_price = b_price - (($b_dis/100)*b_price) WHERE b_subcat = '$b_cat'";
				echo "success";
			}
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addbook.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}


?>