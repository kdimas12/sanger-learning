$(document).ready(function () {
  $("#data-kelas").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "http://localhost:8080/dashboard/json",
    },
    columns: [
      { data: "id_kelas", name: "id_kelas" },
      { data: "nama_kelas", name: "nama_kelas" },
      { data: "id_jenis", name: "id_jenis" },
      { data: "ket_kelas", name: "ket_kelas" },
      { data: "harga", name: "harga" },
      { data: "action", name: "action" },
    ],
    columnDefs: [{ width: 100, targets: 5 }],
  });

  const url = window.location.href;
  $("ul.navbar-nav a")
    .filter((x, y) => {
      return y == url;
    })
    .addClass("active");

  $("#datepicker").datepicker({
    changeYear: true,
    changeMonth: true,
    yearRange: "-80:+00",
    onSelect: (dateText, inst) => {
      $("#" + inst.id).attr("value", dateText);
    },
  });
});
