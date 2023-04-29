<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/board/notice_sub.css" rel="stylesheet">
<link href="../css/board/notice_sub_mediaquery.css" rel="stylesheet">
<script src="../js/board/notice_sub.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<div id="content" class="wrapper">
    <h2 class="tit">공지사항</h2>
    <div class="con_box">
        <ul class="table_header info">
            <li class="num"><span class="labels">공지</span></li>
            <li class="desc">오아시스펀드 부동산 PF 취급규정 안내</li>
            <li class="date">2018-06-14</li>
        </ul>
        <div class="con">
            공지사항 테스트입니다
        </div>
        <ul class="table_footer info">
            <li>
                <a href="#">
                    <span class="num">다음</span>
                    <span class="desc">오아시스펀드 부동산 PF 취급규정 안내</span>
                    <span class="date">2018-06-14</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="num">이전</span>
                    <span class="desc">테스트중입니다.</span>
                    <span class="date">2018-06-14</span>
                </a>
            </li>
        </ul>
        <div class="con_btn">
            <p class="list"><a href="notice.php">목록보기</a></p>
            <!-- 관리자페이지 일때만 보인다 -->
            <div class="right_btn">
                <a href="write.php">수정</a>
                <a href="#">삭제</a>
                <a href="write.php">글쓰기</a>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include_once "../footer.php"; ?>