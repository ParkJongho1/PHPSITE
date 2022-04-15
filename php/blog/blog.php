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
        <section id="blog-type" class="section center">
        <div class="container">
            <h3 class="section__title">축구 블로그</h3>
            <p class="section__desc">축구와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p> 
            <div class="blog__inner">
                <div class="blog__search">
                    <form action="blogSearch.php" method="GET">
                        <fieldset>
                            <legend class="ir_so">검색 영역</legend>
                            <input type="serach" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력해주세요!" required>
                            <label for="blogSearch" class="ir_so"></label>
                            <button class="button">검색</button>
                        </fieldset>
                    </form>
                </div>
                <div class="blog__btn">
                    <a href="blogWrite.php">글쓰기</a>
                </div> 
                <div class="blog__cont">
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];  
    } else {
        $page = 1;
    }

    //게시판에 불러올 갯수
    $PageView = 5;
    $PageLimit = ($PageView * $page) - $PageView;
    $sql = "SELECT * FROM myBlog WHERE blogDelete = 1 ORDER BY blogID DESC LIMIT {$PageLimit},{$PageView}";
    $result = $connect -> query($sql);
?>

           <?php foreach($result as $blog){ ?>
                <article class="blog">
                <figuer class="blog__header">
                <a href="blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>)"></a>
                </figuer>
                <div class="blog__body">
                <span class="blog__cate"><?=$blog['blogCategory']?></span>
                <div class="blog__title"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
                <div class="blog__desc"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogContents']?></a></div>
                <div class="blog__info">
                    <span class="author"><a href="#"><?=$blog['blogAuthor']?></a></span>
                    <span class="date"><?=date('Y-m-d H:i:s', $blog['blogRegTime'])?></span>
                    <?php if($blog['blogAuthor'] == $_SESSION['youName']){ ?>
                    <span class="modify"><a href="blogModify.php?blogID=<?=$blog['blogID']?>">수정</a></span>
                    <span class="delete"><a href="blogRemove.php?blogID=<?=$blog['blogID']?>" onclick="return noticeRemove();">삭제</a></span>
                    <?php  } ?>
                </div>
                </div>
                </article>
        <?php } ?>
 
                    <!-- <article class="blog">
                            <figuer class="blog__header">
                                <img src="../assets/img/cardimg3.png" alt="블로그 이미지">
                            </figuer>
                        <div class="blog__body">
                            <span class="blog__cate">HTML</span>
                            <div class="blog__title">영국 잉글랜드 프리미어 리그의 프로 축구 클럽 CHELSEA FC</div>
                            <div class="blog__desc">런던을 연고지를 하고있는 CHELSEA FC 영국 클럽 최초로 UEFA 3대 메이저 대회를 모두 제패한 런던 최고의 빅클럽이자 잉글랜드의 명문 클럽. 또한 프리미어 리그 6회 우승, FA컵 8회 우승, EFL컵 5회 우승, FIFA 클럽 월드컵 1회 우승 등의 기록을 보유하고 있다.</div>
                            <div class="blog__info">
                                <span class="author"><a href="#">박종호</a></span>
                                <span class="date">2022-03-07 21:03</span>
                                <span class="modify"><a href="#">수정</a></span>
                                <span class="delete"><a href="#">삭제</a></span>
                            </div>
                        </div>
                    </article> -->
                </div>      
                <div class="board__pages">
                    <ul>
                        <?php
                            // require "boardPage.php"
                            include "blogPage.php";
                        ?>
                        <!-- <li><a href="#">&lt;&lt;</a></li>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">&gt;&gt;</a></li>
                        <li><a href="#">&gt;</a></li> -->
                    </ul>
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