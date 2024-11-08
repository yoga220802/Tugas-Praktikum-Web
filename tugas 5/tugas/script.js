document.addEventListener("DOMContentLoaded", () => {
 const angka1Input = document.querySelector("input[name='angka1']");
 const angka2Input = document.querySelector("input[name='angka2']");
 const operasiSelect = document.querySelector("select[name='operasi']");
 const hasilDiv = document.getElementById("field-hasil"); // Referensi ke div hasil

 function saveToLocalStorage() {
  localStorage.setItem("angka1", angka1Input.value);
  localStorage.setItem("angka2", angka2Input.value);
  localStorage.setItem("operasi", operasiSelect.value);
 }

 function loadFromLocalStorage() {
  angka1Input.value = localStorage.getItem("angka1") || "";
  angka2Input.value = localStorage.getItem("angka2") || "";
  operasiSelect.value = localStorage.getItem("operasi") || "modulus";

  if (angka1Input.value) angka1Input.classList.add("has-content");
  if (angka2Input.value) angka2Input.classList.add("has-content");
  if (operasiSelect.value) operasiSelect.classList.add("has-content");
 }

 function clearLocalStorage() {
  localStorage.removeItem("angka1");
  localStorage.removeItem("angka2");
  angka1Input.value = "";
  angka2Input.value = "";
  angka1Input.classList.remove("has-content");
  angka2Input.classList.remove("has-content");

  // Kosongkan hasil
  hasilDiv.innerHTML = "";
 }

 loadFromLocalStorage();

 document.querySelector("form").addEventListener("submit", saveToLocalStorage);
 document
  .querySelector(".reset-btn")
  .addEventListener("click", clearLocalStorage);

 document
  .querySelectorAll(".input-group input, .input-group select")
  .forEach((input) => {
   input.addEventListener("focus", () => input.classList.add("has-content"));
   input.addEventListener("blur", () => {
    if (!input.value) input.classList.remove("has-content");
   });
  });
});
