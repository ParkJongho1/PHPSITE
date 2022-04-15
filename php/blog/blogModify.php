<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php"; 
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
        <section id="board-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">블로그 수정하기</h3>
                <p class="section__desc">작성하신 블로그 수정해주세요!</p> 
                <div class="blog__inner">
                <div class="blog__write">
                        <form action="blogModifySave.php" name="blogModify" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend class="ir_so">블로그 게시글 수정</legend>
<?php
    $blogID = $_GET['blogID'];
    $sql = "SELECT * FROM myBlog WHERE blogID = {$blogID}";
    $result = $connect -> query($sql);
    $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
?>
                                <div>
                                    <label for="blogCate">카테고리</label>
                                    <select name="blogCate" id="blogCate">
                                        <option value="premierleague" <?php if($blogInfo['blogCategory'] == "premierleague") echo "SELECTED"?>>premierleague</option>
                                        <option value="laliga" <?php if($blogInfo['blogCategory'] == "laliga") echo "SELECTED"?>>laliga</option>
                                        <option value="bundesliga" <?php if($blogInfo['blogCategory'] == "bundesliga") echo "SELECTED"?>>bundesliga</option>
                                        <option value="Ligue1" <?php if($blogInfo['blogCategory'] == "Ligue1") echo "SELECTED"?>>Ligue1</option>
                                        <!-- <option value="premierleague">프리미어리그</option>
                                        <option value="laliga">프리메라리가</option>
                                        <option value="bundesliga">분데스리가</option>
                                        <option value="Ligue1">리그앙</option> -->
                                    </select>
                                <div style='display: none;'>
                                    <label for='blogID'>번호</label>
                                    <input type='text' name='blogID' id='blogID' value="<?=$blogInfo['blogID']?>">
                                </div>
                                <div>
                                    <label for="blogTitle">제목</label>
                                    <input type="text" name="blogTitle" id="blogTitle" value="<?=$blogInfo["blogTitle"]?>">
                                </div>
                                <div>
                                    <label for="blogContents">내용</label>
                                    <textarea name="blogContents" id="blogContents"><?=$blogInfo["blogContents"]?></textarea>
                                </div>
                                <div>
                                    <label for="blogFile">파일</label>
                                    <input type="file" name="blogFile" id="blogFile" placeholder="사진을 넣어주세요! 사진은 jpg, gif, png 파일만 지원이 됩니다." accept=".jpeg, .png, .jpg, .png, gif">
                                </div>
                                <div>
                                    <label for='youPass'>비밀번호</label>
                                    <input type='password' name='youPass' id='youPass' placeholder='로그인 비밀번호를 입력해주세요!'>
                                </div>
                                <button type="submit" value="저장하기" >저장하기</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php include "../include/footer.php";?><!-- //footer -->
    
    
    
</body>
</html>