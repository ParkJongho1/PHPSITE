<?php
    include "../connect/connect.php";
    include "../connect/session.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그 글쓰기</title>
    <!-- style -->
    <?php include "../include/style.php";?>
    <!-- //style -->
    <style>
        .footer {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
    <!-- skip -->
    <?php include "../include/skip.php";?>
    <!-- //skip -->

    <!-- header -->
    <?php include "../include/header.php";?>
    <!-- //header -->
    
    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="center">
            <?php
                $blogID = $_GET['blogID'];

                $sql = "SELECT * FROM myBlog WHERE blogID = {$blogID}";
                $result = $connect -> query($sql);

                if($result){
                    $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
            ?>
            <div class="blog__label" style="background-image:url(../assets/img/blog/<?=$blogInfo['blogImgFile']?>)">
                <h3 class="section__title"><?=$blogInfo['blogTitle']?></h3>
                <div>
                    
                    <span class="author"><a href="#"><?=$blogInfo['blogAuthor']?></a></span>
                    <span class="date"><?=date('Y-m-d H:i', $blogInfo['blogRegTime'])?></span><br>
                    <?php if($blogInfo['blogAuthor'] == $_SESSION['youName']){ ?>
                    <span class="modify"><a href="blogModify.php?blogID=<?=$blogID?>">수정</a></span>
                    <span class="delete"><a href="blogRemove.php?blogID=<?=$blogID?>" onclick="return noticeRemove();">삭제</a></span>
                    <?php  } ?>
                </div>
            </div> 
            <div class="container">
                <div class="blog__layout">
                    <div class="blog__left">
                    <h4><?=$blogInfo['blogTitle']?></h4>
                    <?=$blogInfo['blogContents']?>
                    </div>
                    <div class="blog__right">
                        <div class="ad">
                        <iframe src="https://ads-partners.coupang.com/widgets.html?id=572094&template=carousel&trackingCode=AF4377138&subId=&width=300&height=300" width="300" height="300" frameborder="0" scrolling="no" referrerpolicy="unsafe-url"></iframe>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <div class="blog__btn">
                    <a href="blog.php">목록보기</a>
                </div>  
            </div>   
            
        </section>
    </main>

    <!-- footer -->
    <?php include "../include/footer.php";?><!-- //footer -->   

    <script>
        function noticeRemove(){
            let notice = confirm("정말 삭제하시겠습니까?", "");
            return notice;
        }
    </script>
</body>
</html>