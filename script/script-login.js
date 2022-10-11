function logar() {
    let login = document.getElementById('login').value;
    let senha = document.getElementById('senha').value;

    if (login == 'admin' && senha == 'admin') {
        location.href = 'index.html'
    } else {
        alert('Usuário e/ou senha incorretos!')
    }
}