const targetDiv = document.getElementById("jawaban");
const btn = document.getElementById("show");
btn.onclick = function showJawaban() {
  if (targetDiv.style.display !== "block") {
    targetDiv.style.display = "block";
  } else {
    targetDiv.style.display = "none";
  }
};