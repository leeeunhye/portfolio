<!-- header -->
<?php include_once "../header.php" ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="../css/invest/sub.css" rel="stylesheet">
<link href="../css/invest/sub_mediaquery.css" rel="stylesheet">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/invest/sub.js"></script>

<!-- gnb -->
<?php include_once "../gnb.php" ?>

<!-- container -->
<section id="container" class="wrapper">
    <p class="period">모집기간 : 2018.07.10 ~ 2018.10.10</p>
    <div class="tit">
        [제 00차] 중구 신당동 담보주택 담보대출
        <span class="item_label">1순위</span>
    </div>
    <!-- information -->
    <div class="information clearfix">
        <!-- left -->
        <div class="left"></div>
        <!-- //left -->
        <!-- right -->
        <div class="right">
            <!-- progress -->
            <div class="progress">
                <div class="progress_bar"></div>
            </div>
            <!-- //progress -->
            <!-- detail_wrapper -->
            <div class="detail_wrapper">
                <!-- condition -->
                <div class="condition clearfix">
                    <div class="left_percent">
                        35%
                    </div>
                    <div class="right_icon">
                        <img src="../images/invest/condition_icon1.png" alt="">모집중
                    </div>
                </div>
                <!-- //condition -->
                <!-- value -->
                <div class="value clearfix">
                    <div class="left_value">
                        <span class="amount">2억 1,560만원</span> / 6억원
                    </div>
                    <div class="right_participation">
                        249명 참여
                    </div>
                </div>
                <!-- //value -->
                <!-- con_box -->
                <ul class="con_box">
                    <li class="clearfix">
                        <div class="stit_left">예상 수익률(연)</div>
                        <p class="desc_right">8.5%</p>
                    </li>
                    <li class="clearfix">
                        <div class="stit_left">예상 투자기간</div>
                        <p class="desc_right">3개월</p>
                    </li>
                    <li class="clearfix">
                        <div class="stit_left">평가등급</div>
                        <p class="desc_right">A2</p>
                    </li>
                    <li class="clearfix">
                        <div class="stit_left info">
                            <p class="ltv">LTV<img src="../images/invest/ltv_icon.png" alt=""></p>
                            <div class="explanation">
                                <h5 class="title">LTV(Loan To Value ratio)</h5>
                                <p class="desc">준공 후 예상가치 대비 대출 비율로, 비율이 낮을수록 안정성이 높은 상품입니다.</p>
                            </div>
                        </div>
                        <p class="desc_right">65%</p>
                    </li>
                </ul>
                <!-- //con_box -->
                <!-- fund -->
                <div class="fund clearfix">
                    <div class="price">
                        <p class="s_tit">투자금액</p>
                        <select>
                            <option>10만원</option>
                            <option>50만원</option>
                            <option>100만원</option>
                            <option>300만원</option>
                            <option>300만원</option>
                            <option>500만원</option>
                            <option>1,000만원</option>
                            <option>직접입력</option>
                        </select>
                        <span class="recommend">
                            <input type="text" maxlength="10" placeholder="0" autofocus="autofocus">
                            <span class="input_unit">만원</span>
                        </span>
                    </div>
                    <button>투자하기</button>
                </div>
                <!-- //fund -->
            </div>
            <!-- //detail_wrapper -->
        </div>
        <!-- //right -->
    </div>
    <!-- //information -->
    <!-- nav_tabs -->
    <ul class="nav_tabs">
        <li>기본정보</li>
        <li>수익계산</li>
    </ul>
    <!-- //nav_tabs -->
    <!-- content -->
    <div class="content">
        <!-- sec1 -->
        <ul class="sec sec1">
            <!-- 투자정보 -->
            <li class="section1">
                <h3 class="title">투자정보</h3>
                <ul class="list con_box">
                    <li>
                        <h4 class="sub_tit">· 투자상품</h4>
                        <p class="sub_desc">2순위 부동산 담보채권</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 모집금액</h4>
                        <p class="sub_desc">6억원</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 연수익률</h4>
                        <p class="sub_desc">8.5%</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 투자기간</h4>
                        <p class="sub_desc">3개월</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 상환예정</h4>
                        <p class="sub_desc">2018년 10월 19 (대출 실행일이 지연될 경우 만기 변동 가능)</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 상환방식</h4>
                        <p class="sub_desc">매월 수익금 지급 후 원금은 만기 일시 상환(일부 또는 전액 조기 상환 가능)
                            <span>※ 매월 25일 ~ 말일에 대출 실행된 상품의 첫 수익금은 [다다음달] 첫 영업일에 지금</span>
                        </p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 자금용도</h4>
                        <p class="sub_desc">사업자금</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 담보 설정방법</h4>
                        <p class="sub_desc">2순위 근저당권 설정</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 상환정책</h4>
                        <ol class="sub_desc">
                            <li>1. 차주 자본 상환 : 대출자가 보유한 자금으로 원리금을 상환합니다.</li>
                            <li>2. 리파이낸싱 : 오아시스펀드 또는 타 금융기간 대환대출을 통해 원리금을 상환합니다.</li>
                            <li>3. 채권매각(NPL) : NPL 매입업체에 채권을 매각하여 원리금을 상환합니다.</li>
                            <li>4. 법원경매 : 경매 신청 후 낙찰대금으로 원리금을 상환합니다.</li>
                        </ol>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 동일차주 대출현황</h4>
                        <p class="sub_desc">없음 (대출실행금액 기준)</p>
                    </li>
                </ul>
            </li>
            <!-- 핵심 투자 포인트 -->
            <li class="section2">
                <h3 class="title">핵심 투자 포인트</h3>
                <div class="point con_box">
                    <div class="point1">
                        <p class="sub_title">풍부한 주거수요, 우수한 입지여건</p>
                        <ul class="sub_desc">
                            <li>화성향남지구 상업지역에 위치해 다양한 신도시 인프라 이용 용이</li>
                            <li>초중고를 비롯 체육시설, 공원, 관공서 등 주거편의시설 도보권 위치</li>
                            <li>인근 발안산업단지(310개사 입주 / 고용인구 5,000여명), 향남제약단지(42개사 / 3,000여명)을 비롯, 장안, 동방단지 등 산업단지의 주거 및 임대수요 풍부</li>
                            <li>동측 35m, 서측 16m 도로에 연접한 도로 접근성 우수한 입지</li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- 담보 정보 -->
            <li class="section3">
                <h3 class="title">담보 정보</h3>
                <div class="con_box">
                    <ul class="list">
                        <li>
                            <h4 class="sub_tit">· 담보위치</h4>
                            <p class="sub_desc">서울 중구 신당동 4**-***</p>
                        </li>
                        <li>
                            <h4 class="sub_tit">· 면적/평형</h4>
                            <p class="sub_desc">전용면적 547㎡ / 연면적 619.43㎡</p>
                        </li>
                        <li>
                            <h4 class="sub_tit">· 담보시세</h4>
                            <p class="sub_desc">담보가치 : 43.8억원</p>
                        </li>
                    </ul>
                    <div class="images clearfix">
                        <div class="left_img">
                            <img src="../images/invest/reference.gif" alt="">
                        </div>
                        <div class="right_img">
                            <!-- 1. 약도 노드 -->
                            <div id="daumRoughmapContainer1531892899412" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                            <!-- 2. 설치 스크립트 -->
                            <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
                            <!-- 3. 실행 스크립트 -->
                            <script charset="UTF-8">
                                new daum.roughmap.Lander({
                                    "timestamp" : "1531892899412",
                                    "key" : "p4wo",
                                    "mapWidth" : "600",
                                    "mapHeight" : "350"
                                }).render();
                            </script>
                        </div>
                    </div>
                </div>
            </li>
            <!-- 담보평가 -->
            <li class="section4">
                <h3 class="title">담보평가</h3>
                <div class="evaluation con_box clearfix">
                    <div id="chartContainer" class="left_canvas"></div>
                    <div class="right_con">
                        <div class="s_title clearfix">
                            <span class="s_tit">담보가치</span>
                            <span class="value">46.8억원</span>
                        </div>
                        <div class="desc_box">
                            <div class="first clearfix">
                                <span class="colors"></span>
                                <span class="s_tit">1순위 대출금</span>
                                <span class="value">0.5억원</span>
                            </div>
                            <div class="recruit clearfix">
                                <span class="colors"></span>
                                <span class="s_tit">모집중</span>
                                <span class="value">1억원</span>
                            </div>
                            <div class="schedule clearfix">
                                <span class="colors"></span>
                                <span class="s_tit">모집예정</span>
                                <span class="value">18.5억원</span>
                            </div>
                            <div class="remainder clearfix">
                                <span class="colors"></span>
                                <span class="s_tit">잔여여유금</span>
                                <span class="value">16.3억원</span>
                            </div>
                        </div>
                        <p class="warn">※ 대출자의 요청에 의해 모집금액이 변경될 수 있으며, 이로 인해 펀딩이 조기 마감될 수 있습니다.</p>
                    </div>
                </div>
            </li>
            <!-- 평가등급 -->
            <li class="section5">
                <h3 class="title">평가등급</h3>
                <div class="con_box">
                    <div class="rating clearfix">
                        <div class="left_rating">
                            A2
                            <p class="score">
                                (90 / 100점)
                            </p>
                        </div>
                        <div class="right_rating">
                            <ul class="unit">
                                <li>A1</li>
                                <li>
                                    <span class="active">A2</span>
                                </li>
                                <li>A3</li>
                                <li>B1</li>
                                <li>B2</li>
                                <li>B3</li>
                                <li>C1</li>
                                <li>C2</li>
                                <li>C3</li>
                                <li>D1</li>
                                <li>D2</li>
                                <li>D3</li>
                                <li>E1</li>
                                <li>E2</li>
                                <li>E3</li>
                            </ul>
                            <ul class="bar">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li class="color"></li>
                            </ul>
                            <div class="grade clearfix">
                                <div class="left_grade">상위등급</div>
                                <div class="right_grade">하위등급</div>
                            </div>
                        </div>
                    </div>
                    <table>
                        <colgroup>
                            <col width="180px">
                            <col width="780px">
                            <col width="260px">
                        </colgroup>
                        <!-- thead -->
                        <thead>
                            <tr>
                                <th>항목</th>
                                <th>설명</th>
                                <th>평가점수</th>
                            </tr>
                        </thead>
                        <!-- //thead -->
                        <!-- tbody -->
                        <tbody>
                            <tr>
                                <td>안정성</td>
                                <td>
                                    선순위 금액을 포함한 담보인정비율(LTV), 대출 실행 후 부동산의 잔존가치 등
                                </td>
                                <td>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>환가성</td>
                                <td>
                                    KB시세, 국토교통부 실거래가, 법원 감정가, 경공매 낙찰가(매각가) 등
                                </td>
                                <td>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>시장성</td>
                                <td>
                                    지역여건, 입지여건, 시장환경분석 등
                                </td>
                                <td>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </td>
                            </tr>
                        </tbody>
                        <!-- //tbody -->
                    </table>
                </div>
            </li>
            <!-- 대출자 정보 -->
            <li class="section6">
                <h3 class="title">대출자 정보</h3>
                <div class="con_box">
                    <div class="info clearfix">
                        <div class="left_rating">
                            3등급
                            <p class="score">
                                (824 / 1000점)
                            </p>
                        </div>
                        <div class="right_rating">
                            <ul class="unit">
                                <li>1</li>
                                <li>
                                    <span class="active">2</span>
                                </li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>9</li>
                                <li>10</li>
                            </ul>
                            <ul class="bar">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li class="color"></li>
                            </ul>
                            <div class="grade clearfix">
                                <div class="left_grade">상위등급</div>
                                <div class="right_grade">하위등급</div>
                            </div>
                        </div>
                    </div>
                    <ul class="box">
                        <li>
                            <p class="stit">채무불이행</p>
                            <p class="right_num">0원</p>
                        </li>
                        <li>
                            <p class="stit">신용채무</p>
                            <p class="right_num">28,861,000원</p>
                        </li>
                        <li>
                            <p class="stit">담보채무</p>
                            <p class="right_num">30,000,000원</p>
                        </li>
                        <li>
                            <p class="stit">보증채무</p>
                            <p class="right_num">0원</p>
                        </li>
                    </ul>
                    <p class="offer">※ 제공 : 나이스신용정보 / KCB</p>
                </div>
            </li>
            <!-- 부동산 권리 분석 -->
            <li class="section7">
                <h3 class="title">부동산 권리 분석</h3>
                <div class="con_box clearfix">
                    <div class="left_people"></div>
                    <div class="right_desc">
                        안녕하세요. 오아시스펀드 이돈필 변호사입니다.
                        본 상품은 소유권 이전과 동시에 대출이 실행되며, 현재 소유자는 대출실행일에 맞춰 본 상품의 차주와 담보제공자로 이전됩니다. 2014년 9월 26일자 채권최고액 50,000,000원의 근저당권이 1순위로 유지되며 다른 모든 근저당권은 대출실행일 소유권 이전등기 및 당사 대출 실행과 동시에 상환 말소 됩니다. 또한, 갑구에 등기된 가압류해지와 임의경매취하도 동시에 이뤄지게 됩니다. 당사 근저당권은 대출실행일에 2순위로 설정됩니다. 본 주소지의 전입세대 조사결과 소유자 세대만이 전입되어 있으며, 2018년 7월 10일 등기사항전부증명서(토지, 건물)상 소유권에 대한 별도의 법률관계가 없음을 확인합니다.
                    </div>
                </div>
            </li>
            <!-- 투자보호 -->
            <li class="section8">
                <h3 class="title">투자보호</h3>
                <ul class="list con_box">
                    <li>
                        <h4 class="sub_tit">· 담보설정방법</h4>
                        <p class="sub_desc">2순위 근저당권 설정</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 담보정보 확인</h4>
                        <p class="sub_desc">등기부 등본, 경매정보 등</p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 대출자정보 확인</h4>
                        <p class="sub_desc">대출자 재직 및 소득 정보, 대출자 신용 정보, 대출자 주민등록등본 대출자 재직 및</p>
                    </li>
                </ul>
            </li>
            <!-- 투자시 유의사항 -->
            <li class="section9">
                <h3 class="title">투자시 유의사항</h3>
                <ul class="list con_box">
                    <li>본 투자 상품은 (주)잠보소프트 대부가 취급한 대출 채권에 대한 원리금 수취권 투자입니다.</li>
                    <li>본 금융투자상품의 투자는 회사의 권유 없이 고객님의 판단에 의해 이루어집니다.</li>
                    <li>대출 채권의 특성상, 차입자가 대출금을 조기 상환할 경우 만기일 보다 수개월 일찍 중도 상환될 수 있습니다.</li>
                    <li>투자상품의 취소는 펀딩 마감 전까지 가능하며 본 건 모집금액이 마감된 이후에는 투자 취소가 불가합니다.</li>
                    <li>대출 만기 도래 전 본 투자 상품의 채권 및 원리금 수취권의 일부 또는 전체에 대하여 인수 의사가 있는 법인/기관이 있는 경우 회사는 해당 권리를 양도할 수 있으며 이때 투자금이 조기 상환될 수 있습니다. 권리를 양도할 수 있으며 이때 투자금이 조기 상환될 수 있습니다.</li>
                    <li>차입 자는 대출 만기 도래 전 대출 연장을 신청할 수 있고 회사는 차입자가 이자를 납부할 능력이 있고 채무 건정성이 확보되는 전제하에 대출 연장을 승인할 수 있습니다. 대출이 연장될 경우 대출 연장을 위한 신규 투자 상품이 오픈되며, 투자금 모집이 완료되면 기존 투자자들의 투자금이 상환됩니다. 단, 투자금 모집이 지연되는 경우 상환일 이 만기일 보다 늦어질 수 있으며 이때 24%의 연체이자가 일할 계산되어 지급됩니다.</li>
                    <li class="red">차입자의 대출 만기가 도래 되었음에도 불구하고 이자를 납부할 능력이 없거나 채무 건정성이 악화된 경우 대출금 상환이 불가하여 연체가 발생할 수 있으며, 이때 회사는 법적 절차에 따른 채권추심을 통해 투자금 회수 절차를 진행합니다. 경매, 공매 등 법적 절차에 의해 채권 회수에 소요되는 시간은 최고 3개월에서 12개월 정도 소요됩니다.</li>
                    <li class="red">본 투자 상품은 부동산이 일부 담보로 제공되나 채무 불이행으로 인한 경매, 공매 등의 환가 절차 과정에서 대출원금 이하로 매각될 가능성이 있고 이때 투자원금의 일부 손실이 발생할 수 있습니다.</li>
                    <li class="red">회사는 본 건 투자와 관련하여 원금과 수익률을 확정 보장하지 않으므로 손실위험을 인지하고 투자에 신중한 결정 바랍니다.</li>
                </ul>
            </li>
        </ul>
        <!-- //sec1 -->
        <!-- sec2 -->
        <div class="sec sec2">
            <div class="invest_box">
                <h3 class="s_tit">투자예정금액입력</h3>
                <ul class="value_input">
                    <li class="amount">
                        <span class="s_title">투자예정금액</span>
                        <select>
                            <option>10만원</option>
                            <option>50만원</option>
                            <option>100만원</option>
                            <option>300만원</option>
                            <option>300만원</option>
                            <option>500만원</option>
                            <option>1,000만원</option>
                            <option>직접입력</option>
                        </select>
                        <span class="recommend">
                            <input type="text" maxlength="10" placeholder="0" autofocus="autofocus">
                            만원
                        </span>
                    </li>
                    <li><button>확인</button></li>
                </ul>
                <p class="desc">※ 최소금액 10만원부터 10만원 단위로 투자하실 수 있습니다.</p>
            </div>
            <div class="schedule">
                <h3 class="s_tit">상환예정표 <span>(대출실행일 : 2018.07.11 기준)</span></h3>
                <ul class="box">
                    <li>
                        <h4 class="s_title">만기상환일</h4>
                        <p class="num">2019.07.10</p>
                    </li>
                    <li>
                        <h4 class="s_title">투자원금</h4>
                        <p class="num">1,000,000원</p>
                    </li>
                    <li>
                        <h4 class="s_title">플랫폼이용료</h4>
                        <p class="num">11,900원</p>
                    </li>
                    <li>
                        <h4 class="s_title">수익금(세전)</h4>
                        <p class="num">124,561원</p>
                    </li>
                    <li>
                        <h4 class="s_title">세금(이자소득세+주민세)</h4>
                        <p class="num">34,120원</p>
                    </li>
                    <li>
                        <h4 class="s_title">수익금(세후)</h4>
                        <p class="num">90,441원</p>
                    </li>
                </ul>
                <p class="desc">※ 중도상환 등 기타 사유 발생 시 실제 수익금 및 플랫폼 이용료는 변동될 수 있습니다.</p>
            </div>
            <div class="toggle_box">
                <div class="top_title clearfix">
                    <h3 class="s_tit">월별 수익금 지급 예정표</h3>
                    <p class="btn_right">자세히보기</p>
                </div>
                <table>
                    <colgroup>
                        <col width="130px">
                        <col width="240px">
                        <col width="150px">
                        <col width="150px">
                        <col width="150px">
                        <col width="150px">
                        <col width="150px">
                        <col width="160px">
                    </colgroup>
                    <!-- thead -->
                    <thead>
                        <tr>
                            <th scope="col">회차</th>
                            <th scope="col">지급일</th>
                            <th scope="col">이용일수</th>
                            <th scope="col">수익금(세전)</th>
                            <th scope="col">이자소득세</th>
                            <th scope="col">주민세</th>
                            <th scope="col">수익금(세후)</th>
                            <th scope="col">플랫폼 이용료</th>
                        </tr>
                    </thead>
                    <!-- tbody -->
                    <tbody>
                        <tr>
                            <td>1회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>2회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>3회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>4회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>5회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>6회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>7회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>8회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>9회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>10회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>11회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                        <tr>
                            <td>12회차</td>
                            <td>2018.08.01</td>
                            <td>21일</td>
                            <td>10,266원</td>
                            <td>1,790원</td>
                            <td>170원</td>
                            <td>5,227원</td>
                            <td>11,990원</td>
                        </tr>
                    </tbody>
                    <!-- tfoot -->
                    <tfoot>
                        <tr>
                            <td colspan="3">총합계</td>
                            <td>124,561원</td>
                            <td>31,090원</td>
                            <td>3,030원</td>
                            <td>90,441원</td>
                            <td>11,900원</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- m_accordion -->
            <div class="m_toggle_box">
                <h4 class="m_title">월별 수익금 지급 예정표 <span>(대출실행일 : 2018.07.23 기준)</span></h4>
                <div id="accordion">
                    <h3 class="m_tit">
                        <span class="m_time">1회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">2회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">3회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">4회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">5회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">6회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">7회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">8회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">9회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">10회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">11회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit">
                        <span class="m_time">12회차</span>
                        <p class="m_money"><span class="m_num">1,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>지급일</td>
                                    <td class="m_right">2018.08.01</td>
                                </tr>
                                <tr>
                                    <td>이용일수</td>
                                    <td class="m_right">9일</td>
                                </tr>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="m_tit m_foot">
                        <span class="m_time">총합계</span >
                        <p class="m_money"><span class="m_num">14,526원</span>(세후)</p>
                    </h3>
                    <div class="m_table">
                        <table>
                            <tfoot>
                                <tr>
                                    <td>수익금(세전)</td>
                                    <td class="m_right">2,096원</td>
                                </tr>
                                <tr>
                                    <td>이자소득세</td>
                                    <td class="m_right">520원</td>
                                </tr>
                                <tr>
                                    <td>주민세</td>
                                    <td class="m_right">50원</td>
                                </tr>
                                <tr>
                                    <td>실입금액(세후)</td>
                                    <td class="m_right">1,526원</td>
                                </tr>
                                <tr>
                                    <td>플랫폼 이용료</td>
                                    <td class="m_right">0원</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- //m_accordion -->
            <div class="guide">
                <h3 class="s_tit">오아시스펀드 투자 수익금 및 원금 지급가이드</h3>
                <ul class="list">
                    <li>
                        <h4 class="sub_tit">· 수익급 지급</h4>
                        <p class="sub_desc">
                            수익금은 대출실행일부 터 월 단위로 일할 계산되며, 매월 첫 영업일에 세금 원천징수 후 지급됩니다.
                            <span class="block">※ 첫 수익금 지급일 안내 : 매월 1 ~ 24일에 대출실행된 투자 상품은 다음 달 첫 영업일 매월 25일 ~ 말일에 대출실행된 투자 상품은 다다음 달 첫 영업일</span>
                        </p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 원금상환</h4>
                        <p class="sub_desc">
                            원금 만기일시상환 상품으로 대출자가 대출금 상환 즉시 투자자에게 원금이 상환됩니다.
                        </p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 세금</h4>
                        <p class="sub_desc">
                            이자 소득에 대한 세금 원천징수 후 차감된 금액(세후)이 테라 펀딩 가상 계좌로 입금됩니다.
                            <span class="block">※ 이자 소득세율 : 이자 소득세 25% + 주민세 2.5% = 27.5%</span>
                        </p>
                    </li>
                    <li>
                        <h4 class="sub_tit">· 플랫폼 이용료</h4>
                        <p class="sub_desc">
                            이자 소득에 대한 세금 원천징수 후 차감된 금액(세후)이 테라 펀딩 가상 계좌로 입금됩니다.<br>
                            <span class="block">※ 이자 소득세율 : 이자 소득세 25% + 주민세 2.5% = 27.5%</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //sec2 -->
    </div>
    <!-- //content -->
</section>
<!-- //container -->

<!-- footer -->
<?php include_once "../footer.php"; ?>