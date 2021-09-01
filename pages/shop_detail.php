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

    <section id="shop_detail_all">
      <div class="center">
        <div class="shop_detail_top">
          <div class="product-image">
            <img src="/fofo/img/middle_slide_01.png" alt="">
          </div>
          <div class="product-txt">
            <h2 class="eng">제목</h2>
            <h4>설명</h4>
            <h3 class="price">00,000원</h3>
            <div class="choice-box">
              <div class="qua-text">
                <img src="/fofo/img/ico_info.gif" alt="">
                <p>수량을 선택해주세요.</p>
              </div>
              <div class="checkbox">
                <span class="checkbox-tit">상품명</span>
                <span class="quantity">
                  <form>
                    <input type="text" value="1" name="quantity"></input>
                    <span class="quantity-btns">
                      <a href="#"><img src="/fofo/img/btn_count_up.gif" alt="수량증가"></a>
                      <a href="#"><img src="/fofo/img/btn_count_down.gif" alt="수량감소"></a>
                    </span>
                    <span class="price-txt">00,000</span>
                  </form>
                </span>
              </div>
              <div class="total-price">
                <span><strong>총 상품금액</strong>(수량)</span>
                <span class="total-price-detail">
                  <strong>9,800원</strong>
                  <span class="amount">(2개)</span>
                </span>
              </div>
              <div class="total-btns">
                <button type="button">바로 구매하기</button>
                <button type="button">장바구니</button>
                <button type="button">관심상품</button>
              </div>
            </div>
          </div>
        </div>
        <div id="review" class="padding">
          <div class="title-text">
            <h2>REVIEW</h2>
          </div>
          <div class="rev-slide">
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
          </div>
        </div>
        <div class="detail-page padding">
          <div class="title-text">
            <h2>Detail</h2>
          </div>
          <img src="/fofo/img/detail_01.jpg" alt="">
        </div>
        <div id="more-pro" class="padding">
          <div class="title-text">
            <h2>함께 구매하시면 좋은 상품</h2>
          </div>
          <div class="rev-slide">
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_01.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_02.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_03.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
            <div class="each-rev-slide">
              <div class="each-rev-img">
                <img src="/fofo/img/review_04.jpg" alt="">
              </div>
              <div class="shop-each-rev-text">
                <b>리뷰요약!! 리뷰요약이에요!! 최대 두줄까지 왼쪽정렬 !!</b>
                <span class="shop-rev-id">리뷰회원 ID ***</span>
                <div class="star">
                  <span class="shop-rev-tit">리뷰 <span class="num">10</span></span>
                  <span class="shop-rev-other"><i class="fa fa-star"></i><span class="num">5.0</span></span>
                </div>
              </div>
            </div>
            <!-- End of reviewbox -->
          </div>
        </div>
      </div>
    </section>


    <?php
      include $_SERVER['DOCUMENT_ROOT']."/fofo/include/footer.php";
    ?>
  </div>



  <!-- Main JS link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="/fofo/js/slick.min.js"></script>
  <script src="/fofo/js/slick.js"></script>
  <script src="/fofo/js/main.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.rev-slide').slick({
      dots: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ],
      customPaging: function(slider, index) {
        var num = index + 1;
        return '<span class="dot">' + num + '</span>';
      }
    });
  });
  </script>
</body>

</html>