<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/mypage/info02.css" rel="stylesheet">
<link href="../css/mypage/info02_mediaquery.css" rel="stylesheet">
<script src="../js/mypage/info02.js"></script>

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
        <li><a href="info01.php">회원정보</a></li>
        <li class="active"><a href="info02.php">계좌정보</a></li>
    </ul>
    <form method="post">
        <div class="con_box">
            <div class="top_table">
                <h3 class="title">투자가상계좌</h3>
                <table class="one">
                    <tr>
                        <th>계좌</th>
                        <td><input type="text" class="text long" readonly value="상호저축은행 06640151902609"></td>
                    </tr>
                    <tr>
                        <th>예금주</th>
                        <td><input type="text" class="text long" readonly value="오아시스펀드"></td>
                    </tr>
                    <tr>
                        <th>잔액</th>
                        <td><input type="text" class="text long" readonly value="3 원"></td>
                    </tr>
                </table>
            </div>
            <div class="bottom_table">
                <h3 class="title">수취계좌등록</h3>
                <table class="two">
                    <tr>
                        <th>계좌</th>
                        <td>
                            <select class="long">
                                <option>은행을 선택하세요</option>
                                <option>기업은행</option>
                                <option>국민은행</option>
                                <option>SC제일은행</option>
                                <option>신한은행</option>
                                <option>농협은행(중앙회)</option>
                                <option>우리은행</option>
                                <option>상호저축은행</option>
                                <option>하나은행</option>
                                <option>카카오뱅크</option>
                                <option>산업은행</option>
                                <option>부산은행</option>
                                <option>새마을금고</option>
                                <option>케이뱅크은행</option>
                                <option>수협</option>
                                <option>한국씨티은행</option>
                                <option>수출입</option>
                                <option>농축협조합(지역농협)</option>
                                <option>대구은행</option>
                                <option>우체국</option>
                                <option>신협</option>
                                <option>경남은행</option>
                                <option>HSBC</option>
                                <option>광주은행</option>
                                <option>(구)조흥은행</option>
                                <option>전북은행</option>
                                <option>제주은행</option>
                                <option>기술신용보증기금</option>
                                <option>오픈은행</option>
                                <option>도이치은행</option>
                                <option>비엔피파리바은행</option>
                                <option>산림조합중앙회</option>
                                <option>제이피모간체이스은행</option>
                                <option>BOA은행</option>
                                <option>중국공상은행</option>
                                <option>유진투자증권</option>
                                <option>신한금융투자</option>
                                <option>메리츠종합금융증권</option>
                                <option>동부증권</option>
                                <option>키움증권</option>
                                <option>하나금융투자</option>
                                <option>미래에셋증권</option>
                                <option>대우증권</option>
                                <option>현대증권</option>
                                <option>유안타증권</option>
                                <option>에스케이증권</option>
                                <option>HMC투자증권</option>
                                <option>NH투자증권</option>
                                <option>아이엠투자증권</option>
                                <option>한국투자증권 </option>
                                <option>교보증권</option>
                                <option>엘아이지투자증권</option>
                                <option>한화투자증권</option>
                                <option>삼성증권</option>
                                <option>신영증권</option>
                                <option>대신증권</option>
                                <option>펀드온라인코리아</option>
                                <option>이베스트투자증권</option>
                            </select>
                            <input type="text" class="text long" placeholder="계좌번호 입력">
                        </td>
                    </tr>
                    <tr>
                        <th>예금주</th>
                        <td><input type="text" class="text long"></td>
                    </tr>
                </table>
                <div class="submit">
                    <input type="submit" value="수취계좌 등록">
                </div>
            </div>
        </div>
    </form>
</div>
<!-- //content -->
<!-- footer -->
<?php include_once "../footer.php"; ?>