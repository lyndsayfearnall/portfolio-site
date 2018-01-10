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
          <div class="learn" data-index= "${project.project_id}">Learn More</div>
        </div>
        `;
      });
      document.getElementById('project-con').innerHTML = output;

      //start getProjet
      let buttons = document.querySelectorAll('.learn');
          modal = document.querySelector('#modal');
      //
        function getProject(){
          const url = 'admin/scripts/portfolio_functions.php?project=';

          fetch(url)
            .then((resp) => resp.json())
            .then((data) => {
              let output = '';
              output +=`
              <i class="material-icons" id="close-modal">close</i>
              <h3>${data.project_name}</h3>
              <img src="images/${data.project_image1}" alt="Desktop image of ${data.project_name} website" width="100%">
              <img src="images/${data.project_image2}" alt="iPad images of ${data.project_name} website" width="100%">
              <img src="images/${data.project_image3}" alt="iPhone image of ${data.project_name} website" width="100%">
              <p>${data.project_description}</p>
              `;

              modal.innerHTML = output;
              //console.log(data.project_name);
            });
        }
        buttons.forEach(function(button, index) {
          button.addEventListener('click', getProject);
        });
      //end getProject
    });
    
  }
  window.onload=getPortfolioData;

})();
