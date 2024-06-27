// Submit Button
$(document).ready(function () {
  $("#submitButton").click(function () {
    $("#saveTes").submit();
  });
});

// show error in seconds
const alertBox = document.querySelector(".alert");
if (alertBox) {
  alertBox.style.display = "none";
  alertBox.style.opacity = "0";
  alertBox.style.transition = "opacity 0.5s ease-in-out";
  alertBox.style.display = "block";
  alertBox.style.opacity = "1";
  // Menunda tampilan selama 3 detik sebelum menyembunyikan elemen
  setTimeout(() => {
    alertBox.style.opacity = "0";
    setTimeout(() => {
      alertBox.style.display = "none";
    }, 500);
  }, 10000);
}
