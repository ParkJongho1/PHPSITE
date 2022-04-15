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
    <title>댓글</title>
    <link rel="stylesheet" href="../asset/css/fonts">
    <!-- style -->
    <?php
        include "../include/style.php";
    ?>
    <!-- //style -->
</head>
<body>

    <!-- skip -->
    <?php
        include "../include/skip.php";
    ?>
    <!-- //skip -->

     <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">EPL 우승팀은 어딜까요!?</h3>
                <p class="section__desc">
                Manchester City FC, Liverpool FC, Chelsea FC 중 우승팀은 어디일까요!?<br>
                    Gmarket Sans Light 22px 150% #67778A 
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/cardimg1.png" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">Manchester City</h3>
                            <p class="card__desc">영국 잉글랜드 프리미어 리그의 프로 축구 클럽. 연고지는 맨체스터. 홈 구장은 에티하드 스타디움. 1880년 세인트 마크스라는 이름으로 창단하여 1887년 아드윅 AFC로 바꿨다가 1894년에 맨체스터 시티로 처음 시작하게 되었다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg> 
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header"> 
                            <img class="card__img" src="../assets/img/cardimg2.png" alt="이미지2">  
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">Liverpool FC</h3>
                            <p class="card__desc">잉글랜드 프리미어 리그의 프로 축구 클럽. 연고지는 머지사이드 주 리버풀. 홈 구장은 안필드. 1892년에 창단되어 빌 샹클리와 밥 페이즐리 감독 시절, 붉은 제국이라 불리는 전성기를 보냈다. 이스탄불의 기적의 주인공이기도 하다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/cardimg3.png" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">Chelsea FC</h3>
                            <p class="card__desc">영국 잉글랜드 프리미어 리그의 프로 축구 클럽. 연고지는 런던 해머스미스 앤 풀럼. 홈 구장은 스탬퍼드 브리지. 1880년 세인트 마크스라는 이름으로 창단하여 1887년 아드윅 AFC로 바꿨다가 1894년에 맨체스터 시티로 처음 시작하게 되었다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- //card-type -->

        <section id="comment-type" class="section center gray">
            <h3 class="section__title">우승팀 댓글쓰기!</h3>
            <p class="section__desc">우승팀 댓글쓰기는누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능합니다. 100글자 이내로 써주ㅠ세요.</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment"> 
                        <fieldset>
                            <legend class="ir_so">댓글쓰기</legend>
                            <div class="comment__wrap">
                                <div>
                                    <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youText" class="ir_so">댓글 쓰기</label>
                                    <input type="text" name="youText" id="youText" class="input__style width" placeholder="우승팀과 이유를 적어주세요!" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="submit" value="댓글 작성하기">작성하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">
                <!-- <div class="list">
                    <p class="comment__desc">맨시티가 우승이에요!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p>
                    <div class="comment__icon">
                    <span class="face"><img src="../assets/img/face2@2x.png" alt="얼굴"></span>
                        <span class="name">박종호</span>
                        <span class="date">2022-03-11</span> 
                    </div>
                </div>  -->
                <?php
                     $sql = "SELECT * FROM myComment";
                     $result = $connect -> query($sql);
                     if($result){
                         $count = $result -> num_rows;
                        
                         if($count > 0){
                            for($i=1; $i<=$count; $i++){
                                $commentInfo  = $result -> fetch_array(MYSQLI_ASSOC);
                                echo "<div class='list'>";
                                echo "<p class='comment__desc'>".$commentInfo['youText']."</p>";
                                echo "<div class='comment__icon'>";
                                echo "<span class='face'><img src='../assets/img/face2@2x.png' alt='얼굴'></span>";
                                echo "<span class='name'>".$commentInfo['youName']."</span>";
                                echo "<span class='date'>".date('Y-m-d', $commentInfo['regTime'])."</span>";
                                echo "</div>";
                                echo "</div>";
                            }
                         }
                     }
           
                    // while($commentInfo = $result -> fetch_array(MYSQLI_ASSOC)){
                    //     <div class="list">
                    //         <p class="comment__desc">$commentInfo['youText']</p>
                    //         <div class="comment__icon">
                    //             <span class="face"><img src="../assets/img/face2@2x.png" alt="얼굴"></span>
                    //             <span class="name">$commentInfo['youName']</span>
                    //             <span class="date">date('Y-m-d', $commentInfo['regTime'])</span>
                    //         </div>
                    //     </div>

                    // echo "<pre>";
                    // var_dump($commentInfo);
                    // echo "</pre>";
                    ?>
                
            </div>
        </section>
    </main>


    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
    
</body>
</html>