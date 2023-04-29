<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/login/lost_pw.css" rel="stylesheet">
<script src="../js/login/lost_pw.js"></script>

<div id="content">
    <h2 class="tit">비밀번호 찾기</h2>
    <div class="info_box">
        <h3 class="title">오아시스펀드 비밀번호 찾기입니다.</h3>
        <p class="desc">회원가입 시 등록하신 이메일, 이름, 전화번호를 입력해 주세요</p>
        <form method="post">
            <div class="info">
                <input type="text" placeholder="이메일" class="text">
                <input type="text" placeholder="이름" class="text">
                <input type="text" placeholder="전화번호" class="text">
                <div class="submit">
                    <img src="../images/login/submit.png" alt="">
                    <input type="text" class="num text">
                    <p class="s_desc">자동등록방지 숫자를 순서대로 입력하세요.</p>
                </div>
                <input type="submit" value="확 인" class="text btns btn1">
                <a href="#" class="text btns btn2">닫 기</a>
            </div>
        </form>
    </div>
</div>
