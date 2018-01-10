(function (){
  let navMenu = document.querySelector('#nav-button');
      navCon = document.querySelector('#nav-container');
      close = document.querySelector('#nav-close');
      pages = document.querySelectorAll('.nav-list');

      function popUpNav(){
        navCon.style.display="block";
        window.scrollTo(0,0);
        document.body.style.overflow="hidden";
      }

      navMenu.addEventListener('click', popUpNav, false);

      function closeNav(){
        navCon.style.display="none";
        document.body.style.overflow="auto";
      }

      pages.forEach(function(page){
        page.addEventListener('click', closeNav, false);
      });

      close.addEventListener('click', closeNav, false);


})();
