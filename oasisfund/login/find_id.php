<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/login/find_id.css" rel="stylesheet">
<link href="../css/login/find_id_mediaquery.css" rel="stylesheet">
<script src="../js/login/find_id.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<div id="content">
    <h2 class="tit">아이디찾기</h2>
    <form method="post">
        <div class="id_box">
            <p class="desc">
                가입시 입력하신 휴대폰 번호를 통해<br>
                메세지로 아이디를 받으실 수 있습니다.
            </p>
            <div class="input">
                <input type="tel" placeholder="휴대폰번호">
                <select>
                    <option>개인</option>
                    <option>법인</option>
                </select>
            </div>
            <div class="button">
                <input type="submit" value="SMS로 아이디 받기">
            </div>
        </div>
    </form>
</div>

<!-- footer -->
<?php include_once "../footer.php"; ?>