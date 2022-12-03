$(document).ready(function () {
  $("#data-kelas").DataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: "http://localhost:8080/admin/json",
    },
    columns: [
      { data: "id_kelas", name: "id_kelas" },
      { data: "nama_kelas", name: "nama_kelas" },
      { data: "nama_jenis", name: "nama_jenis" },
      { data: "ket_kelas", name: "ket_kelas" },
      {
        data: "harga",
        render: $.fn.dataTable.render.number(".", ",", 2, "Rp "),
      },
      { data: "action", name: "action" },
    ],
    columnDefs: [{ width: 400, targets: 3 }],
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
