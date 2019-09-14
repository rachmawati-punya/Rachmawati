<!-- 
Pada sebuah form, terdapat 2 buah field yaitu: username, dan password. Buatlah function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:

Username, merupakan kombinasi dari huruf kecil. Dengan panjang tepat 5-9 karakter.
Password, merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang minimal 8 karakter.
 -->

 <?php 

function is_username_valid(username) {
  // Huruf dari a sampai z
  var lowercaseRe = /[a-z]/g;
  
  // check panjang string dan memastikan karater yang ditemukan sama dengan panjang string
  if(username.length == 8 && username.match(lowercaseRe).length == username.length) {
      return true;
    }
    return false;
}

function is_password_valid(password) {
  // huruf keci a sampai z
  var lowercaseRe = /[a-z]/g;
  
  // huruf besar A sampai Z
  var uppercaseRe = /[A-Z]/g;

  // angka dari 5 sampai 9
  var numberRe = /[5-9]/g;

  // karater unik _@#$ atau %
  var specialRe = /[_@#$%]/g;

  if(password.length == 8
     && lowercaseRe.test(password)
     && uppercaseRe.test(password)
     && numberRe.test(password)
     && specialRe.test(password)) {
     return true;
  }
  ?>