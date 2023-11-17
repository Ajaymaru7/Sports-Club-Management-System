const username = document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if(username.value === '' || username.value == null){
        messages.push('username is required!')
    }

    if(number.value === '' || number.value == null){
        messages.push('tournament no is required!')
    }

    if(password.value.length <= 6){
        messages.push('password must be 8 or 16 character!')
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})