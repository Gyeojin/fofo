$(function(){
  //4
  let current = 0;

  //1
  function slider(n){
    //5
    $(".slide-boxes").animate({left:-100 * n + "%"}, 500);  
    //6
    current = n;
  } 

  //click event refactoring
  function moveSlide(a, b){
    if(current == a){
      return false;
    } else {
      slider(current + b);
    }
  }   

  $(".btns button").click(function(){
    if($(this).hasClass("prev")){
      moveSlide(0, -1); 
    } else {
      moveSlide(($(".box").length - 1), 1);
    }
  });

  //3
  // $(".next").click(function(){
  //   //6
  //   if(current == $(".box").length - 1){
  //     return false;
  //   } else {
  //     slider(current + 1);
  //   }
  // });

  // //7
  // $(".prev").click(function(){
  //   //6
  //   if(current == 0){
  //     return false;
  //   } else {
  //     slider(current - 1);
  //   }
  // });

  //8
  let timer;
  function startSlide(){
    timer = setInterval(function(){
      slider((current + 1) % 3);
    }, 6000);
  }

  function stopSlide(){
    clearInterval(timer);
  }

  //9
  $(".slide-frame").on('mouseenter', function(){
    stopSlide();
  });

  $(".slide-frame").on('mouseleave', function(){
    startSlide();
  })

  //2
  //slider(current);
  startSlide();
  
});