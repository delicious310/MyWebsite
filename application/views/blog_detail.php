
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>文章详情</title>
	<base href="<?php echo site_url();?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">

	<link rel="stylesheet" href="css/blog_detail.css">
</head>
<body>
<!--header-->
	<?php include 'header.php';?>
	<div id="article-content">
		<div class="wrapper">
			<h3 class="title"><?php echo $blog -> title;?></h3>
			<img src="<?php echo $blog -> big_img;?>" alt="" class="img">
			<p class="content"><?php echo $blog->content;?></p>
			<ul class="article-info">
				<li class="date">
					<small></small>
					<?php echo $blog -> post_date;?>
				</li>
				<li class="category"><?php echo $blog -> cate_name;?>
				</li>
				<li class="clicked"><?php echo $blog->clicked;?></li>
			</ul>
		</div>
	</div>
	<div id="article-comment">
		<div class="wrapper">
			<h3><span class="comment-num"><?php echo count($blog->comments);?></span>Responses</h3>
			<ul class="comment-list">
				<?php
					foreach($blog->comments as $comment){
				?>
						<li class="comment">
							<div class="comment-info">
								<span class="username"><?php echo $comment -> username;?></span>
								<span class="post-date"><?php echo $comment -> post_date;?></span>
							</div>
							<p class="content"><?php echo $comment -> message;?></p>
						</li>
				<?php
					}
				?>

			</ul>
			<div class="comment-form">
				<h3>leave a comment</h3>
				<form action="">
					<p><input type="text" class="text-box" placeholder="Name" id="username" name="username"></p>
					<p><input type="email" class="text-box" placeholder="Email" id="email" name="email"></p>
					<p><input type="tel" class="text-box" placeholder="Phone" id="phone" name="phone"></p>
					<p><textarea name="message" id="" cols="30" rows="10" class="text-box"></textarea></p>
					<p><input type="submit" value="Send"></p>

				</form>
			</div>
		</div>

	</div>

</body>
</html>