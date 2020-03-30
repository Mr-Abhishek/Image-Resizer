<html>
<body bgcolor="#008080">
    
<center>
    <h1>
        <header><h2>Image Resizer</h2></header>
		<p align="right"> <a href="logout.php">Logout</a></p>
<form action="" method="post" enctype="multipart/form-data">
<h6>convert into<select name="size"><option value="100px*100px">100px * 100px </option>
<option value="200px*200px">200px * 200px </option>
<option value="300px*300px">300px * 300px </option>
<option value="400px*400px">400px * 400px </option>
<option value="500px*500px">500px * 500px </option>
</select></h6>

<hr>
</br>
</br>


<div class="form-group">
    <label class="">Choose Image</label>
    <input type="file" name="upload_image"/>
</div>
</hr>
</br>
<input type="submit" name="form_submit" class="btn btn-primary" value="submit" />
</br>

<hr><footer>contacts us : abhishek@gmail.com</footer></hr>
</form>
   </h1>
 </center>
</body>
<?php
function resizeImage($resourceType,$image_width,$image_height, $resizeWidth,$resizeHeight) {
  //  $resizeWidth = 300;
   // $resizeHeight = 300;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}
if(isset($_POST["form_submit"])) {
	$imageProcess = 0;
		$file=0;
		echo $size=$_POST["size"];
    if(is_array($_FILES))
     {
        $fileName = $_FILES['upload_image']['tmp_name']; 
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        $uploadPath = "./Downloads/";
        $fileExt = pathinfo($_FILES['upload_image']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];
        switch ($uploadImageType) 
        {
            case IMAGETYPE_JPEG:
				if($size=="100px*100px")
				{
                $resourceType = imagecreatefromjpeg($fileName); 
				$height="100";
				$width="100";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagejpeg($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="200px*200px")
				{
                $resourceType = imagecreatefromjpeg($fileName); 
				$height="200";
				$width="200";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
				imagejpeg($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="300px*300px")
				{
                $resourceType = imagecreatefromjpeg($fileName); 
				$height="300";
				$width="300";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
				imagejpeg($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="400px*400px")
				{
                $resourceType = imagecreatefromjpeg($fileName); 
				$height="400";
				$width="400";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
				imagejpeg($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
                break;
 
            case IMAGETYPE_GIF:
                if($size=="100px*100px")
				{
                $resourceType = imagecreatefromgif($fileName); 
				$height="100";
				$width="100";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagegif($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="200px*200px")
                {
				$resourceType = imagecreatefromgif($fileName); 
				$height="200";
				$width="200";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagegif($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
                elseif($size=="300px*300px")
				{
                $resourceType = imagecreatefromgif($fileName); 
				$height="300";
				$width="300";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagegif($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="400px*400px")
				{
                $resourceType = imagecreatefromgif($fileName); 
				$height="400";
				$width="400";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagegif($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				break;
 
            case IMAGETYPE_PNG:
                if($size=="100px*100px")
				{
				$resourceType = imagecreatefrompng($fileName); 
				$height="100";
				$width="100";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagepng($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				
                elseif($size=="200px*200px")
                {
				$resourceType = imagecreatefrompng($fileName); 
				$height="200";
				$width="200";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagepng($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="300px*300px")
                {
				$resourceType = imagecreatefrompng($fileName); 
				$height="300";
				$width="300";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagepng($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}
				elseif($size=="400px*400px")
                {
				$resourceType = imagecreatefrompng($fileName); 
				$height="400";
				$width="400";
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$width,$height);
                imagepng($imageLayer,$uploadPath."Download_".$resizeFileName.'.'. $fileExt);
				}

				break;
 
            default:
                $imageProcess = 0;
                break;
        }
        move_uploaded_file($file, $uploadPath. $resizeFileName. ".". $fileExt);
		//$info = pathinfo($_FILES['userFile']['name']);

        $imageProcess = 1;
    }
    if($imageProcess == 1){
	
	
	
// Program to display complete URL 
  
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
  
// Display the complete URL 
//echo $link; 

	
        $img_data = "http://localhost/PHP_Project/Downloads/Download_".$resizeFileName.'.'. $fileExt;
		echo $img_data;
		?>
            <h2>Image has been Resize Successfully</h2>
			<a href="<?php echo $img_data; ?>" download="myimage">
		<img src="<?php echo $img_data; ?>">	
			</a>
			<br>
			<a href="<?php echo $img_data; ?>" download="myimage"><button>Download Image</button></a>
			
        <?php
        }
        else
        {
        ?>   
                    <h4> Image is Invalid </h4>
        <?php
        }
        
	$imageProcess = 0;
	}
?>
