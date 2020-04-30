<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-image: url('abcd.jpg');
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
</head>
<body> 

    <center>
        <h1>
            <header><h2>Image Resizer<span>&#174;</span></h2></header>
        <hr>
        </hr>   
        <marquee>You can convert any image in any format or pixel you want to.....!</marquee></br>  
            <p align="right"> <a href="logout.php">Logout</a></p>
            <form action="" method="post" enctype="multipart/form-data">
                <label>Convert into<select name="size"><option value="100px*100px">100px * 100px </option>
                    <option value="200px*200px">200px * 200px </option>
                    <option value="300px*300px">300px * 300px </option>
                    <option value="400px*400px">400px * 400px </option>
                    <option value="500px*500px">500px * 500px </option>
                    <option value="600px*600px">600px * 600px </option>
                    </select>
                </label></br></br></br></br></br>
                        <div class="form-group">
                        <label class="">Choose Image</label>
                        <input type="file" name="upload_image"/>
                        </div></br>

                    <input type="submit" name="form_submit" class="btn btn-primary" value="submit" />
            </form>
        </h1>
        <hr></hr>
    </center>
<center>
<!-- Add font awesome icons -->
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a> 
<p font style="color:white;">Contact :- abhishek555@gmail.com/98952545875</p>

</center> 
</body><?php
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
