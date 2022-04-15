<header id="header">
    <h1 class="logo"> 
        <a href="../pages/main.php">PHP <em>class</em></a>
    </h1>
    <nav class="menu">
        <h2 class="ir_so">메인 메뉴</h2>
        <ul>
            <?php if(isset($_SESSION['memberID'])){ ?>
            <li><a href="../pages/main.php">메인페이지</a></li>
           <?php } else { ?>
                <li><a href="../login/join.php">회원가입</a></li>
            <?php } ?>
            <li><a href="../comment/comment.php">댓글</a></li>
            <li><a href="../board/board.php">게시판</a></li>
            <li><a href="../blog/blog.php">블로그</a></li>
            <li><a href="../quiz/quiz.php">퀴즈</a>
                <ul class="sub">
                    <li><a href="../quiz/quizCreate.php">문제 만들기</a></li>
                    <li><a href="../quiz/quiz.php">문제 풀기</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="member">
        <span class="ir_so">회정 정보 영역</span>
        <?php if(isset($_SESSION['memberID'])){
            $memberID = $_SESSION['memberID'];
                $sql ="SELECT * FROM myMember WHERE memberID = {$memberID}";
                $result = $connect -> query($sql);
                if($result){
                    $headerimg = $result -> fetch_array(MYSQLI_ASSOC);
                }
                if($headerimg['youPhoto'] == null || false){
                   $headerimg['youPhoto'] = "default.svg";
                 }
        ?>
            <a href="../mypage/mypage.php" class="setting">
            <div class="Photo">
                <img src="../assets/img/mypage/<?=$headerimg['youPhoto']?>" alt="이미지">
            </div>
                <?=$_SESSION['youName']?>님 환영합니다.
            </a>    
        <?php } else { ?>
            <a href="../login/join.php">회원가입</a>    
            <a href="../login/login.php">로그인</a>
        <?php } ?>
    </div>
</header>