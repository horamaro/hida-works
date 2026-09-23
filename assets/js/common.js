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
      
      thumbnails.forEach(function(item){
      item.classList.remove('is-active');      
      });
      thumbnail.classList.add('is-active');      
    });
  });
})();




  (function () {
  const targets = document.querySelectorAll('.js-scroll');
  const observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if (entry.isIntersecting){
      entry.target.classList.add('is-show');
      }
    });
  });
  targets.forEach(function(target){
    observer.observe(target);
  });
  })();
  