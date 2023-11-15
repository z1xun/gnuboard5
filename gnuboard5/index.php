<?php
            include_once('./_common.php');

            define('_INDEX_', true);
            if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

            if(defined('G5_THEME_PATH')) {
                require_once(G5_THEME_PATH.'/index.php');
                return;
            }

            if (G5_IS_MOBILE) {
                include_once(G5_MOBILE_PATH.'/index.php');
                return;
            }

            include_once(G5_PATH.'/head.php');
            ?>
      



                <!-- 슬라이드 -->
                <div class="main_slider">
                  <div class="swiper-container">
                   
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <img src="./images/main/mainslide1.jpg" alt="" class="main-slide-img" />
                            </li>
                            <li class="swiper-slide">
                                <img src="./images/main/mainslide2.jpg" alt="" class="main-slide-img" />
                            </li>
                            <li class="swiper-slide">
                                <img src="./images/main/mainslide3.jpg" alt="" class="main-slide-img" />
                            </li>
                            <li class="swiper-slide">
                                <img src="./images/main/mainslide1.jpg" alt="" class="main-slide-img" />
                            </li>
                            <li class="swiper-slide">
                                <img src="./images/main/mainslide2.jpg" alt="" class="main-slide-img" />
                            </li>
                        </ul>
                        <div class="mainswiper-button-prev blind">이전</div>
                        <div class="mainswiper-button-next blind">다음</div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="slide-bottom">
                    <div class="inner">
                        <ul class="main-info-area">
                            <li class="info">
                                <strong class="info-tit"
                                    ><i><img src="./images/time-icon.png" alt="관람시간" /> </i>관람시간</strong
                                >
                                <div class="info-txt info-time">
                                    <strong>수 - 일 10:00 ~ 19:00</strong>
                                </div>
                            </li>
                            <li class="admission">
                                <strong class="info-tit"
                                    ><i><img src="./images/ticket-icon.png" alt="관람료" /></i> 관람료</strong
                                >
                                <div class="info-txt info-admission">
                                    <strong>성인 8,000원 / 학생(8~18세) 6,000원</strong>

                                    <span>상세요금은 ‘관람안내’ 참고</span>
                                </div>
                            </li>
                        </ul>
                        <div class="info-badge">
                            <a href="/gnuboard5/info.php">오시는길</a>
                            <a href="/gnuboard5/reservation.php">예약하기</a>
                        </div>
                    </div>
                </div>
                <!-- 전시 -->
                <section class="main-section-1" >
                    <div class="inner">
                        <h2>EXHIBITION</h2>
                        <div class="exhivition-con" 
                            data-aos="fade-up"
                            data-aos-offset="200"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="1000">
                            <ul class="con-img">
                                <li class="active con-img1">
                                    <img
                                        src="./images/main/exhibition1.jpg"
                                        alt="MIMESIS SE 17 Border of Skin 김찬송 개인전"
                                    />
                                </li>
                                <li class="con-img2">
                                    <img
                                        src="./images/main/exhibition2.jpg"
                                        alt=" 2023 MIMESIS COLLECTION: 창문 너머 산책자"
                                    />
                                </li>
                                <li class="con-img3">
                                    <img src="./images/main/exhibition3.jpg" alt="MIM Project 1st -김로와 Lowa Kim" />
                                </li>
                            </ul>
                            <div class="txt-box">
                                <ul>
                                    <li class="con-txt1">
                                        <span class="badge">전시중</span>
                                        <a href="#">MIMESIS SE 17 Border of Skin 김찬송 개인전</a>
                                        <p>기간 : 2023년 8월 13일 - 9월 24일</p>
                                    </li>
                                    <li class="con-txt2">
                                        <span class="badge">전시중</span>
                                        <a href="#">2023 MIMESIS COLLECTION: 창문 너머 산책자</a>
                                        <p>기간 : 2023년 6월 29일 - 9월 24일</p>
                                    </li>
                                    <li class="con-txt3">
                                        <span class="badge">전시중</span>
                                        <a href="#">MIM Project 1st -김로와 Lowa Kim</a>
                                        <p>기간 : 2023년 5월 28일 - 8 월 22일</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 프로그램 -->
                <section class="main-section-2">
                    <div class="inner">
                        <h2>PROGRAM</h2>
                        <div class="nav-wrap"
                            data-aos="fade-up"
                          >
                            <ul class="slider-for">
                                <li class="program-txt">
                                    <h3>관람객 초상화 제작 프로그램</h3>
                                    <p>
                                        기간 : 2023년 07월 25일 ~ 8월 27일 <br />
                                        장소 : 3F 전시공간
                                    </p>
                                    <button>자세히보기</button>
                                </li>
                                <li class="program-txt">
                                    <h3>문화의 날 프로그램</h3>
                                    <p>
                                        기간 : 2023년 11월 19일 ~ 11월 30일 <br />
                                        장소 : 미메시스 아트 뮤지엄
                                    </p>
                                    <button>자세히보기</button>
                                </li>
                                <li class="program-txt">
                                    <h3>전시연계 라운드토크</h3>
                                    <p>
                                        기간 : 2023년 12월 3일 ~ 12월 14일 <br />
                                        장소 : 미메시스 아트 뮤지엄
                                    </p>
                                    <button>자세히보기</button>
                                </li>
                            </ul>

                            <div class="slider-nav-wrap">
                                <ul class="slider-nav">
                                    <li>
                                        <img src="./images/main/program1.jpg" alt="관람객 초상화 제작 프로그램" />
                                    </li>
                                    <li>
                                        <img
                                            src="./images/main/program2.jpg"
                                            alt="세계는 왜 지금 한국 현대미술에 주목하는가?"
                                        />
                                    </li>
                                    <li>
                                        <img
                                            src="./images/main/program3.jpg"
                                            alt="전시연계 라운드토크 시대의 수집과 탐구에서 예술로"
                                        />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

               
                <section class="main-section-3">
                    <div class="inner ">
                       <!-- 가상투어 -->
                        <div class="vr-tour"  data-aos="fade-up" >
                          
                            <h2>가상투어</h2>
                            <div class="tour-con">
                                <a href="#"><img src="./images/main/tour.jpg" alt="" /></a>
                            </div>
                            <div class="more">
                                <a href="#">
                                    <span>자세히보기</span>
                                </a>
                            </div>
                        </div>
                        <!-- 공지사항 -->
                        <div class="notice "  data-aos="fade-up" >
                            <h2>미술관 소식</h2>
                            <ul class="lst-bbs">
                                <li>
                                    <a href="/gnuboard5/bbs/board.php?bo_table=notice&wr_id=9">
                                        <p>미메시스 아트 뮤지엄 큐레이터 채용</p>
                                        <em>2023.08.17</em>
                                    </a>
                                </li>
                                <li>
                                    <a href="/gnuboard5/bbs/board.php?bo_table=notice&wr_id=8">
                                        <p>2023 전시/건축 해설 프로그램 운영 안내</p>
                                        <em>2023.07.27</em>
                                    </a>
                                </li>
                                <li>
                                    <a href="/gnuboard5/bbs/board.php?bo_table=notice&wr_id=7">
                                        <p>[휴관안내] 6 월 재정비 휴관안내</p>
                                        <em>2023.05.30</em>
                                    </a>
                                </li>
                                <li>
                                    <a href="/gnuboard5/bbs/board.php?bo_table=notice&wr_id=6">
                                        <p>[휴관안내] 2/25(목)-26(금) 휴관안내</p>
                                        <em>2023.02.05</em>
                                    </a>
                                </li>
                            </ul>
                            <div class="more">
                                <a href="/gnuboard5/bbs/board.php?bo_table=notice">
                                    <span>자세히보기</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
      




<?php
include_once(G5_PATH.'/tail.php');