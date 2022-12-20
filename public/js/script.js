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