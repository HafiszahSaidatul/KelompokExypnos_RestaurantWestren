document.querySelectorAll('input').forEach((item) => {
  item.addEventListener("focus", function () {
    item.previousElementSibling.className = 'label-selected';
  })
  item.addEventListener("blur", function () {
    console.log(item.value);
    if (item.value === '') {
      item.previousElementSibling.className = '';
    }
  })
})

function imgSlider(anything){
  document.querySelector('.starbucks').src = anything;
}
function changeCircleColor(color){
  const circle = document.querySelector('.circle');
  circle.style.background = color;
}