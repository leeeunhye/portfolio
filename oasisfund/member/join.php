<!-- header -->
<?php include_once "../header.php" ?>

<link href="../css/member/join.css" rel="stylesheet">
<link href="../css/member/join_mediaquery.css" rel="stylesheet">
<script src="../js/member/join.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<div id="content">
    <h2 class="tit">회원가입</h2>
    <form method="post">
        <div class="join_box">
            <ul class="join_nav">
                <li><a href="#">개인</a></li>
                <li><a href="#">법인사업자</a></li>
            </ul>
            <div class="join_content">
                <div class="individual">
                    <div class="group">
                        <label for="userId">이메일[아이디]</label>
                        <div class="id_box">
                            <input type="email">
                            <span class="at">@</span>
                            <select>
                                <option>선택해주세요</option>
                                <option>naver.com</option>
                                <option>gmail.com</option>
                                <option>nate.com</option>
                                <option>yahoo.co.kr</option>
                                <option>hanmail.net</option>
                                <option>daum.net</option>
                                <option>dreamwiz.com</option>
                                <option>lycos.co.kr</option>
                                <option>empal.com</option>
                                <option>korea.com</option>
                                <option>paran.com</option>
                                <option>freechal.com</option>
                                <option>hitel.net</option>
                                <option>hanmir.com</option>
                                <option>hotmail.com</option>
                                <option>직접입력</option>
                            </select>
                            <input type="email" class="input">
                        </div>
                    </div>
                    <div class="group">
                        <label for="userPassword">비밀번호</label>
                        <input type="password">
                        <p class="password_error">영문,숫자,특수문자를 포함하여 8~15 자리로 입력해주시기 바랍니다.</p>
                    </div>
                    <div class="group">
                        <label for="userPassword_confirm">비밀번호 확인</label>
                        <input type="password">
                        <p class="password_confirm_error">비밀번호가 일치하지 않습니다.</p>
                    </div>
                    <div class="group">
                        <label for="name">이름</label>
                        <input type="text">
                    </div>
                    <div class="group">
                        <label for="tel">휴대폰번호</label>
                        <input type="tel" placeholder="'-'를 제외한 숫자만 입력해 주세요.">
                    </div>
                    <div class="group">
                        <select class="subscription">
                            <option>가입경로(선택)</option>
                            <option>네이버검색</option>
                            <option>다음 / 구글검색</option>
                            <option>페이스북</option>
                            <option>카카오톡</option>
                            <option>지인추천</option>
                            <option>신문광고 / 언론기사</option>
                            <option>기타</option>
                        </select>
                    </div>
                    <div class="group join_con">
                        <p class="entity">
                            ※ 소득요건을 구비한 개인투자자 또는 전문투자자로 회원가입을 원하실 경우 회원가입 후 회원등급 페이지에서 아래 서류 제출하시면 인증절차 확인 후 변경됩니다.
                        </p>
                        <p class="title">[필요서류 (PDF스캔본)]</p>
                        <p class="desc">소득요건을 구비한 개인투자자 : 종합소득 과세표준 확정신고서, 종합소득세 신고서 접수증 전문 투자자 : 금융투자협회 전문투자자 확인증</p>
                    </div>
                    <div class="agreement">
                        <div class="all_check">
                            <label class="check">
                                <span class="check_desc">선택항목 전체동의</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <ul class="choice">
                            <li>
                                <label class="check small">
                                    <span class="check_desc">휴대폰으로 받아보기(뉴스레터,투자오픈 알람)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="check small">
                                    <span class="check_desc">서비스이용약관 (필수)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="popup">
                                    <a href="../guide/term.php" onclick="window.open(this.href, '', 'width=900, height=600'); return false;">[전문보기]</a>
                                </span>
                            </li>
                            <li>
                                <label class="check small">
                                    <span class="check_desc">개인정보처리방침 (필수)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="popup">
                                    <a href="../guide/input.php" onclick="window.open(this.href, '', 'width=900, height=600'); return false;">[전문보기]</a>
                                </span>
                            </li>
                            <li>
                                <label class="check small">
                                    <span class="check_desc">이메일 마케팅 수신동의 (선택)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="button">
                        <input type="submit" value="가입완료">
                    </div>
                </div>
                <div class="corporation">
                    <div class="group">
                        <label for="userId">이메일[아이디]</label>
                        <div class="id_box">
                            <input type="email">
                            <span class="at">@</span>
                            <select>
                                <option>선택해주세요</option>
                                <option>naver.com</option>
                                <option>gmail.com</option>
                                <option>nate.com</option>
                                <option>yahoo.co.kr</option>
                                <option>hanmail.net</option>
                                <option>daum.net</option>
                                <option>dreamwiz.com</option>
                                <option>lycos.co.kr</option>
                                <option>empal.com</option>
                                <option>korea.com</option>
                                <option>paran.com</option>
                                <option>freechal.com</option>
                                <option>hitel.net</option>
                                <option>hanmir.com</option>
                                <option>hotmail.com</option>
                                <option>직접입력</option>
                            </select>
                            <input type="email" class="input">
                        </div>
                    </div>
                    <div class="group">
                        <label for="userPassword">비밀번호</label>
                        <input type="password">
                        <p class="password_error">영문,숫자,특수문자를 포함하여 8~15 자리로 입력해주시기 바랍니다.</p>
                    </div>
                    <div class="group">
                        <label for="userPassword_confirm">비밀번호 확인</label>
                        <input type="password">
                        <p class="password_confirm_error">비밀번호가 일치하지 않습니다.</p>
                    </div>
                    <div class="group">
                        <label for="company">법인명</label>
                        <input type="text">
                    </div>
                    <div class="group">
                        <label for="company_tel">법인 대표번호</label>
                        <input type="tel" placeholder="'-'를 제외한 숫자만 입력해 주세요.">
                    </div>
                    <div class="group">
                        <label for="name">담당자 이름</label>
                        <input type="text">
                    </div>
                    <div class="group">
                        <label for="tel">법인 대표번호</label>
                        <input type="tel" placeholder="'-'를 제외한 숫자만 입력해 주세요.">
                    </div>
                    <div class="group">
                        <label for="company_number">사업자등록번호</label>
                        <input type="tel" placeholder="'-'를 제외한 숫자만 입력해 주세요.">
                    </div>
                    <div class="group">
                        <select class="subscription">
                            <option>가입경로(선택)</option>
                            <option>네이버검색</option>
                            <option>다음 / 구글검색</option>
                            <option>페이스북</option>
                            <option>카카오톡</option>
                            <option>지인추천</option>
                            <option>신문광고 / 언론기사</option>
                            <option>기타</option>
                        </select>
                    </div>
                    <div class="group join_con">
                        <p class="entity case">
                            법인 사업자로 회원신청하신경우, 아래의 서류를 회원등급 페이지에서 제출하시면 인증절차 확인 후 회원가입이 완료됩니다.
                        </p>
                        <p class="title">[필요서류 (PDF스캔본)]</p>
                        <ol class="desc">
                            <li>1. 사업자등록증 (대부업의 경우, 대부업등록증 포함)</li>
                            <li>2. 담당자 재직증명서</li>
                            <li>3. 위임장 (법인인감 날인본)</li>
                            <li>4. 법인인감증명서 (1개월이내 발급본)</li>
                            <li>5. 출금계좌 통장사본</li>
                        </ol>
                    </div>
                    <div class="agreement">
                        <div class="all_check">
                            <label class="check">
                                <span class="check_desc">선택항목 전체동의</span>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <ul class="choice">
                            <li>
                                <label class="check small">
                                    <span class="check_desc">휴대폰으로 받아보기(뉴스레터,투자오픈 알람)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="check small">
                                    <span class="check_desc">서비스이용약관 (필수)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="popup">
                                    <a href="/guide/term.php" onclick="window.open(this.href, '', 'width=900, height=600'); return false;">[전문보기]</a>
                                </span>
                            </li>
                            <li>
                                <label class="check small">
                                    <span class="check_desc">개인정보처리방침 (필수)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="popup">
                                    <a href="/guide/input.php" onclick="window.open(this.href, '', 'width=900, height=600'); return false;">[전문보기]</a>
                                </span>
                            </li>
                            <li>
                                <label class="check small">
                                    <span class="check_desc">이메일 마케팅 수신동의 (선택)</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="button">
                        <input type="submit" value="가입완료">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- footer -->
<?php include_once "../footer.php"; ?>