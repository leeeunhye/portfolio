<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/mypage/info01.css" rel="stylesheet">
<link href="../css/mypage/info01_mediaquery.css" rel="stylesheet">
<script src="../js/mypage/info01.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<!-- visual -->
<section id="visual">
    <div class="con">회원정보</div>
</section>
<!-- //visual -->
<!-- content -->
<div id="content" class="wrapper">
    <ul class="tabs">
        <li class="active"><a href="info01.php">회원정보</a></li>
        <li><a href="info02.php">계좌정보</a></li>
    </ul>
    <form method="post">
        <div class="con_box">
            <div class="nav">
                <span class="left">회원정보 변경</span>
                <span class="right">비밀번호 변경</span>
            </div>
            <div class="table_box">
                <div class="table1">
                    <table class="one">
                        <tr>
                            <th>본인인증</th>
                            <td>
                                <input type="button" value="본인인증 하기" class="button">
                                <span class="desc">개인정보 변경 시 사용</span>
                            </td>
                        </tr>
                        <tr class="name">
                            <th>이름</th>
                            <td>
                                <input type="input" class="text">
                            </td>
                        </tr>
                        <tr class="phone">
                            <th>휴대폰번호</th>
                            <td>
                                <input type="input" class="text">
                            </td>
                        </tr>
                        <tr class="security">
                            <th>주민등록번호</th>
                            <td>
                                <input type="text" class="text"><span class="dash">-</span>  
                                <input type="text" class="text">
                            </td>
                        </tr>
                        <tr class="address">
                            <th>주소</th>
                            <td>
                                <input type="text" class="text">
                                <input type="button" value="우편번호 찾기" class="button add">
                                <input type="text" class="text long">
                                <input type="text" class="text long">
                                <input type="text" class="text long">
                            </td>
                        </tr>
                        <tr>
                            <th>알림설정</th>
                            <td>
                                <input type="checkbox" id="a1" class="check">
                                <label for="a1">이메일 수신동의</label>
                                <input type="checkbox" id="a2" class="check">
                                <label for="a2">SMS(문자) 수신동의</label>
                            </td>
                        </tr>
                        <tr>
                            <th>인증번호 설정</th>
                            <!-- 2018-08-22 -->
                            <!-- 변경 -->
                            <td>
                                <input type="radio" id="b1" class="radio" name="b">
                                <label for="b1">1688-xxxx</label>
                                <input type="radio" id="b2" class="radio" name="b">
                                <label for="b2">015-xxxx-xxxx</label>
                            </td>
                            <!-- //변경 -->
                        </tr>
                    </table>
                    <div class="submit">
                        <input type="submit" value="수정완료">
                    </div>
                </div>
                <div class="table2">
                    <table class="two">
                        <tr>
                            <th>현재 비밀번호</th>
                            <td>
                                <input type="password" class="pw">
                            </td>
                        </tr>
                        <tr>
                            <th>새 비밀번호</th>
                            <td>
                                <input type="password" class="pw">
                            </td>
                        </tr>
                        <tr>
                            <th>새 비밀번호 확인</th>
                            <td>
                                <input type="password" class="pw">
                            </td>
                        </tr>
                    </table>
                    <div class="submit">
                        <input type="submit" value="수정완료">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- //content -->
<!-- footer -->
<?php include_once "../footer.php"; ?>