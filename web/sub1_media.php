    <?php
      include_once("header.php");
    ?>

    <img src="img/sub/sub2_media.png" alt="clip 사용법">
    <section class="local_navi">
      <div class="container">
        <ul class="cleft">
          <li><a href="index.php"><img src="img/sub/home.png" alt="홈" width="17px"/></a> 홈</li>
          <li style="color:#999">></li>
          <li>클립소개 ▼</li>
          <li style="color:#999">></li>
          <li>홍보영상 ▼</li>
        </ul>
        <ul class="cright">
          <li><img src="img/sub/plus.png" alt="확대"/> 확대</li>
          <li><img src="img/sub/minous.png" alt="축소"/> 축소</li>
          <li><img src="img/sub/print.png" alt="인쇄"/></li>
        </ul>
      </div>
    </section>

    <script>
  $(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>

    <!-- clip media -->
        <section>
          <h2 class="hidden">clip media</h2>
          <h2 class="title">CLiP 미디어</h2>
          <p class="midtitle">더욱 새로워진 CLiP을 만나보세요.</p>
          <div class="container used">
            <div class="bxslider">
            <ul>
              <li>
                <div style="text-align: center; margin-top:50px;">
                  <iframe style="margin:0 auto;" width="640" height="360" src="https://www.youtube.com/embed/lyUpMKyP0lE?vq=hd760&autoplay=0&start=0&rel=0"
                  frameborder="0" allowfullscreen></iframe>
                </div>
              </li>
            </ul>
            <ul>
              <li>
                <div style="text-align: center; margin-top:50px;">
                  <iframe style="margin:0 auto;" width="640" height="360"  src="https://www.youtube.com/embed/Enf6hW3kosI" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
              </li>
            </ul>
            <ul>
              <li>
                <div style="text-align: center; margin-top:50px;">
                  <iframe style="margin:0 auto;" width="640" height="360"  src="https://www.youtube.com/embed/Y21LbiG_Kn8" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
              </li>
            </ul>
          </div>
          </div>


        </section>



    <?php
      include_once("footer.php");
    ?>



  </body>
</html>