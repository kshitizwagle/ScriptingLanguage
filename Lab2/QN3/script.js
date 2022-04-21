const doc = document;
document.getElementById('submit-button').addEventListener('click', validate);
function validate() {
    const name = doc.getElementById('name').value;
    const phone = doc.getElementById('phone').value;
    const email = doc.getElementById('email').value;
    const phoneRegEx = /[0-9]{10}$/;
    const emailRegEx = /\S+@\S+\.\S+/;
    const nameRegEx = /[a-zA-Z ]$/;

    let valid = true;

    if (!name.match(nameRegEx)) {
        window.alert('Name not valid');
        valid = false;
    }
    if (!phone.match(phoneRegEx)) {
        window.alert('Phone number must be in the format xxxxxxxxxx');
        valid = false;
    }

    if (!email.match(emailRegEx)) {
        window.alert('Invalid Email Address.');
        valid = false;
    }

    if (valid) {
        window.alert('Provided info. is valid.');
    }
}

