function openPopup() {
  document.querySelector(".popup-form-container").style.display = "block";
}

function closePopup(inputId) {
  document.querySelector(".popup-form-container").style.display = "none";
  document.querySelector(".popup-form-container").style.display = "none";
  document.getElementById("name").value = "";
  document.getElementById("mobile").value = "";
  document.getElementById("email").value = "";
  document.getElementById("company").value = "";
  document.getElementById("productName").value = "";
  document.getElementById("document").value = "";
  document.getElementById("subject").value = "";
  document.getElementById("partnerInquiry").value = "";
}
