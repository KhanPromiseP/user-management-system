function validateUsername() {
    if (document.getElementById('username').value != "") {
        if (document.getElementById('username').value.length > 40) {
            alert("username must be in 40 letters or less than!");
            document.getElementById('username').focus();
            return false;
        }
        else{
            return true;
        }
    } else {
        alert("please enter a username");
        document.getElementById('username').focus();
        
    }
}
function validateUseremail() {
    const email = document.getElementById('email').value;
    if (email != "") {
        test = /(^[0-9a-Z]+\@[a-Z]+\.[a-z]+$)/;
        if (email.match(test)) {
            return true;
       
        } else {
            alert("invalid email format");
            email.focus();
            return false;
        }

    } else {
        alert("please enter email address!");
        email.focus();
        return false;
    }
}
function validateUserpassword() {
    if (document.getElementById('password').value != "") {
        if (document.getElementById('password').value.length > 40) {
            alert("password must be in 40 letters or less than!");
            document.getElementById('password').focus();
            return false;
        }else{
            return true;
        }
    } else {
        alert("please enter a password");
        document.getElementById('password').focus();
        return false;
    }
}

function validation() {
    if (!validateUsername()) {
        return false;
    }else if (!validateUseremail()) {
        return false;
    } else if (!validateUserpassword()) {
        return false;
    } else {
        return true;
    }
}
