document.addEventListener("DOMContentLoaded", function() {
    fields.firstName = document.getElementById('name');
    fields.email = document.getElementById('mail');
    fields.houseNumber = document.getElementById('phone');
    fields.question = document.getElementById('query');
   })

   function isNotEmpty(value) {
    if (value == null || typeof value == 'undefined' ) return false;
    return (value.length > 0);
   }

   function isNumber(num) {
    return (num.length > 0) && !isNaN(num);
   }

   function isEmail(email) {
    let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    return regex.test(String(email).toLowerCase());
   }

   function fieldValidation(field, validationFunction) {
    if (field == null) return false;
   
    let isFieldValid = validationFunction(field.value)
    if (!isFieldValid) {
    field.className = 'placeholderRed';
    } else {
    field.className = '';
    }
   
    return isFieldValid;
   }

   function isValid() {
    var valid = true;
    
    valid &= fieldValidation(fields.firstName, isNotEmpty);
    valid &= fieldValidation(fields.lastName, isNotEmpty);
    valid &= fieldValidation(fields.gender, isNotEmpty);
    valid &= fieldValidation(fields.address, isNotEmpty);
    valid &= fieldValidation(fields.country, isNotEmpty);
    valid &= fieldValidation(fields.email, isEmail);
    valid &= fieldValidation(fields.houseNumber, isNumber);
    valid &= fieldValidation(fields.password, isPasswordValid);
    valid &= fieldValidation(fields.passwordCheck, isPasswordValid);
    valid &= fieldValidation(fields.question, isNotEmpty);
    valid &= arePasswordsEqual();
   
    return valid;
   }

   class User {
    constructor(firstName, lastName, gender, address, country, email, newsletter, question) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.gender = gender;
    this.address = address;
    this.country = country;
    this.email = email;
    this.newsletter = newsletter;
    this.question = question;
    }
   }