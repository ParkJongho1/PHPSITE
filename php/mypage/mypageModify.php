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
        
                <form action="mypageSave.php" name="join" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="ir_so">회원정보 입력폼</legend>
                        <div class="join-intro">
                            <div class="face">
                                <img src="../assets/img/mypage/default.svg" alt="기본이미지">
                            </div>
                        </div>
                        <div class="join-box">
                        <?php
                            $memberID = $_SESSION['memberID'];
                            $sql = "SELECT * FROM myMember WHERE memberID = '$memberID'";
                            $result = $connect -> query($sql);
                            if($result){
                                $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);   
                            // <div>
                            //     <label for="blogFile">파일</label>
                            //     <input type="file" name="blogFile" id="blogFile" placeholder="사진을 넣어주세요! 사진은 jpg, gif, png 파일만 지원이 됩니다." accept=".jpeg, .png, .jpg, .png, gif">
                            // </div>
                                echo "<div class='label_box'><label for='youPhoto'>파일</label><input type='file' class='input file'  id='youPhoto' name='youPhoto' placeholder='사진을 넣어주세요! 사진은 jpg, gif, png 파일만 지원이 됩니다.' accept='.jpeg, .png, .jpg, .png, gif'>";
                                echo "<div class='modify'><label for='youEmail'>이메일</label><input type='email' id='youEmail' value='".$mypageInfo['youEmail']."' name='youEmail' autocomplete='off'></div>";
                                echo "<div class='modify'><label for='youName'>이름</label><input type='text' id='youName' value='".$mypageInfo['youName']."' name='youName' autocomplete='off'></div>";
                                echo "<div class='modify'><label for='youBirth'>생년월일</label><input type='text' id='youBirth' value='".$mypageInfo['youBirth']."' name='youBirth' autocomplete='off'></div>";
                                echo "<div class='modify'><label for='youPhone'>휴대폰 번호</label><input type='text' id='youPhone' value='".$mypageInfo['youPhone']."' name='youPhone' autocomplete='off'></div>";
                                echo "<div class='modify'><label for='youNickName'>닉네임</label><input type='text' id='youGender' value='".$mypageInfo['youNickName']."' name='youNickName' autocomplete='off'></div>";
                                echo "<div class='modify'><label for='youIntro'>자기소개</label><input type='text' id='youIntro' value='".$mypageInfo['youIntro']."' name='youIntro' autocomplete='off'></div>";
                                echo "<div class='modify'><label for='youSite'>사이트소개</label><input type='text' id='youSite' value='".$mypageInfo['youSite']."' name='youSite' autocomplete='off'></div>";
                                echo "<div><label for='youPass'>비밀번호 입력</label><input type='password' id='youPass' name='youPass' placeholder='로그인 비밀번호를 입력해주세요!' maxlength='15' autocomplete='off' required></div>";
                            }
                        ?>
                            <!-- <div class="modify">
                                <label for="youEmail">이메일</label>   
                                <input type="email" id="youEmail" name="youEmail" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youName">이름</label>   
                                <input type="text" id="youName" name="youName" maxlength="5" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youBirth">생년월일</label>   
                                <input type="text" id="youBirth" name="youBirth" maxlength="12" autocomplete="off">
                            </div>
                            <div class="modify">
                                <label for="youPhone">휴대폰 번호</label>   
                                <input type="text" id="youPhone" name="youPhone" maxlength="15" autocomplete="off">
                            </div>
                            <div>
                                <label for="youPass">비밀번호 입력</label>   
                                <input type="password" id="youPass" name="youPass" placeholder="로그인 비밀번호를 입력해주세요!" maxlength="15" autocomplete="off" required>
                            </div> -->
                        </div>
                        <button id="joinBtn" class="join-submit" type="submit">회원정보 수정</button>
                    </fieldset>
                </form>
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