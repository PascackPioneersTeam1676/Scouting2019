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

function updateForm(){
  document.getElementById("matchNumber-review").innerHTML = document.getElementById("matchNumber").value;
  document.getElementById("teamNumber-review").innerHTML = document.getElementById("teamNumber").value;
  document.getElementById("alliance-review").innerHTML = document.querySelector('input[name="alliance"]:checked').value;
  document.getElementById("startingPoint-review").innerHTML = document.querySelector('input[name="startingPoint"]:checked').value;
  document.getElementById("mode-review").innerHTML = document.querySelector('input[name="mode"]:checked').value;
  document.getElementById("rocketPanels-review").innerHTML = document.getElementById("rocketPanels").value;
  document.getElementById("rocketCargo-review").innerHTML = document.getElementById("rocketCargo").value;
  document.getElementById("cargoShipPanels-review").innerHTML = document.getElementById("cargoShipPanels").value;
  document.getElementById("cargoShipCargo-review").innerHTML = document.getElementById("cargoShipCargo").value;
  document.getElementById("hab-review").innerHTML = document.querySelector('input[name="hab"]:checked').value;
  document.getElementById("redScore-review").innerHTML = document.getElementById("redScore").value;
  document.getElementById("blueScore-review").innerHTML = document.getElementById("blueScore").value;
  document.getElementById("e-stopped-review").innerHTML = document.getElementById("e-stopped").checked;
  document.getElementById("dqed-review").innerHTML = document.getElementById("dqed").checked;
  document.getElementById("disabled-review").innerHTML = document.getElementById("disabled").checked;
  document.getElementById("bypassed-review").innerHTML = document.getElementById("bypassed").checked;
  stepper.next()
}
