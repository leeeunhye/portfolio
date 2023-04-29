<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/board/write.css" rel="stylesheet">
<script src="../js/board/write.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<!-- con -->
<div id="content" class="wrapper">
    <h2 class="tit">공지사항</h2>
    <!-- 등록 -->
    <form>
        <table class="one">
            <tr>
                <th>ㆍ옵션</th>
                <td>
                    <input type="checkbox" id="chk"><label for="chk">공지</label>
                </td>
            </tr>
            <tr>
                <th>ㆍ출력여부</th>
                <td>
                    <span><input type="radio" name="a" id="output"><label for="output">출력</label></span>
                    <span><input type="radio" name="a" id="hide"><label for="hide">숨기기</label></span>
                </td>
            </tr>
            <tr>
                <th>ㆍ제목</th>
                <td>
                    <input type="text" class="size">
                </td>
            </tr>
        </table>
        <div class="con_box">
            <p class="title">ㆍ내용</p>
            <textarea></textarea>
        </div>
        <table class="two">
            <tr>
                <th>ㆍ링크</th>
                <td>
                    <input type="url" placeholder="http://" class="size">
                </td>
            </tr>
            <tr>
                <th>ㆍ파일 #1</th>
                <td>
                    <input type="file">
                </td>
            </tr>
            <tr>
                <th>ㆍ파일 #2</th>
                <td>
                    <input type="file">
                </td>
            </tr>
        </table>
    </form>
    <!-- //등록 -->
    <!-- 버튼 -->
    <div class="right_btn">
        <a href="#"><p class="btn-red">등록</p></a>
        <a href="notice.php"><p class="btn-normal">취소</p></a>
    </div>
    <!-- //버튼 -->
</div>
<!-- //con -->

<!-- footer -->
<?php include_once "../footer.php"; ?>