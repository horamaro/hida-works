(function () { 

  const hamburgerBtn = document.querySelector('#js-btn-open');
  const hamburgerMenu = document.querySelector('#js-sp-menu');
  if(!hamburgerBtn || !hamburgerMenu) return;

  hamburgerBtn.addEventListener('click' ,function( ){
      hamburgerMenu.classList.toggle('is-open');
      hamburgerBtn.classList.toggle('is-open');
      document.body.classList.toggle('is-menu-open');   
  });

})();



//single-works
(function () { 

  const mainImage = document.querySelector('#js-works-main-image');
  const thumbnails = document.querySelectorAll('.js-works-thumbnail');
  if(!mainImage || !thumbnails.length) return;

  thumbnails.forEach(function(thumbnail){
    thumbnail.addEventListener('click' ,function( ){
      mainImage.src = thumbnail.src;
      mainImage.srcset = thumbnail.srcset;    
    });
  });
})();