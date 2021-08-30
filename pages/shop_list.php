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
              <a href="#">상품 정렬<i></i></a>
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
              <img src="/fofo/img/review_01.jpg" alt="">
            </div>
            <div class="each-shop-text">
              <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
              <span>리뷰회원 ID ***</span>
            </div>
          </div>
          <!-- End of reviewbox -->
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