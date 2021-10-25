// fill job reference number
document.getElementById('refNum').value = localStorage.getItem('ref_no');
// get elements
const applyForm = document.getElementById('jobApplication');
const fName = document.getElementById('fname');
const lName = document.getElementById('lname');
const dob = document.getElementById('date');
const gender = document.getElementsByName('gender');
const street = document.getElementById('street');
const suburb = document.getElementById('suburb');
const state = document.getElementById('state');
const postcode = document.getElementById('postcode');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const skills = document.getElementsByName('skills[]');
const isOtherSkills = document.getElementById('isOtherSkills');
const otherSkills = document.getElementById('otherSkills');
const warning = document.getElementById('warning');
// Auto fill form from session storage
if(sessionStorage.getItem('form_data')){
    const data = JSON.parse(sessionStorage.getItem('form_data'));
    fName.value = data.fName;
    lName.value = data.lName;
    dob.value = data.dob;
    for(let i = 0; i < data.gender.length; i++){
        if(data.gender[i]){
            gender[i].checked = true;
        }
    }
    street.value = data.street;
    suburb.value = data.suburb;
    state.value = data.state;
    postcode.value = data.postcode;
    email.value = data.email;
    phone.value = data.phone;
}
// handle form submit event
applyForm.addEventListener('submit', function(e){
    e.preventDefault();
    const gndr = [];
    for(let i = 0; i < gender.length; i++) {
        gndr[i] = gender[i].checked;
    }
    const formData = {
        fName: fName.value,
        lName: lName.value,
        dob: dob.value,
        gender: gndr,
        street: street.value,
        suburb: suburb.value,
        state: state.value,
        postcode: postcode.value,
        email: email.value,
        phone: phone.value
    }
    if(isFormValid() == 'yes'){
        sessionStorage.setItem('form_data', JSON.stringify(formData));
        this.submit();
    }else{
        warning.innerHTML = isFormValid();
    }
});
// form validity check function
function isFormValid(){
    let age = new Date().getFullYear() - Number.parseInt(dob.value.substr(6));
    let msg = 'yes';
    let fds = Number.parseInt(postcode.value.substr(0,1));
    if(age >= 15 && age <= 60){
        switch(state.value){
            case 'vic':
                if(fds == 3 || fds == 8){
                } else {
                    msg = 'Postcode invalid';
                }
                break;
            case 'nsw':
                if(fds == 1 || fds == 2){
                } else {
                    msg = 'Postcode invalid';
                }
                break;
            case 'qld':
                if(fds == 4 || fds == 9){
                } else {
                    msg = 'Postcode invalid';
                }
                break;
            case 'nt':
                if(fds != 0){
                    msg = 'Postcode invalid';
                }
                break;
            case 'wa':
                if(fds != 6){
                    msg = 'Postcode invalid';
                }
                break;
            case 'sa':
                if(fds != 5){
                    msg = 'Postcode invalid';
                }
                break;
            case 'tas':
                if(fds != 7){
                    msg = 'Postcode invalid';
                }
                break;
            case 'act':
                if(fds != 0){
                    msg = 'Postcode invalid';
                }
                break;
        }
        if(isOtherSkills.checked && !otherSkills.value.length > 0){
            msg = 'Please fill or unckeak the other skills';
        }
    }else{
        msg = 'Age must be between 15 and 60';
    }
    return msg;
}