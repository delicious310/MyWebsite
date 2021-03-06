<?php
    $cate_id = $this -> input ->get('cateId');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<?php include 'header.php';?>
    <div id="banner"></div>
    <div id="works">
      <div class="wrapper">
          <div class="work-top">
              <h3>Latest Works</h3>
              <ul class="blog-cate">
                  <li><a class="active" href="javascript:;">All</a></li>
                  <?php
                    foreach($categories as $category){
                   ?>
                     <li><a href="javascript:;"data-id="<?php echo $category->cate_id;?>"><?php echo $category->cate_name;?></a></li>
                  <?php
                  }
                  ?>

              </ul>
          </div>
          <ul class="blog-list">
              <?php
                foreach($blogs as $blog){
              ?>
                    <li class="blog">
                        <a href="welcome/view_blog?blogId=<?php echo $blog ->blog_id;?>">
                            <img src="<?php echo $blog ->img;?>" alt="">
                            <div class="blog-desc">
                                <p class="blog-title"><?php echo $blog ->title;?></p>
                                <span class="blog-click"><?php echo $blog ->clicked;?></span>
                            </div>
                            <div class="mask">
                                <h4 class="mask-title">PHOTO</h4>
                                <span class="mask-btn">VIEW PHOTO</span>
                            </div>
                        </a>
                    </li>
              <?php
                }
              ?>
          </ul>
      </div>
    </div>
    <div id="services"></div>
    <div id="meet"></div>
    <footer id="footer"></footer>
</body>
<script src="js/require.js" data-main="js/index"></script>
</html>