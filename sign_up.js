function signup() {

    let fname = document.getElementById("first-name").value;
    let lname = document.getElementById("last-name").value;
    let username = document.getElementById("UserName").value;
    let email = document.getElementById("email").value;

    let pass1 = document.getElementsByName("password")[0].value;
    let pass2 = document.getElementsByName("password")[1].value;

}
 if (pass1.length < 8) {
        alert("Password must be at least 8 characters!");
        return false;
    }

     if (pass1 !== pass2) {
        alert("Passwords do not match!");
        return false;
    }


    for (let i = 0; i < users.length; i++) {
        if (users[i].email === email) {
            alert("Email already exists!");
            return false;
        }
    }


    for (let i = 0; i < users.length; i++) {
        if (users[i].username === username) {
            alert("Username already exists!");
            return false;
        }
    }

    users.push({
        fname: fname,
        lname: lname,
        username: username,
        email: email,
        password: pass1
    });
