//Elementos
let data = document.getElementById('data')
let desc = document.getElementById('descricao')
let cat = document.getElementById('categoria')
let val = document.getElementById('valor')
let valor = Number(val.value)
let lancamentos = []

//Funções
function lancar() {
    let lancamento = [data.value, desc.value, cat.value, valor]
    console.log(lancamento)
}

//Eventos
