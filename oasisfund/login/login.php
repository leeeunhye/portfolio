<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/login/login.css" rel="stylesheet">
<link href="../css/login/login_mediaquery.css" rel="stylesheet">
<script src="../js/login/login.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<div id="content">
    <h2 class="tit">로그인</h2>
    <form method="post">
        <div class="login_box">
            <ul class="info">              
                <li>
                    <input type="email" placeholder="이메일">
                    <i class="fas fa-user"></i>
                </li>
                <li>
                    <input type="password" placeholder="비밀번호">
                    <i class="fas fa-lock"></i>
                </li>
            </ul>
            <div class="button">
                <input type="submit" value="로그인">
            </div>
            <ul class="login_link">
                <li><a href="../member/join.php">회원가입</a></li>
                <li><a href="find_id.php">아이디찾기</a></li>
                <li><a href="find_pw.php">이메일 비밀번호 재발급</a></li>
                <li>
                    <a href="lost_pw.php" onClick="window.open(this.href, '', 'width=600, height=550'); return false;">
                        SMS 비밀번호 재발급
                    </a>
                </li>
            </ul>
        </div>
    </form>
</div>

<!-- footer -->
<?php include_once "../footer.php"; ?>