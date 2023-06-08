/* =====  State and City ===== */

var citiesByState = {
  Gujarat: ['Ahmedabad','Vadodara','Surat','Gandhinagar','Surendranagar','Rajkot'],
  Rajasthan: ['Jaipur','Udaipur','Jodhpur'],
  Maharashtra: ['Mumbai','Pune','Nashik','Aurangabad'],
  Uttarpradesh: ['Kanpur','Lucknow','Agra','Varanasi'],
  Madhyapradesh: ['Jabalpur','Indore','Bhopal','Gwalior']
  }
  function makeSubmenu(value) {
  if(value.length==0) document.getElementById("city").innerHTML = "<option></option>";
  else {
  var citiesOptions = "";
  for(cityId in citiesByState[value]) {
  citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
  }
  document.getElementById("city").innerHTML = citiesOptions;
  }
  }
  // function displaySelected() { var country = document.getElementById("state").value;
  // var city = document.getElementById("city").value;
  // alert(country+"\n"+city);
  // }
  function resetSelection() {
  document.getElementById("state").selectedIndex = 0;
  document.getElementById("city").selectedIndex = 0;
  }

/* Contact and Email validation */

 
//    function validate() {
//     let email = document.getElementById("email").value;
//     let EmailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     if (email.match(EmailFormat)) {
//         document.getElementById("emailErr").innerText = ""
//         return true;
//     }
//     else {
//         document.getElementById("emailErr").innerText = "Please enter the valid email id"
//         return false;
//     }
// }
    // if ($("#add_food").length > 0) {
    //   $("#add_food").validate({
    //     rules: { 
    //       contact: { 
    //         minlength: 10,
    //       }
    //     },
    //     messages: {
    //       contact: {
    //         minlength: "The contact number length is must be 10 characters",
    //       } 
    //     },
    //   })
    // }