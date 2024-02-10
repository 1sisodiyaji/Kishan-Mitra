const targetNumber1 =12279 ;
const counterElement1 = document.getElementById('counter1');
function displayCounting(targetNumber1, counterElement1) {
  for (let i = 0; i <= targetNumber1; i++) {
    setTimeout(() => {
      counterElement1.innerText = "+" + i;
    }, i );
  }
}
displayCounting(targetNumber1,counterElement1);


const targetNumber2 = 1789745;
const counterElement2 = document.getElementById('counter2');
function displayCounting2(targetNumber2, counterElement2) {
  for (let i = 0; i <= targetNumber2; i++) {
    setTimeout(() => {
      counterElement2.innerText = "+" + i;
    }, i*100 );
  }
}
displayCounting2(targetNumber2,counterElement2);


const targetNumber3 = 89;
const counterElement3 = document.getElementById('counter3');
function displayCounting3(targetNumber3, counterElement3) {
  for (let i = 0; i <= targetNumber3; i++) {
    setTimeout(() => {
      counterElement3.innerText = "+" + i;
    }, i*100 );
  }
}
displayCounting3(targetNumber3,counterElement3);

const targetNumber4 = 27;
const counterElement4 = document.getElementById('counter4');
function displayCounting4(targetNumber4, counterElement4) {
  for (let i = 0; i <= targetNumber4; i++) {
    setTimeout(() => {
      counterElement4.innerText = "+" + i;
    }, i*100 );
  }
}
displayCounting4(targetNumber4,counterElement4);


