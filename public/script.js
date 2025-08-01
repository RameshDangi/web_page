let form = document.log_form;
    email = form.email,
    addr = form.addr,
    pwd = form.pwd,
    cpwd = form.cpwd;

let empty_entry = [email,addr,pwd,cpwd];
empty_entry.forEach(item =>{
    if(item != undefined) {
        let span = document.createElement("span");
        span.classList.add("error");
        item.parentNode.append(span);
    }
});   

form.addEventListener('submit', function(e){
    if(email != undefined) {
        if(email.value.length === 0) {
            e.preventDefault();
            email.nextElementSibling.textContent = "Email must be require";
        }else {
            email.nextElementSibling.innerText = "";
        }
        
    }
    if(pwd != undefined) {
        if(pwd.value.length === 0) {
            e.preventDefault();
            pwd.nextElementSibling.textContent = "Password must require";
        } else {
            pwd.nextElementSibling.innerText = "";
        }
    }
    if(cpwd != undefined) {
        if(cpwd.value.length === 0) {
            e.preventDefault();
            cpwd.nextElementSibling.textContent = "Conform Password mus require";
        } else {
            cpwd.nextElementSibling.innerText = "";
        }
    }
});