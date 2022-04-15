<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 정보</title>

    <?php 
        include "../include/style.php";
    ?>
</head>
<body>
    <?php 
        include "../include/skip.php";
    ?>
    <!-- //skip --> 
    <?php 
        include "../include/header.php";
    ?>
    <!-- //header -->

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원 정보</h3>
                <div class="join-intro">
                    <div class="face">
    <?php
        $memberID = $_SESSION['memberID'];
        $sql = "SELECT * FROM myMember WHERE memberID = '$memberID'";
        $result = $connect -> query($sql);
        $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);
        if($mypageInfo['youPhoto'] == null || false){
           $mypageInfo['youPhoto'] = "default.svg";
        }
    ?>
                        <div class="face__img">
                            
                            <img src="../assets/img/mypage/<?=$mypageInfo['youPhoto']?>" alt="기본이미지">
                        </div>
                    </div>
    <?php   
        //youEmail, youNickName, youName, youBirth, youPhone, youGender, youIntro, youSite
        echo "<div class='intro'>".$mypageInfo['youIntro']."</div>";
    ?>
                </div>
                <div class="join-info">
                    <ul>
    <?php
        echo "<li><strong>이메일</strong><span>".$mypageInfo['youEmail']."</span></li>";
        echo "<li><strong>이름</strong><span>".$mypageInfo['youName']."</span></li>";
        echo "<li><strong>닉네임</strong><span>".$mypageInfo['youNickName']."</span></li>";
        echo "<li><strong>생일</strong><span>".$mypageInfo['youBirth']."</span></li>";
        echo "<li><strong>번호</strong><span>".$mypageInfo['youPhone']."</span></li>";
        // echo "<li><strong>성별</strong><span>".$mypageInfo['youGender']."</span></li>";
        echo "<li><strong>사이트</strong><span>".$mypageInfo['youSite']."</span></li>";
        //이메일
        //닉네임
        //이름
        //생일
        //번호
        //성별
        //사이트
    ?>
                        
                    </ul>
                </div>

                <div class="join-btn">
                    <a href="mypageModify.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                    <a href="../login/logout.php">로그아웃</a>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->    

    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>