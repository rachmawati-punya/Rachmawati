<!-- 
Buatlah sebuah method/function untuk me-return biodata asli anda, dengan ketentuan sbb:
1. name(String)
2. age (number)
3. addres (string)
4. hobbies (array)
5. is_married (boolean)
6. list_school (array of object)
7. skill (array of object)
8. interest_in_coding (Boolean)


 -->
<?php 
function getProfile() {
  return {
    name: 'Rachmawati',
    age :'22' 
    address: 'Jl. bukit barisan no 100, pekanbaru, riau',
    hobbies: ['travelling'] //Array,
    is_married: false //Boolean,
    school: {
      
      university: 'Politeknik Caltex Riau'
    }, // Object
    skills: [{
      name: 'design',
      years_of_experience: 1
    },{
      name: 'programmer',
      years_of_experience: 1
    }] // Array Of Object
  }

}

let profile = getProfile();

let skills = profile.skills;

// megakses sekolah
let university = profile.school.university;
//atau pakai es6

let {skills} = profile;

// print json yang telah di convert ke type String
console.log(JSON.stringify(skills));


 ?>
 