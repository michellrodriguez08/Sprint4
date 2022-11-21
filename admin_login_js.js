function validateForm(event) {
    let message = document.getElementById('error');

    // let uname = document.getElementById('uname').value;
    // let pword = document.getElementById('password').value;
    if (document.getElementById("uname").value == "admin" && document.getElementById("password").value == "admin") {
        // document.getElementById('error').classList.add('hidden');
        return true;

    } else {
        //document.getElementById('error').classList.remove('hidden');
        alert('Invalid username or password. Please try again');

    }
    event.preventDefault();
}
document.getElementById('form_login').addEventListener('submit', validateForm);