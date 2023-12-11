const username = document.getElementById("username")
const password = document.getElementById("password")
const form = document.getElementById("form")
const errorElement = document.getElementById("error")

form.addEventListener('submit', (e) =>{

    let messages=[]
    if(username == "" || username == null){
        messages.push("Please enter your username")
    }
    if(password == "" || password == null){
        messages.push("Please enter your password")
    }
    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(" | ")
    }
})