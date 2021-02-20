const endpoint_url = 'http://k-food.lokal/api';
document.addEventListener("DOMContentLoaded", function() {
postLogin();
getResep();
getDetail();
postTambah();
});

function postLogin() {
  fetch(endpoint_url + "/logins/login")
.then(status)
.then(json)
.then(function(data) {
var tb_header = `
<table id="tb_login">
<thead>
<tr>
<th>Nama</th>
<th>Username</th>
<th>Password</th>
<th>Umur</th>
<th>Pekerjaan</th>
<th>Email</th>
<th>No_hp</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
`;
$("#dttable").html( tb_header );
$('#tb_login').DataTable({
"data": data.resepdetail,
"columns": [
{ "data": "nama" },
{ "data": "username" },
{ "data": "password" },
{ "data": "umur" },
{ "data": "pekerjaan" },
{ "data": "email" },
{ "data": "no_hp" }
]
});
$('select').formSelect();
})
.catch(error);
}


  function getResep() {
    fetch(endpoint_url + "/reseps/resepdetail")
.then(status)
.then(json)
.then(function(data) {
  var tb_header = `
  <table id="tb_resep">
  <thead>
  <tr>
  <th>Nama Resep </th>
  <th>Sejarah Resep </th>
  <th>Jenis Masakan </th>
  <th>Bahan</th>
  <th>Cara Masak </th>
  <th>Waktu Masak </th>
  </tr>
  </thead>
  <tbody>
  </tbody>
  </table>
`;
  $("#dttable").html( tb_header );
  $('#tb_resep').DataTable({
  "data": data.resepdetail,
  "columns": [
  { "data": "nama_resep" },
  { "data": "sejarah_resep" },
  { "data": "jenis_masakan" },
  { "data": "bahan" },
  { "data": "cara_masak" },
  { "data": "waktu_masak" }
  ]
});
  $('select').formSelect();
})
.catch(error);
}


function getDetail() {
  fetch(endpoint_url + "/details/detailresep")
.then(status)
.then(json)
.then(function(data) {
var detailHTML = "";
data.detailresep.forEach(function(detail){
  detailHTML += `
  <div class = "col m3 s6">
  <div class = "card">
  <a href= "detail.html?nama_resep=${detailresep.nama_resep}">
    <div class="card-image waves-effect waves-block waves-light">
    <img src="img/${detailresep.image}"/>
    </div>
    </a>
  </div>
  </div>
  `;
$('#section_title').html("Detail");
});

document.getElementById('details').innerHTML = detailsHTML;
document.getElementById('section_title').innerHTML = sectiontitle;
})
.catch(error);
}


function postTambah() {
  fetch(endpoint_url + "/tambahs/tambahdetail")
.then(status)
.then(json)
.then(function(data) {
var tb_header = `
<table id="tb_tambah">
<thead>
<tr>
<th>Nama Resep </th>
<th>Sejarah Resep </th>
<th>Jenis Masakan </th>
<th>Nama Pembuat </th>
<th>Umur </th>
<th>Pekerjaan </th>
<th>Tahun Buat </th>
<th>Bahan</th>
<th>Cara Masak </th>
</tr>
</thead>
<tbody>
</tbody>
</table>
`;
$("#dttable").html( tb_header );
$('#tb_tambah').DataTable({
"data": data.tambahdetail,
"columns": [
{ "data": "nama_resep" },
{ "data": "sejarah_resep" },
{ "data": "jenis_masakan" },
{ "data": "nama_pembuat" },
{ "data": "umur" },
{ "data": "pekerjaan" },
{ "data": "tahun_buat" },
{ "data": "bahan" },
{ "data": "cara_masak" }
]
});
$('select').formSelect();
})
.catch(error);
}
