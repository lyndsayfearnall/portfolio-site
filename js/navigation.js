(function (){
  let navMenu = document.querySelector('#nav-button');
      navCon = document.querySelector('#nav-container');
      close = document.querySelector('#nav-close');
      pages = document.querySelectorAll('.nav-list');

      function popUpNav(){
        //console.log("Hey Gurl")
        navCon.style.display="inline";
      }

      navMenu.addEventListener('click', popUpNav, false);

      function closeNav(){
        navCon.style.display="none";
      }

      pages.forEach(function(page){
        page.addEventListener('click', closeNav, false);
      });

      close.addEventListener('click', closeNav, false);


})();
