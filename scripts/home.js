let myButton = document.querySelector('button');
let myHeading = document.querySelector('h1');

myButton.onclick = function() {
    setUserName();
  };

  function setUserName() {
    let myName = prompt('Please enter your name.');
    if(!myName) {
      setUserName();
    } else {
      localStorage.setItem('name', myName);
      myHeading.textContent = 'Hello, ' + myName + ', please be welcomed.';
    }
  }

  /*if(!localStorage.getItem('name')) {
    setUserName();
  } else {
    let storedName = localStorage.getItem('name');
    myHeading.textContent = 'Hello, ' + storedName + ' welcome to my site';
  };

     document.querySelector('p').onclick = function() {
    alert('Ouch! Stop poking me!');
};*/
    