const form = document.querySelector(".signup login"),
constinueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

//  Evita que o form seja submitado
form.onsubmit = (e)=>{
    e.preventDefault();
}

constinueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "users.php";
                } else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}