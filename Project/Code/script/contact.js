function send_response() {
    let na = document.getElementById("name").value;
    let mail = document.getElementById("Email").value;
    let ph = document.getElementById("phone").value;
    let msg = document.getElementById("message").value; 
    let cond=1; 
    if(na=='' ||mail=='' || ph=='' || msg=='' ){ cond = 0;}
    if (cond==1) {

    if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i.test(mail) && mail !='') {
        alert("Invalid email");
        cond = 0;
    }
    if (!/\d{10}/.test(ph)) {
        alert("Invalid phone number");
        cond = 0;
    }
    if (cond==0){
        body="Name : "+na+"\nMail : "+mail+"\nPhone : "+"Message : "+msg;
        sendEmail(body);
    }
  }
}

function sendEmail(cont) {
      Email.send({
        Host: "smtp.gmail.com",
        Username: "cse3002jcomp@gmail.com",
        Password: "IWPrankIt",
        To: 'cse3002jcomp@gmail.com',
        From: "cse3002jcomp@gmail.com",
        Subject: "Contacting Rank it",
        Body: cont,
      })
    }
