var canvas = document.querySelector('canvas');
var clear = document.getElementById('clear');
var ctx = canvas.getContext('2d');
var baseColor = 'blue';

canvas.width = innerWidth;
canvas.height = innerHeight;

ctx.fillStyle = '#000';
ctx.fillRect(0, 0, canvas.width, canvas.height);


var line = function line(x, y) {
  var color = randomColor({ hue: baseColor });
  ctx.shadowColor = color;
  ctx.shadowBlur = 60;
  ctx.beginPath();
  ctx.moveTo(x, y);
  ctx.lineTo(x + 40, y - 40);
  ctx.lineTo(x + 150, y + 40);
  ctx.strokeStyle = color;
  ctx.stroke();
};

canvas.addEventListener('mousemove', function (e) {
  line(e.clientX, e.clientY);
});

canvas.addEventListener('touchstart', function (e) {
  line(e.clientX, e.clientY);
});

canvas.addEventListener('click', function () {
  baseColor = '#' + (0x1000000 + Math.random() * 0xffffff).toString(16).substr(1, 6);
});

