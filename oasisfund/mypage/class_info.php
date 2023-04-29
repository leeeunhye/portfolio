<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/mypage/class_info.css" rel="stylesheet">
<link href="../css/mypage/class_info_mediaquery.css" rel="stylesheet">
<script src="../js/mypage/class_info.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<!-- visual -->
<section id="visual">
    <div class="con">등급정보</div>
</section>
<!-- //visual -->
<!-- content -->
<div id="content" class="wrapper">
    <form method="post">
        <div class="order">
            <span class="first title">승인신청</span>
            <span class="arrow"><i class="fas fa-angle-right"></i></span>
            <span class="second title">승인대기중</span>
            <span class="arrow"><i class="fas fa-angle-right"></i></span>
            <span class="lastly title">승인완료</span>
        </div>
        <div class="rating_box">
            <p class="now">
                <span class="s_tit">현재등급</span>
                <span class="desc">
                    <input type="text" class="text" value="일반투자자" readonly>
                </span>
            </p>
            <p class="request">
                <span class="s_tit">요청등급</span>
                <span class="desc">
                    <select class="text">
                        <option>일반투자자</option>
                        <option>소득요건적격투자자</option>
                        <option>전문투자자</option>
                        <option>개인대부업</option>
                        <option>개인대부업 소득적격자</option>
                        <option>개인대부업 전문투자자</option>
                    </select>
                </span>
            </p>
        </div>
        <div class="document_info">
            <h4 class="tit">서류정보</h4>
            <ul class="desc_list">
                <li>&#42; 개인 : 소득요건적격자로 등급 변경을 원하는 경우 원천징수영수증을 업로드 해 주세요.</li>
                <li>&#42; 법인 : 사업자등록증과 법인 등기부등본을 업로드 해 주세요. (대부업의 경우 대부업 등록증도 함께 업로드)</li>
                <li class="blue">※ 업로드 후 연락 바랍니다. &#40;Tel : 1811-8281&#41;</li>
            </ul>
            <ul class="file_box">
                <li>
                    <span class="left">
                        <p class="title">첨부파일 이름</p>
                        <input type="text">
                    </span>
                    <span class="right">
                        <p class="title">첨부파일</p>
                        <input type="file">
                    </span>
                </li>
                <li>
                    <span class="left">
                        <p class="title">첨부파일 이름</p>
                        <input type="text">
                    </span>
                    <span class="right">
                        <p class="title">첨부파일</p>
                        <input type="file">
                    </span>
                </li>
                <li>
                    <span class="left">
                        <p class="title">첨부파일 이름</p>
                        <input type="text">
                    </span>
                    <span class="right">
                        <p class="title">첨부파일</p>
                        <input type="file">
                    </span>
                </li>
                <li>
                    <span class="left">
                        <p class="title">첨부파일 이름</p>
                        <input type="text">
                    </span>
                    <span class="right">
                        <p class="title">첨부파일</p>
                        <input type="file">
                    </span>
                </li>
                <li>
                    <span class="left">
                        <p class="title">첨부파일 이름</p>
                        <input type="text">
                    </span>
                    <span class="right">
                        <p class="title">첨부파일</p>
                        <input type="file">
                    </span>
                </li>
            </ul>
        </div>
        <div class="submit_btn">
            <input type="submit" value="확인">
        </div>
    </form>
</div>
<!-- //content -->
<!-- footer -->
<?php include_once "../footer.php"; ?>