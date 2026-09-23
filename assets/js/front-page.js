(function () {

  const heroSwiper = new Swiper('.hero',{
   loop:true,
   effect: 'fade', //フェード
   crossFade: true,//フェードクロス入れ替わり
   speed: 1800,//遷移スピード
   autoplay: {
      delay: 3000,
    },
  });
  })();
  