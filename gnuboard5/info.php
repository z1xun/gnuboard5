<?php
include_once('./_common.php');
$g5['title'] = '관람안내';

include_once(G5_PATH.'/head.php');
?>

            <div class="inner">
                <nav class="page_path">
                    <ul>
                        <li class="home">
                            <a href="/gnuboard5/"><span class="blind">메인페이지</span></a>
                        </li>
                        <li><a href="#">관람</a></li>
                        <li><a href="#">관람안내</a></li>
                    </ul>
                </nav>
                <div class="info-container">
                    <h2>관람 안내</h2>
                    <div class="info-img"></div>
                    <div class="info-contents-wrap">
                        <dl class="info-lst">
                            <dt class="content-tit">관람시간</dt>
                            <dd>전시, 카페, 북앤아트숍 (수-일)</dd>
                            <dd>11월부터 4월까지(11.1 – 4.30) <br />10:00 – 18:00</dd>
                            <dd>5월부터 10월까지(5.1 – 10.31) <br />10:00 – 19:00</dd>
                        </dl>
                        <dl class="info-lst">
                            <dt class="content-tit">휴관일</dt>
                            <dd>매주 월, 화요일 뮤지엄 휴무</dd>
                            <dd><em>* 이외 행사 일정에 따라 임시휴관 할 수 있습니다.</em></dd>
                        </dl>
                        <dl class="info-lst">
                            <dt class="content-tit">관람요금</dt>
                            <dd>
                                성인 : 8,000 <br />
                                학생 : 6,000 (8~18세) <br />
                                단체: 6,000 (20인 이상 사전예약시)
                            </dd>
                            <dd>
                                복지카드 소지자: 6,000 <br />
                                <em>(65세 이상, 국가유공자, 장애인 등) </em>
                            </dd>
                            <dd>
                                미취학 아동: 무료 <br />
                                <em>(3~7세, 보호자 동반 하에 관람)</em>
                            </dd>
                        </dl>
                        <dl class="info-lst">
                            <dt class="content-tit">관람문의</dt>
                            <dd>
                                대표번호 <br />
                                031-955-4100
                            </dd>
                        </dl>
                    </div>
                    <section class="contact-wrap">
                        <div class="col-left">
                            <h3>오시는길</h3>
                            <p class="address">
                                Mimesis Art Museum <br />경기도 파주시 문발로 253, 파주출판도시<br />
                                Paju Book City, 253 Munbal-ro, Paju-si, Gyeonggi-do, Korea
                            </p>
                            <p class="tel">
                                T : +82-31-955-4100 <br />
                                E :info@mimesisartmuseum.co.kr
                            </p>
                        </div>
                        <div class="col-right">
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.1232137016323!2d126.68634867636729!3d37.71678561549762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c88b6221190fd%3A0x9e2ad366f568ba0a!2z66-466mU7Iuc7IqkIOyVhO2KuCDrrqTsp4Dsl4Q!5e0!3m2!1sko!2skr!4v1693807861647!5m2!1sko!2skr"
                                    width="530"
                                    height="350"
                                    style="border: 0"
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                    title="구글"
                                ></iframe>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
     

<?php
include_once(G5_PATH.'/tail.php');