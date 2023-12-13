const username = document.getElementById('username')
const password = document.getElementById('password')
const cpassword = document.getElementById('cpassword')
const email = document.getElementById('email')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if(username.value === '' || username.value == null){
        messages.push("Username is required!")
    }
    if(password.value === '' || password.value == null){
        messages.push("Password is required!")
    }
    if(password.value.length <= 6){
        messages.push("Password must be greater than 6 characters!")
    }
    if(password.value === 'password'){
        messages.push("Password cannot be password!")
    }
    if(cpassword.value !== password.value){
        messages.push("Passwords do not match!")
    }
    if(email.value === '' || email.value == null){
        messages.push("Email is required!")
    }
    if(messages.length > 0){
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
    }
})