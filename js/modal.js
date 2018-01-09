(function(){
  // //Modal
  // let learnButtons = document.querySelectorAll('.learn-more');
  //
  //   function popModal(){
  //     console.log("help");
  //     }
  //
  //     learnButtons.forEach(function(learnButton) {
  //       learnButton.addEventListener('click', popModal, false);
  //   });

let buttons = document.querySelectorAll('.learn-more')

  function button (){
    console.log('button');
  }

  buttons.forEach(function(button){
    button.addEventListener('click', button, false);
    console.log(button);
  });

})();
