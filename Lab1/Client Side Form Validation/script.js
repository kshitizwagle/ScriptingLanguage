const doc = document;
document.getElementById('submit-button').addEventListener('click', validate);

function validate() {
    const passwordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    const emailRegEx = /\S+@\S+\.\S+/;
    const name = doc.getElementById('name').value;
    const password = doc.getElementById('password').value;
    const confirmPassword = doc.getElementById('confirm-password').value;

    let valid = true;
    
    const email = doc.getElementById('email').value;
    if(name.length < 10){
        window.alert('Name must be 10 characters.');
        valid = false;
    }
    
    if(!password.match(passwordRegEx)){
        window.alert('Invalid Password. Must have one uppercase, one lowercase, one special character and  8 characters.')        
        valid = false;
    }

    if(confirmPassword !== password){
        window.alert('Passwords do not match, try again.');
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