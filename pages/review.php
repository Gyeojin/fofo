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

    <section id="review">
      <div class="center">
        <div class="title-text">
          <h2>REVIEW</h2>
        </div>
        <div class="list_top">
          <div class="all-pro">
            <span>총 12개의 리뷰</span>
          </div>
          <ul class="pro-sort">
            <li>
              <div class="sort-tit">
                <a href="#">정렬 기준</a>
                <img src="/fofo/img/arrow_down.png" alt="">
              </div>
              <ul class="pro-sort-sub reviewpage-sort">
                <li><a href="#">최신순</a></li>
                <li><a href="#">평점순</a></li>
                <li><a href="#">추천순</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="rev-slide reviewpage padding">
          <div class="group-rev">
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
          </div>
          <div class="group-rev">
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
          </div>
          <div class="group-rev">
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide reviewpage-each">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span>리뷰회원 ID ***</span>
              </div>
              <div class="each-rev-product">
                <div class="product-img">
                  <img src="/fofo/img/review_04.jpg" alt="">
                </div>
                <div class="product-text">
                  <b>상품명</b>
                  <span>리뷰 <span class="num">10</span></span>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
          </div>
          <div class="page-number">
            <button type="button"><img src="/fofo/img/arrow_left.jpg" alt=""></button>
            <b>1</b>
            <!-- <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span> -->
            <button type="button"><img src="/fofo/img/arrow_right.jpg" alt=""></button>
          </div>
        </div>
      </div>
      <!-- Portfolio Modal Page Code -->
      <div id="reviewModal" class="modal1">
        <div class="modal-box">
          <div class="modal-con">
            <img src="/fofo/img/modal_01.jpg" alt="">
          </div>
          <div class="modal-txt">
            <div class="each-rev-product">
              <div class="product-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="product-text">
                <div class="product-text-box">
                  <b>상품명</b>
                  <span><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
                <span>리뷰회원 ID ***</span>
              </div>
            </div>
            <div class="customer-rev">
              <p>고양이가 너무 잘 놀아요~ 배송도 빠르고 안전하게 잘 받았어요!̆̈ !̆̈ 기대 한 만큼 재밌어해서 정말 다행이에요~</p>
            </div>
          </div>
        </div>
        <div class="closeBtn">
          <i class="fa fa-times-circle"></i>
        </div>
      </div>
    </section>


    <?php
      include $_SERVER['DOCUMENT_ROOT']."/fofo/include/footer.php";
    ?>
  </div>



  <!-- Main JS link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="/fofo/js/slick.min.js"></script> -->
  <!-- <script src="/fofo/js/slick.js"></script> -->
  <script src="/fofo/js/main.js"></script>
</body>

</html>