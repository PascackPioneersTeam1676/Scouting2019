$(document).ready(function () {
    $("#studA").hide();
    $("#studB").hide();
    $("#studC").hide();
    $("#mentA").hide();
    var input = document.getElementById('next');
    document.getElementById('stud').addEventListener('click', function () {
        studQuestions();
    });
    document.getElementById('ment').addEventListener('click', function () {
        mentQuestions();
    });
    document.getElementById('par').addEventListener('click', function () {
        parQuestions();
    });

    function studQuestions(){
        $("#studA").show();
        $("#studB").show();
        $("#studC").show();
        $("#mentA").hide();
    }
    function mentQuestions(){
        $("#studA").hide();
        $("#studB").hide();
        $("#studC").hide();
        $("#mentA").show();
    }
    function parQuestions(){
        $("#studA").hide();
        $("#studB").hide();
        $("#studC").hide();
        $("#mentA").hide();
    }
});

$(".form")
  .find("input, textarea, select")
  .on("keyup blur focus", function(e) {
    var $this = $(this),
      label = $this.prev("label");

    if (e.type === "keyup") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.addClass("active highlight");
      }
    } else if (e.type === "blur") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.removeClass("highlight");
      }
    } else if (e.type === "focus") {
      if ($this.val() === "") {
        label.removeClass("highlight");
      } else if ($this.val() !== "") {
        label.addClass("highlight");
      }
    }
  });

$(".tab a").on("click", function(e) {
  e.preventDefault();

  $(this)
    .parent()
    .addClass("active");
  $(this)
    .parent()
    .siblings()
    .removeClass("active");

  target = $(this).attr("href");

  $(".tab-content > div")
    .not(target)
    .hide();

  $(target).fadeIn(600);
});

function addClassByClickA(){
  $(dropA).addClass("active")
}

function addClassByClickB(){
  $(dropB).addClass("active")
}

function addClassByClickC(){
  $(dropC).addClass("active")
}



var i = 2;
function nextStep() {
  $('.progress .circle:nth-of-type(' + i + ')').addClass('active');

  $('.progress .circle:nth-of-type(' + (i-1) + ')').removeClass('active').addClass('done');

  $('.progress .circle:nth-of-type(' + (i-1) + ') .label').html('&#10003;');

  $('.progress .bar:nth-of-type(' + (i-1) + ')').addClass('active');

  $('.progress .bar:nth-of-type(' + (i-2) + ')').removeClass('active').addClass('done');

  i++;

  if (i==0) {
    $('.progress .bar').removeClass().addClass('bar');
    $('.progress div.circle').removeClass().addClass('circle');
    i = 1;
  }
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
