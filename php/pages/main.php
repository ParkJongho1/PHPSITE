<?php
    include "../connect/connect.php"; 
    include "../connect/session.php";
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 사이트</title>
</head>
    <style>
        .footer {
            background: #f5f5f5;
        }
    </style>

    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
    <!-- //style -->
    <style>
    
    </style>
<body>
     <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <section id="banner">
            <h2 class="ir_so">배너 영역</h2>
            <div class="img_type">
                <div class="slider_img">
                    <div class="slider_inner">
                        <div class="slider s1">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>당신이 만들어갈 새로운 이야기<br> 당신도 할 수 있습니다.</p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s2">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>당신이 만들어갈 새로운 이야기<br> 당신도 할 수 있습니다.</p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s3">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>당신이 만들어갈 새로운 이야기<br> 당신도 할 수 있습니다.</p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s4">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>당신이 만들어갈 새로운 이야기<br> 당신도 할 수 있습니다.</p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s5">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>당신이 만들어갈 새로운 이야기<br> 당신도 할 수 있습니다.</p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                        <div class="slider s6">
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>당신이 만들어갈 새로운 이야기<br> 당신도 할 수 있습니다.</p>
                                <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider_arrow">
                        <a href="#" class="prev"><span class="ir_pm">이전 이미지</span></a>
                        <a href="#" class="next"><span class="ir_pm">다음 이미지</span></a>
                    </div>
                    <div class="slider_dot">
                        <!--<a href="#" class="dot active"></a> -->
                        <!-- <a href="#" class="dot"></a> -->
                    </div>
                </div>
             
        </section> 
 
    <!-- //banner -->



    <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center type">
            <div class="container">
                <h3 class="section__title">축구 블로그</h3>
                <p class="section__desc">축구와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p> 
                <div class="blog__inner">
                    <div class="blog__cont">                    
                        <?php
                            $sql = "SELECT * FROM myBlog ORDER BY blogID DESC LIMIT 3";
                            $result = $connect -> query($sql);
                        ?>
                        <?php foreach($result as $blog){ ?>
                                <article class="blog">
                                    <figuer class="blog__header">
                                        <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>)"></a>
                                    </figuer>
                                    <div class="blog__body">
                                        <span class="blog__cate"><?=$blog['blogCategory']?></span>
                                    <div class="blog__title"><a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
                                    <div class="blog__desc"><a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogContents']?></a></div>
                                        <div class="blog__info">
                                            <span class="author"><a href="#"><?=$blog['blogAuthor']?></a></span>
                                            <span class="date"><?=date('Y-m-d H:i:s', $blog['blogRegTime'])?></span>
                                        </div>
                                    </div>
                                </article>
                        <?php } ?>
                    </div>
                    <div class="blog__btn">
                        <a href="../blog/blog.php">더보기</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="quiz-type" class="section center gray">
            <div class="container">
                <h3 class="section__title"><span>자바스크립트</span> 퀴즈</h3>
                <p class="section__desc">코딩에 관련된 퀴즈들 입니다!</p> 
                <div class="quiz__inner">
                    <div class="quiz__header">
                        <div class="quiz__subject">
                            <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject">
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span>
                            <span class="quiz__ask"></span>
                            <div class="quiz__desc"></div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment green none">해설 보기</button>
                            <button class="next orange right ml10 none">다음 문제</button>
                            <button class="confirm green right">정답 확인</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //quizType -->

        <section id="notice-type" class="section center">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">강의와 관련된 새로운 소식입니다. 다양한 정보를 확인하세요!</p>
                <div class="notice__inner">
                    <?php
                

                       $sql = "SELECT * FROM myBoard ORDER BY boardID DESC LIMIT 5";
                       $result = $connect -> query($sql);
                    ?>
                    
                    <article class="notice">
                        <h4>공지사항</h4>
                        <ul>
                            <?php foreach($result as $myBoard){ ?>
                            <li><a href="../board/boardView.php?boardID=<?=$myBoard['boardID']?>"><?=$myBoard['boardTitle']?></a><span class="time"><?=date('Y-m-d', $myBoard['regTime'])?></span></li>
                            <?php } ?>
                        </ul>
                        <a href="../board/board.php" class="more">더보기</a>
                    </article>
                     
                     <article class="notice">
                         <h4>댓글</h4>
                         <ul>
                            <?php                    
                                $sql = "SELECT * FROM myComment ORDER BY commentID DESC LIMIT 5";
                                $result = $connect -> query($sql);
                            ?>
                             <?php foreach($result as $myComment){ ?>
                             <li><a href="../comment/comment.php#comment-type"><?=$myComment['youText']?></a><span class="time"><?=date('Y-m-d', $myComment['regTime'])?></span></li>
                             <?php } ?>
                         </ul>
                         <a href="../comment/comment.php" class="more">더보기</a>
                     </article>
                   
                    
                </div>
            </div>
        </section>
        <!-- //notice-type -->

   

   
   
    </main>
    <!-- //main -->

     <!-- layer -->
     <div class="layer_bg"></div>
    <div class="layer">
        <h2>해설</h2>
        <p></p>
        <button class="close">닫기</> 
    </div>
    <!-- footer -->
    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/quiz.js"></script>
    <script src="js/slide.js"></script>
    <script>
        
    </script>


</body>
</html>