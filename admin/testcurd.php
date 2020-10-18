<?php
if(isset($_POST['product_update_btn'])){
    $book_id= $_POST['book_id'];
    $product_title = $_POST['product_title'];
    $product_cat= $_POST['product_cat'];
    $product_author = $_POST['author'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
     
       $product_query ="SELECT * FROM testimonial WHERE book_id='$book_id'";
	   $pro_query_run = mysqli_query($con, $product_query);	

	   foreach($pro_query_run as  $fa_row)
	   {
			if( $product_image == NULL )
			{
				$img_data= $fa_row['img'];
			}
			else{
				if($img_path="assets/images/".$fa_row['img'])
				{
					unlink($img_path);
					$img_data=$product_image;
				}
			}
	   }

            $query=  "UPDATE Books SET author='$product_author', keywords='$product_keywords',	title=' $product_title',price='$product_price',descrip='$product_desc', img='$img_data' WHERE book_id='$book_id'";
			$query_run = mysqli_query($con, $query);

            if($query_run){
				if( $product_image == NULL )
			{
				$_SESSION['status']="your product is updated with old image";
                header('Location:admin/book.php');	
			}
			else{
				
			
                move_uploaded_file($product_image_tmp,"assets/images/$product_image");
              
                $_SESSION['status']="your product is updated";
                header('Location:admin/book.php');
                
			}

			}
			else{
                $_SESSION['status']="Not updated";
                header('Location:admin/book.php');

            }

}
?>
