



const formulario = document.querySelector("#form");
const Inome = document.querySelector(".nome");
const Iemail = document.querySelector(".email");
const Isenha = document.querySelector(".senha");
const Itel = document.querySelector(".tel");

console.log(Inome);
function cadastrar(){
    fetch("http://localhost:9399/usuarios",
    { headers: {
             "Accept": "application/json",
             "Content-type": "application/json"
    },

    method: "POST",
    body: JSON.stringify({
      
      nome: Inome.value,
      email: Iemail.value,
      senha: Isenha.value,
      telefone: Itel.value
     
      
    })
 })
 .then(function(res){console.log(res) })
 .catch(function(res){console.log(res) })
    
    
    
    
}


function limpar(){
    Inome.value = "";
     Iemail.value = "";
    Isenha.value = "";
     Itel.value = "";
   
}


formulario.addEventListener('submit', function(event){

    event.preventDefault();
    
cadastrar();
limpar();
    });


const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});