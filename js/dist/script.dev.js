"use strict";

function hidden1() {
  document.getElementById('div14').style.display = 'none';
  document.getElementById('div15').style.display = 'none';
}

function show2() {
  document.getElementById('div14').style.display = 'block';
  document.getElementById('div15').style.display = 'block';
}

function show3() {
  document.getElementById('div16').style.display = 'block';
}

function hidden2() {
  document.getElementById('div16').style.display = 'none';
}

function show4() {
  document.getElementById('div17').style.display = 'block';
}

function hidden3() {
  document.getElementById('div17').style.display = 'none';
}

function condicionOnChange(sel) {
  if (sel.value == "cpropia") {
    divC = document.getElementById("div18");
    divC.style.display = "";
    divT = document.getElementById("div19");
    divT.style.display = "none";
  } else {
    divC = document.getElementById("div18");
    divC.style.display = "none";
    divT = document.getElementById("div19");
    divT.style.display = "";
  }
}

function materialOnChange(sel) {
  if (sel.value == "#") {
    divC = document.getElementById("div19");
    divC.style.display = "none";
    divT = document.getElementById("div20");
    divT.style.display = "none";
  } else {}
}