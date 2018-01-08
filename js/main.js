// function getPortfolioData(){
//   const url = './includes/functions.php';
//
//   fetch(url)
//     .then((resp) => resp.json())
//     .then((data) => {
//       let output = '<h2>My <span class="title-bold">Work</span></h2>';
//       data.forEach(function(project){
//         output += `
//         <div id="gallery-item" class="col s12 l6 ${project.bckgrd_class}">
//           <h3>${project.project_name}</h3>
//           <p>${project.project_description}</p>
//           <img src="images/${project.project_image1}" alt="Desktop image of ${project.project_name} website" width="100%">
//           <div id="learn-more">Learn More</div>
//         </div>
//         `;
//       });
//       document.getElementById('project-con').innerHTML = output;
//     })
//     .catch(function(error) {
//         console.log(error); // catch any errors and show them in the console
//       });
// }
//
// //window.onload = getPortfolioData;
// window.onload = console.log("working");
