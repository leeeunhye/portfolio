<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/mypage/mypage.css" rel="stylesheet">
<link href="../css/mypage/mypage_mediaquery.css" rel="stylesheet">
<script src="../js/mypage/mypage.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<!-- visual -->
<section id="visual">
    <div class="con">마이 오아시스펀드</div>
</section>
<!-- //visual -->
<div id="content" class="wrapper">
    <div class="info_box clearfix">
        <div class="left">
            <div class="myinfo1">
                <p><img src="../images/mypage/myinfo_men.png" alt=""></p>
                <div class="con">
                    <p class="name">오아시스펀드 님</p>
                    <p class="id">admin</p>
                    <p class="join_date">가입일 : <span class="date">2018.08.07</span></p>
                </div>
                <a href="#" class="btns log_out">로그아웃</a>
                <a href="info01.php" class="btns modified">내 정보 수정</a>
            </div>
            <div class="myinfo2 myinfo">
                <ul class="list">
                    <li class="clearfix">
                        <span class="left_title title">가상계좌정보</span>
                        <a href="info02.php">
                            <span class="right_con right_btn">출금하기</span>
                        </a>    
                    </li>
                    <li class="clearfix">
                        <span class="left_title">보유예치금</span>
                        <span class="right_con">3원</span>
                    </li>
                    <li class="clearfix">
                        <span class="left_title">예금주</span>
                        <span class="right_con">관리자</span>
                    </li>
                    <li class="clearfix">
                        <span class="left_title">은행명</span>
                        <span class="right_con">상호저축은행</span>
                    </li>
                    <li class="clearfix">
                        <span class="left_title">계좌번호</span>
                        <span class="right_con">06640151902609</span>
                    </li>
                </ul>
            </div>
            <div class="myinfo3 myinfo">
                <ul>
                    <li class="clearfix">
                        <span class="left_title">
                            <i class="fas fa-home"></i>대시보드
                        </span>
                        <span class="right_con">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </li>
                    <li class="clearfix">
                        <span class="left_title">
                            <i class="fas fa-sticky-note"></i>투자내역
                        </span>
                        <span class="right_con">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </li>
                    <li class="clearfix">
                        <span class="left_title">
                            <i class="fas fa-won-sign"></i>충전/출금
                        </span>
                        <span class="right_con">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="info_con">
                <!-- 대시보드 -->
                <div class="info1">
                    <ul class="info_list">
                        <li>
                            <img src="../images/mypage/icon01.png" alt="">
                            <p class="title">총 투자금액</p>
                            <p class="money">0원</p>
                        </li>
                        <li>
                            <img src="../images/mypage/icon02.png" alt="">
                            <p class="title">평균 수익률(연)</p>
                            <p class="money">0%</p>
                        </li>
                        <li>
                            <img src="../images/mypage/icon03.png" alt="">
                            <p class="title">누적 이자소득</p>
                            <p class="money">0원</p>
                        </li>
                    </ul>
                    <div class="info_table">
                        <h3 class="s_tit">투자정보</h3>
                        <ul class="info_wrapper">
                            <li class="info_left">
                                <ul class="list">
                                    <li>
                                        <h4 class="title">총 예상수익금 (세후)</h4>
                                        <p class="won">0원</p>
                                    </li>
                                    <li>
                                        <div class="clearfix info_com">
                                            <span class="left_title">누적상환금</span>
                                            <span class="right_won">0원</span>
                                        </div>
                                        <div class="clearfix info_com">
                                            <span class="left_title">- 상환투자 원금</span>
                                            <span class="right_won">0원</span>
                                        </div>
                                        <div class="clearfix info_com">
                                            <span class="left_title">- 상환 이자수익(세후)</span>
                                            <span class="right_won">0원</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clearfix info_com">
                                            <span class="left_title">예정반환금</span>
                                            <span class="right_won">0원</span>
                                        </div>
                                        <div class="clearfix info_com">
                                            <span class="left_title">- 잔여 투자원금</span>
                                            <span class="right_won">0원</span>
                                        </div>
                                        <div class="clearfix info_com">
                                            <span class="left_title">- 잔여 이자수익(세후)</span>
                                            <span class="right_won">0원</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="info_right">
                                <h4 class="title">상환 완료율</h4>
                                <p class="won">0%</p>
                                <div class="graph">
                                    <img src="../images/mypage/graph.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 투자내역 -->
                <div class="info2">
                    <ul class="list">
                        <li>전체<span class="color">0</span>건</li>
                        <li>펀딩 진행 중<span class="color">0</span>건</li>
                        <li>펀딩완료<span class="color">0</span>건</li>
                        <li>상환 중<span class="color">0</span>건</li>
                        <li>상환완료<span class="color">0</span>건</li>
                        <li>
                            연체<span class="color">0</span>건&#47;
                            부도<span class="color">0</span>건
                        </li>
                    </ul>
                    <div class="page">
                        <a href="#">
                            <span class="arrow prev"></span>
                        </a>
                        <a href="#">
                            <span class="num color">1</span>
                        </a>
                        <a href="#">
                            <span class="num">2</span>
                        </a>
                        <a href="#">
                            <span class="arrow next"></span>
                        </a>
                    </div>
                </div>
                <!-- 충전/출금 -->
                <div class="info3">
                    <ul class="tabs">
                        <li>충전</li>
                        <li>입금/출금 내역</li>
                        <!-- 2018-08-22 -->
                        <!-- 변경 -->
                        <li class="info_page"><a href="info02.php">출금</a></li>
                    </ul>
                    <div class="con_box">
                        <div class="list1">
                            <div class="text_con">
                                <p class="possesion">보유 예치금 : 3원</p>
                                <ul class="list">
                                    <li>- 계좌이체 후 충전 반영 시간은 약 1-10분 사이 입니다.</li>
                                    <li>- 충전을 위해 본인인증과 은행정보 등록이 필요합니다.</li>
                                    <li>- 예치금은 가상 계좌에 원화를 충전한 만큼 1:1로 이루어집니다.</li>
                                    <li>- 23:30 ~ 00:30분 사이에는 은행망 점검시간으로 이체가 불가할 수 있습니다</li>
                                </ul>
                            </div>
                            <div class="table_box">
                                <table>
                                    <caption>충전 계좌 번호</caption>
                                    <tr>
                                        <th>은행명</th>
                                        <td>상호저축은행</td>
                                    </tr>
                                    <tr>
                                        <th>예금주</th>
                                        <td>관리자</td>
                                    </tr>
                                    <tr>
                                        <th>계좌번호</th>
                                        <td>06640151902609</td>
                                    </tr>
                                </table>
                                <p class="desc">※ 위 가상계좌 번호로 투자금을 이체하시면 충전된 예치금으로 투자가 가능합니다.</p>
                            </div>
                        </div>
                        <div class="list2">
                            <p class="excel"><a href="#"><span class="btn_yellow">엑셀다운로드</span></a></p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>구분</th>
                                        <th>거래시각</th>
                                        <th>예치금 잔액</th>
                                        <th>비고</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <p class="date">2018-05-10</p>
                                            <p class="time">16:03:27</p>
                                        </td>
                                        <td>
                                            <p class="won">3원</p>
                                            <p class="deposit">&#40;1원&#41; 입금</p>
                                        </td>
                                        <td>
                                            관리자 이체
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <p class="date">2018-05-10</p>
                                            <p class="time">16:03:27</p>
                                        </td>
                                        <td>
                                            <p class="won">3원</p>
                                            <p class="deposit">&#40;1원&#41; 입금</p>
                                        </td>
                                        <td>
                                            관리자 이체
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <p class="date">2018-05-10</p>
                                            <p class="time">16:03:27</p>
                                        </td>
                                        <td>
                                            <p class="won">3원</p>
                                            <p class="deposit">&#40;1원&#41; 입금</p>
                                        </td>
                                        <td>
                                            관리자 이체
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="page">
                                <a href="#">
                                    <span class="arrow prev"></span>
                                </a>
                                <a href="#">
                                    <span class="num color">1</span>
                                </a>
                                <a href="#">
                                    <span class="num">2</span>
                                </a>
                                <a href="#">
                                    <span class="arrow next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once "../footer.php"; ?>