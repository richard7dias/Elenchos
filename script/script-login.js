let login = document.getElementById('login')
let senha = document.getElementById('senha')
let res = document.getElementById('res')

function logar() {
    if (login.value == 'admin' && senha.value == 'admin') {
        location.href = 'resumo.html'
    } else {
        res.innerHTML = 'Usuário e/ou senha incorretos!'
    }
}