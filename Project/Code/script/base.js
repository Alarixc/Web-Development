function check_user() {
    user = document.cookie;
    user = user.match(/=\w+$/g);
    user = user[0].match(/\w+$/g);
    if (user) {
        log = document.getElementById("login");
        log.style.display="none";
        username = document.getElementById("username");
        username.style.display="inline-block";
        username.innerHTML = user;
        document.getElementById("comp").setAttribute("href",'./complaint.php');
    }
}

function logout() {
    let confirmAction = confirm("Are you sure you want to logout ?");
    if (confirmAction) {
        document.cookie='user=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;'  
        log = document.getElementById("login");
        log.style.display="inline-block";
        username = document.getElementById("username");
        username.style.display="none";
        username.innerHTML = "";
        document.getElementById("comp").setAttribute("href",'');
    }
    
}

function complaint() {
    user = document.cookie;
    user = user.match(/=\w+$/g);
    if (user) {  
    }
    else{
    alert("You have to login to access Complaints");
    }
}
