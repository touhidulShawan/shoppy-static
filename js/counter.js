let count = 1;
const resultBox = document.getElementById("product-quantity-result");

// get decrease button
const dBtn = document.getElementById("product_decrease");

console.log(resultBox.value);

if (resultBox.value == 1) {
  dBtn.classList.add("disabled-btn");
  dBtn.disabled = true;
}

function increase() {
  count++;
  resultBox.value = count;
  if (resultBox.value > 1) {
    dBtn.classList.remove("disabled-btn");
    dBtn.disabled = false;
  }
}

function decrease() {
  count--;

  resultBox.value = count;
  if (resultBox.value == 1) {
    dBtn.classList.add("disabled-btn");
    dBtn.disabled = true;
  }
}
