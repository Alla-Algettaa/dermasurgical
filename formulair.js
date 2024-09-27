function confirme(id) {
  var conf = confirm("Voulez vous vraiment supprimer cet enregistrement?");
  if (conf) {
    document.location.href =
      "http://localhost/dermasurgical/sppression.php?code=" +
      id;
  }
}
function consulterProfile(id) {
  document.location.href =
    "http://localhost/dermasurgical/profile.php?code=" + id;
}


function confirme2(id) {
  var conf = confirm("Voulez vous vraiment supprimer cet enregistrement?");
  if (conf) {
    document.location.href =
      "http://localhost/dermasurgical/sppression2.php?code=" +
      id;
  }
}
