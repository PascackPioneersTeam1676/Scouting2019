var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

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

var formNumber = 1;
function nextForm() {
  if(formNumber == 4) {
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
  }
}

function lastForm() {

}
