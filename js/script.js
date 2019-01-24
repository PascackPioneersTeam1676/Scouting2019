var stepper = null;
document.addEventListener('DOMContentLoaded', function () {
  stepper = new Stepper(document.querySelector('.bs-stepper'))
})

function plus(countName){
  var count = countName.value;
  count++;
  if (count >= 3) {
    count = 3;
  }
  countName.value = count;
}

function minus(countName){
  var count = countName.value;
  count--;
  if (count <= 0) {
    count = 0;
  }
  countName.value = count;
}
