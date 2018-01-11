(function(){

function getPortfolioData(){
  const url = 'admin/scripts/portfolio_functions.php?allProjects=';

  fetch(url)
    .then((resp) => resp.json())
    .then((data) => {
      let output = '';
      data.forEach(function(project){
        output += `
        <div id="gallery-item" class="col s12 l6 ${project.bckgrd_class}">
          <h3>${project.project_name}</h3>
          <img src="images/${project.project_image1}" alt="Desktop image of ${project.project_name} website" width="100%">
          <div class="learn" id= "${project.project_id}">Learn More</div>
        </div>
        `;
      });
      document.getElementById('project-con').innerHTML = output;

      let buttons = document.querySelectorAll('.learn');

      buttons.forEach(function(button, index) {
        button.addEventListener('click', getProject);
      });
    });
  }
  window.onload=getPortfolioData;

  let modal = document.querySelector('#modal');

  function getProject(e){
    //console.log('from getProject');
    const url = 'admin/scripts/portfolio_functions.php?project=' + this.id;

    fetch(url)
       .then((resp) => resp.json())
       .then((data) => {
         let output = '';
         output +=`
         <i class="material-icons" id="close-modal">close</i>
         <h3 class="lightbox-title">${data.project_name}</h3>
         <div class="accent-underline"></div>
         <p>${data.project_description}</p>
         <div class="col s12 ${data.bckgrd_class} lightbox-img"><img src="images/${data.project_image1}" alt="Desktop image of ${data.project_name} website" width="80%"></div>
         <div class="col s12 ${data.bckgrd_class} lightbox-img"><img src="images/${data.project_image2}" alt="iPad images of ${data.project_name} website" width="80%"></div>
         <div class="col s12 ${data.bckgrd_class} lightbox-img"><img src="images/${data.project_image3}" alt="iPhone image of ${data.project_name} website" width="80%"></div>
         `;

         modal.innerHTML = output;
         modal.style.display="block";
         window.scrollTo(0,0);
         document.body.style.overflow="hidden";

         //add event listener on close button
         let closelightbox = document.querySelector('#close-modal');
            closelightbox.addEventListener('click', closeProject);
       });
  }

//close lightbox
  function closeProject(){
    modal.style.display="none";
    document.body.style.overflow="auto";
  }

//navigation
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
