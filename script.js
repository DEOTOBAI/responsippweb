// Select all input elements for varification
const email = document.getElementById("email");
const nama = document.getElementById("nama");
const namap = document.getElementById("namap");
const kelamin = document.getElementById("kelamin");
const kota = document.getElementById("kota");
const pekerjaan = document.getElementById("pekerjaan");
const nomorwa = document.getElementById("nomorwa");


// function for form varification
function Validation() {
  if (email.value.length < 11 || email.value.length > 35) {
    alert("Masukkan alamat email yang valid");
    return false;
  }
  if (nama.value.length < 2 || nama.value.length > 20) {
    alert("Panjang nama harus lebih dari 2 dan kurang dari 20 huruf");
    return false;
  }
  if (namap.value.length < 2 || namap.value.length > 20) {
    alert("Panjang nama harus lebih dari 2 dan kurang dari 20 huruf");
    return false;
  }
  if (kelamin.value === "") {
    alert("Masukkan jenis kelamin anda")
    return false;
  }
  if (kota.value === "") {
    alert("Masukkan domisili kota anda")
    return false;
  }
  if (pekerjaan.value === "") {
    alert("Masukkan pekerjaan anda")
    return false;
  }
  if (!nomorwa.value.match(/^[0-9]{12,13}$/)) {
    alert("Phone number must be 12 characters long number");
    nomorwa.focus();
    return false;
  }
  return true;
}