const counterEls = document.querySelectorAll('.counter');

counterEls.forEach(counterEl => {
  const minusEl = counterEl.querySelector('[data-minus]');
  const plusEl = counterEl.querySelector('[data-plus]');
  const numberEl = counterEl.querySelector('[data-number]');
  let number = +counterEl.dataset.number;

  const changeNumber = (num) => {
    number = num;
    numberEl.innerHTML = number; 
  };

  minusEl.onclick = () => changeNumber(number - 1);
  plusEl.onclick = () => changeNumber(number + 1);
});