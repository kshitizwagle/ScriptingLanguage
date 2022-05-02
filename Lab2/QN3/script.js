function validate() {
    const doc = document;
    const name = doc.getElementById('name').value;
    const phone = doc.getElementById('phone').value;
    const email = doc.getElementById('email').value;
    let valid = true;

    if (!name.match(/[a-zA-Z ]$/)) {
        window.alert('Name not valid');
        valid = false;
    }
    if (!phone.match(/[0-9]{10}$/)) {
        window.alert('Phone number must be in the format xxxxxxxxxx');
        valid = false;
    }

    if (!email.match(/\S+@\S+\.\S+/)) {
        window.alert('Invalid Email Address.');
        valid = false;
    }

    if (valid) {
        window.alert('Provided info. is valid.');
    }
}

document.getElementById('submit-button').addEventListener('click', validate);