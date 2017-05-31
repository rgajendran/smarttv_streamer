<!DOCTYPE html>
<html>
	<head>
		<title>Wireless Video Streaming</title>
		<style>
			.list{
				width:300px;
				height:300px;
				background:#7093cc;
				float:left;
				margin:20px 0px 20px 5px;
			}
		</style>
	</head>
	<body style="background:#4286f4;">
		<h1 align="center">Media Collections</h1> 
		<h4 align="center">(IP : <?php echo $localIP = getHostByName(php_uname('n')); ?>)</h4>
			<?php
			$files = scandir('movies');
			$allowedFormat = array("video/mp4","video/avi","video/flv","video/vob","video/mpeg","video/ogv"
			,"audio/mpeg");
			foreach($files as $video){
				$type = mime_content_type('movies/'.$video);
				if (in_array($type, $allowedFormat)){					
				?>
				<div class="list">
					<h5 align="center"><?php echo $video; ?></h5>
					<video width="300" height="300" controls>	
					  <source src="movies/<?php echo $video; ?>" type="<?php echo mime_content_type('movies/'.$video);?>" align="center">
					Your browser does not support the video tag.
					</video>			
				</div>				
				<?php
				}
			}
			?>
	</body>
</html>