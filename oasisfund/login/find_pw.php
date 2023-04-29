<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/login/find_pw.css" rel="stylesheet">
<link href="../css/login/find_pw_mediaquery.css" rel="stylesheet">
<script src="../js/login/find_pw.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<div id="content">
    <h2 class="tit">비밀번호 재발급</h2>
    <form method="post">
        <div class="pw_box">
            <p class="desc">
                가입시 입력하신 이메일을 통해<br>
                새로운 비밀번호를 발급받으실 수 있습니다.
            </p>
            <div class="input">
                <input type="email" placeholder="가입시 사용한 이메일을 입력해 주세요.">
            </div>
            <div class="button">
                <input type="submit" value="비밀번호 재발급">
            </div>
        </div>
    </form>
</div>

<!-- footer -->
<?php include_once "../footer.php"; ?>