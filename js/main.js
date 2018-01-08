function getPortfolioData(){
  const url = 'admin/scripts/portfolio_functions.php';

  fetch(url)
    .then((resp) => resp.json())
    .then((data) => {
      let output = '';
      data.forEach(function(project){
        output += `
        <div id="gallery-item" class="col s12 l6 ${project.bckgrd_class}">
          <h3>${project.project_name}</h3>
          <img src="images/${project.project_image1}" alt="Desktop image of ${project.project_name} website" width="100%">
          <div id="learn-more">Learn More</div>
        </div>
        `;
      });
      document.getElementById('project-con').innerHTML = output;
    })
    .catch(function(error) {
        console.log(error); // catch any errors and show them in the console
      });
}

window.onload=getPortfolioData;
