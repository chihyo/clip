<?php
header("Content-Type: text/html; charset=UTF-8");
    include_once("header.php");

    include ("database/query.php");
    // include_once $root."/moviestar/database/movie.php";
?>

        <!-- header -->
        <header class="nav-down">
            <img class="header_bg" src="img/header_bg.png" alt="">
            <a href="benefit_card.php" class="back"><img src="img/back.png" width="30vw" alt="뒤로가기"></a>
            <a class="desc"><?php echo $_GET['name'] ?></a>
            <a href="myclip.php" class="close"><img src="img/close.png" width="30vw" alt="닫기"></a>
        </header>
        <div id="contentWrap">
            <div class="container">
                <div class="checkevent heightt">
                    <div class="brandlogo">
                        <?php
                        if($_GET["name"]=="T멤버십") {
                        ?>
                        <img src='img/logo/t_logo.png' width="130%">
                        <?php
                        }else if($_GET["name"]=="CJ ONE") {
                        ?>
                        <img src='img/logo/cj_logo.jpg' width="125%">
                        <?php
                        }else if($_GET["name"]=="해피포인트") {
                        ?>
                        <img src='img/logo/happy_logo.png' width="75%">
                        <?php
                        }else if($_GET["name"]=="L.POINT") {
                        ?>
                        <img src='img/logo/l_logo.png' width="40%">
                        <?php
                        }else if($_GET["name"]=="KT membership") {
                        ?>
                        <img src='img/logo/kt_logo.jpg' width="85%">
                        <?php    
                        }else if($_GET["name"]=="lg membership") {
                        ?>
                        <img src='img/logo/lg_logo.png' width="65%">
                        <?php
                        }else if($_GET["name"]=="CU membership") {
                        ?>
                        <img src='img/logo/cu_logo.png' width="50%">
                        <?php
                        }
                        ?>
                    </div>
                    <div class="rightt">
                        <div><span style="color:#ed1c24;">1,580</span> P</div>
                        <div><span>17.12.11 22:12</span></div>
                    </div>
                </div>
                <a class="barcodeon" href="#"><img src="img/barcode.png" width="100%"></a>
                <div class="barcode">
                    <img src="img/barcodeon.jpg" width="100%">
                    <span style="float:right;margin-right:30px;font-size:3em;">x</span>
                </div>
                
                <script>
                    $(document).ready(function() {
                        $(".barcodeon").click(function() {
                            $(".barcode").css("display","block");
                        })
                        $(".barcode span").click(function() {
                            $(".barcode").css("display","none");
                        })
                    })
                </script>
                <div class="select_card">
                    <?php
                    if(isset($_SESSION['cdname'])) {
                    ?>
                    <img src="img/regist_card1.png" width="100%">
                    <?php
                    }else {
                    ?>
                    <a href="#"><img src="img/regist_card2.png" width="100%"></a>
                    <?php
                    }
                    ?>
                </div>
                
                <div class="detail tabs">
                    <ul class="tab-title">
                        <li class="active bd"><a href="#ntab1">이벤트</a></li>
                        <li class=""><a href="#ntab2">카드 할인/적립혜택</a></li>
                    </ul>
                    <div class="tab-cont">
                        <div id="ntab1" class="ntab1">
                            <?php
                            if($_GET["name"]=="T멤버십" ||$_GET["name"]=="해피포인트" ||$_GET["name"]=="KT membership" ||$_GET["name"]=="CU membership") {
                            ?>
                            <img src="img/event1.jpg" width="100%">
                            <img src="img/event2.jpg" width="100%">
                            <?php
                            }else if($_GET["name"]=="CJ ONE" ||$_GET["name"]=="L.POINT" ||$_GET["name"]=="lg membership") {
                            ?>
                            <img src="img/event3.jpg" width="100%">
                            <img src="img/event4.jpg" width="100%">
                            <?php
                            }
                            ?>
                            <a href="#">더보기</a>
                        </div></a>
                        <div id="ntab2" class="ntab2 hidden">
                            <?php
                                echo $_GET["benefit"];
                            ?>
                        </div>
                    </div>
                </div>
                
                
                <div class="checkevent useinfo">
                    <div>사용안내/사용처</div>
                    <div>∧</div>
                </div>
                <div class="useinfo_con">
                    <h3>사용안내</h3>
                    <p>20대가 가장 많이 사용하는 라이프스타일 멤버십, <?php echo $_GET["name"] ?>.<br>
                    <?php echo $_GET["name"] ?>은 문화, 외식, 쇼핑, 뷰티, 엔터테인먼트 등
                    제휴사의 30여개 라이프스타일 브랜드에서 적립/할인을 받으실 수 있는
                    통합 멤버십카드입니다.</p>
                    <h3>사용처</h3>
                    <p><img src="img/usestore.jpg" width="100%"></p>
                </div>
                
                <div class="checkevent useinfo">
                    <div>공지사항</div>
                    <div>∨</div>
                </div>
                
                <section id="more" style="margin-top:4%;">
                    <a>고객센터 바로가기</a>
                    <a></a>
                </section>
                
                
            </div>
                
            
            </div>
            <!--//container-->
        </div>
        <!--//contentWrap-->