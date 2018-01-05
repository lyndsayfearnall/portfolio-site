var myApp = {
  mainMessage : "Welcome to the app!",

  mainGreeting() {
    console.log('hey! welcome to my app, its really fun');
  }
};

myApp.module1 = {
  saySomething(message){
    console.log(myApp.mainMessage, message, 'I am a module');
  },

  doSomething() {
    console.log('called doSomething fom module1');
  }
};

myApp.module2 = {
  doSomethingElse() {
    console.log('called doSomethingElse fom module2 woooo!');
  }
};

(() => {
  myApp.mainGreeting();

  myApp.module1.saySomething("oh hello");

  function myFunc() {
    var theHeading = document.querySelector('h1').textContent = myApp.mainMessage;
  }

  myFunc();
})();
