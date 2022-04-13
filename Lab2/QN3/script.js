const doc = document;
document.getElementById('submit-button').addEventListener('click', validate);

function validate() {
    const phoneRegEx = /^(9)\d{9}$/;
    const emailRegEx = /\S+@\S+\.\S+/;
    const name = doc.getElementById('name').value;
    const phone = doc.getElementById('phone').value;
    const email = doc.getElementById('email').value;
    let valid = true;
    
    if(name.length < 10){
        window.alert('Name must be 10 characters.');
        valid = false;
    }
    
    if(!phone.match(phoneRegEx)){
        window.alert('Phone number must be in the format xxxxxxxxxx');
        valid = false;
    }

    if(!email.match(emailRegEx)){
        window.alert('Invalid Email Address.');
        valid = false;
    } 

    if(valid){
        window.alert('Provided information is valid.');
    }
}

