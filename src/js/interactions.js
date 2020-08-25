function wireframe() {
  let e = document.getElementById('x3d');
  e.runtime.togglePoints(true);
}

let headlightOn = true;

function headlight() {
  headlightOn = !headlightOn;
  document.getElementById('model__NavInfo').setAttribute('headlight', headlightOn.toString());
}

function defaultView() {
  document.getElementById('model__Default').setAttribute('bind', 'true');
}

function sideView() {
  document.getElementById('model__Side').setAttribute('bind', 'true');
}

function backView() {
  document.getElementById('model__Back').setAttribute('bind', 'true');
}
