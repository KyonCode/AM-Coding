let myButton = document.querySelector("button1");
let myHeading = document.querySelector("h1");

myButton.onclick = function () {
  setUserName();
};

function setUserName() {
  let myName = prompt("Please enter your name.");
  if (!myName) {
    setUserName();
  } else {
    localStorage.setItem("name", myName);
    myHeading.textContent = "Hello, " + myName + ", please be welcomed.";
  }
}

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
    n - o - pnp - 0;
  } else {
    x.className = "topnav";
  }
}
