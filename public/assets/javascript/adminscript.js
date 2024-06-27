$(".sidebar ul li").on("click", function () {
  $(".sidebar ul li.active").removeClass("active");
  $(this).addClass("active");
});
$(".open-btn").on("click", function () {
  $(".sidebar").addClass("active");
});
$(".close-btn").on("click", function () {
  $(".sidebar").removeClass("active");
});

$(document).ready(function () {
  $("#example").DataTable({
    responsive: true,
    columnDefs: [
      { responsivePriority: 1, targets: 0 },
      { responsivePriority: 2, targets: -1 },
    ],
  });
});

$(document).ready(function () {
  $(".table-data").DataTable({
    responsive: true,
    dom: "Bfrtip",
    buttons: ["copy", "csv", "excel", "pdf", "print"],
  });
});

$(document).ready(function () {
  $("#submitButton").click(function () {
    $("#addClass").submit();
  });
});

$(".hapusSiswa").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Data siswa akan dihapus secara permanen!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      // Jika pengguna mengonfirmasi penghapusan
      // Melanjutkan dengan mengarahkan ke URL penghapusan siswa
      window.location.href = $(this).attr("href");
    }
  });
});

$(".hapusKelas").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Apakah Anda yakin?",
    text: "Data kelas akan dihapus secara permanen!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
  }).then((result) => {
    if (result.isConfirmed) {
      // Jika pengguna mengonfirmasi penghapusan
      // Melanjutkan dengan mengarahkan ke URL penghapusan siswa
      window.location.href = $(this).attr("href");
    }
  });
});
