<?php
include_once('./_common.php');
$g5['title'] = '예약';

include_once(G5_PATH.'/head.php');
?>

            <div class="inner">
                <div class="reservation-tit">
                    <h2>온라인예약 · 예매</h2>
                </div>
            </div>
            <div class="reservation-subtit">
                <div class="reservation-subtit-wrap">
                    <a href="#" class="check" >단체예약</a>
                    <a href="#">예약 · 예매내역</a>
                </div>
            </div>
            <div class="reservation-container">
                <div class="inner">
                    <div class="col-left">
                        <div class="left-box-wrap">
                            <h3>단체 예약</h3>
                            <div class="left-box">
                                <div class="box-img">
                                    <img src="./images/main/exhibition1.jpg" alt="현재전시" />
                                </div>
                                <ul class="box-text">
                                    <li class="box-tit">MIMESIS SE 17 Border of Skin 김찬송 개인전</li>
                                    <li class="box-date">일시 - 08월 24일(목) 16:00</li>
                                    <li class="box-person">인원 - 단체 20</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="container">
                            <ul class="AccordionMenu">
                                <li class="show">
                                    <div class="select">날짜선택</div>
                                    <div class="select-con date-select">
                                        <div class="date-left">
                                            <div class="calender">
                                                <div id="datepicker"></div>
                                            </div>
                                            <ul class="date-btm">
                                                <li>예약 가능일</li>
                                                <li>예약 선택일</li>
                                            </ul>
                                        </div>
                                        <div class="date-right">
                                           
                                            <div class="date-notice">
                                                <h4 class="date-notice-tit">단체 관람 안내</h4>
                                                <ul>
                                                    <li>단체 관람 시 20명당 최소 1명의 인솔자가 반드시 동행합니다.</li>
                                                    <li>
                                                        참여자의 고의 또는 과실, 부주의에 의한 사고로 인해 발생한 시설물
                                                        훼손과 상해 및 사고에 대해서는 인솔책임자 및 인솔단체에 그
                                                        책임이 있습니다.
                                                    </li>
                                                    <li>
                                                        미술관 내·외부의 시설물 및 작품 보호와 안전을 위해 미술관 직원의
                                                        안내 및 주의사항에 따릅니다.
                                                    </li>
                                                    <li>
                                                        직원의 지시 및 협조 요구에도 불구하고 소란, 무단이탈, 무질서,
                                                        시설물 훼손행위 등으로 인해 진행이 불가능 하다고 판단될 경우
                                                        이용을 금지 및 제한할 수 있습니다.
                                                    </li>
                                                    <li>
                                                        원활한 관람을 위해 휴대전화는 진동모드로 전환하여 주시고 관람
                                                        진행 중 통화는 삼가 해 주시기 바랍니다.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">시간선택</div>
                                    <div class="select-con time-select">
                                        <ul class="time-left">
                                            <li>
                                                <a href="#"><span>10:00</span><span>50명 예약가능</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>11:00</span><span>50명 예약가능</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>12:00</span><span>50명 예약가능</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>13:00</span><span>50명 예약가능</span></a>
                                            </li>
                                        </ul>
                                        <ul class="time-right">
                                            <li>
                                                <a href="#"><span>14:00</span><span>50명 예약가능</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>15:00</span><span>50명 예약가능</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>16:00</span><span>50명 예약가능</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><span>17:00</span><span>50명 예약가능</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="select">인원선택</div>
                                    <div class="select-con person-select">
                                        <span>단체(20인 이상)</span>
                                        <div class="quantity-box">
                                            <button class="btn minus"><p class="blind">빼기</p></button>

                                            <input
                                                class="quantity"
                                                min="20"
                                                max="50"
                                                name="quantity"
                                                value="20"
                                                type="number"
                                            />
                                            <button class="btn plus"><p class="blind">더하기</p></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                                <span>예상금액</span>
                                <span>120,000원</span>
                            </div>
                            <button class="next-btn">다음</button>
                        </div>
                    </div>
                </div>
            </div>
      

<?php
include_once(G5_PATH.'/tail.php');