<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>FoFo!</title>

  <!-- Google Font Style Conde -->
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&display=swap"
    rel="stylesheet">

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- RESET, MAIN Style CSS code -->
  <link rel="stylesheet" href="/fofo/css/reset.css">
  <link rel="stylesheet" href="/fofo/css/main.css">
  <link rel="stylesheet" type="text/css" href="/fofo/css/slick.css" />
</head>

<body>
  <div class="wrap">
    <div class="scrolltop">
      <div class="arrow"><i class="fa fa-arrow-up"></i></div>
      <div class="line"><span></span></div>
      <div class="kakao"><img src="/fofo/img/kakao.png" alt=""></div>
    </div>
    <div class="scrolltop_footer">
      <div class="arrow"><i class="fa fa-arrow-up"></i></div>
      <div class="line"><span></span></div>
      <div class="kakao"><img src="/fofo/img/kakao_green.png" alt=""></div>
    </div>

    <?php
      include $_SERVER['DOCUMENT_ROOT']."/fofo/include/header.php";
    ?>

    <section id="shop_list_all">
      <div class="center">
        <div class="title-text">
          <h2>전체상품</h2>
        </div>
        <div class="category">
          <button type="button">반려동물 털 장난감</button>
          <button type="button">메모리얼</button>
          <button type="button">DIY</button>
          <button type="button">정기구독</button>
        </div>
        <div class="list_top">
          <div class="all-pro">
            <span>총 10개의 상품</span>
          </div>
          <ul class="pro-sort">
            <li>
              <div class="sort-tit">
                <a href="#">상품 정렬</a>
                <img src="/fofo/img/arrow_down.png" alt="">
              </div>
              <ul class="pro-sort-sub">
                <li><a href="#">낮은 가격</a></li>
                <li><a href="#">높은 가격</a></li>
                <li><a href="#">인기 상품</a></li>
                <li><a href="#">조회수</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="shop_list">
          <div class="each-shop_list">
            <div class="each-shop-img">
              <a href="/fofo/pages/shop_detail.php">
                <img src="/fofo/img/review_01.jpg" alt="">
              </a>
            </div>
            <div class="each-shop-text">
              <a href="/fofo/pages/shop_detail.php">
                <b>상품명 상품명</b>
              </a>
              <p>상품 요약설명 입니다. 자유롭게 적어주세요.</p>
              <span>00,000원</span>
            </div>
          </div>
          <!-- End of each-shop-box -->
          <div class="each-shop_list">
            <div class="each-shop-img">
              <img src="/fofo/img/review_01.jpg" alt="">
            </div>
            <div class="each-shop-text">
              <b>상품명 상품명</b>
              <p>상품 요약설명 입니다. 자유롭게 적어주세요.</p>
              <span>00,000원</span>
            </div>
          </div>
          <!-- End of each-shop-box -->
          <div class="each-shop_list">
            <div class="each-shop-img">
              <img src="/fofo/img/review_01.jpg" alt="">
            </div>
            <div class="each-shop-text">
              <b>상품명 상품명</b>
              <p>상품 요약설명 입니다. 자유롭게 적어주세요.</p>
              <span>00,000원</span>
            </div>
          </div>
          <!-- End of each-shop-box -->
          <div class="each-shop_list">
            <div class="each-shop-img">
              <img src="/fofo/img/review_01.jpg" alt="">
            </div>
            <div class="each-shop-text">
              <b>상품명 상품명</b>
              <p>상품 요약설명 입니다. 자유롭게 적어주세요.</p>
              <span>00,000원</span>
            </div>
          </div>
          <!-- End of each-shop-box -->
        </div>
        <div class="pagenum">
          <a href="#"><img src="/fofo/img/arrow_left.jpg" alt=""></a>
          <b>1</b>
          <b>2</b>
          <a href="#"><img src="/fofo/img/arrow_right.jpg" alt=""></a>
        </div>
      </div>
    </section>


    <?php
      include $_SERVER['DOCUMENT_ROOT']."/fofo/include/footer.php";
    ?>
  </div>



  <!-- Main JS link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/fofo/js/main.js"></script>
  <script type="text/javascript">
  < /body>

  <
  /html>