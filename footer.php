<footer>
    <ul class="sitemap">
      <li><a href="">トップページ</a></li>
      <li><a href="">令和の杜とは</a></li>
      <li><a href="">墓地一覧</a></li>
      <li><a href="">FAQ</a></li>
      <li><a href="">お問合せ・資料請求</a></li>
      <li><a href="">見学予約</a></li>
      <li><a href="">海洋散骨</a></li>
      <li><a href="">お墓適性診断</a></li>
      <li><a href="">お墓選びのポイント</a></li>
    </ul>
    <ul class="cemetery">
      <li><a href="">樹木墓地</a>
        <ul>
          <li><a href="">横浜令和の杜</a></li>
          <li><a href="">新座令和の杜</a></li>
          <li><a href="">大多喜令和の杜</a></li>
          <li><a href="">西湘令和の杜</a></li>
        </ul>
      </li>
      <li><a href="">屋内墓地</a>
        <ul>
          <li><a href="">市ヶ谷&nbsp;堂内廟</a></li>
          <li><a href="">迦楼塔&nbsp;東京</a></li>
        </ul>
      </li>
      <li><a href="">納骨墓</a></li>
    </ul>
    <small>&copy;Copyright sai-products All Rights Reserved.</small>
  </footer>
</main>


<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- fontplus -->
<script src="//webfont.fontplus.jp/accessor/script/fontplus.js?nxDAASNW5A8%3D&box=VuFeZrcrpps%3D&aa=1&ab=2"></script>

<!-- 墓地一覧スライドjs -->
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script>
  {
    var swiper = new Swiper('.swiper-container-1', {
      slidesPerView: 4,
      spaceBetween: 24,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop: true,
      speed: 4000,
      autoplay: {
        delay: 500,
        disableOnInteraction: true,
      },
    });
  }
  {
    var swiper = new Swiper('.swiper-container-2', {
      slidesPerView: 2,
      spaceBetween: 24,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop: true,
      speed: 4000,
      autoplay: {
        delay: 500,
        disableOnInteraction: true,
      },
    });
  }
</script>

<!-- 以下jQuery -->
<!-- <?php wp_enqueue_script('jquery'); ?> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>

<!-- メインビジュアル背景スライドjs -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>
<script>
  $(".bg-slider").bgswitcher({
    images: ["https://media-lab.tokyo/reiwanomori/img/slide-bg-01.jpg", "https://media-lab.tokyo/reiwanomori/img/slide-bg-02.jpg"],
  });
</script>

<!-- googlemapスクロール無効js -->
<script>
  $(function() {
  var map = $('iframe');
  //あらかじめiframeにpointer-events:noneを掛け、マウスイベントを無効にしておく
  map.css('pointer-events', 'none');
  //一度クリックされたらマウスイベントを有効にする
  $('#map').click(function() {
    map.css('pointer-events', 'auto');
  });
  //iframeからマウスが離れたら再度pointer-events:noneを効かせる
  map.mouseout(function() {
    map.css('pointer-events', 'none');
  });
})
</script>

<?php wp_footer(); ?>
</body>

</html>