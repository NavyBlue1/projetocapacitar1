class id{
    id = 0
}
function novoInput(pai, button, placeholder,limite) {

    idBtn = new id()
    console.log(this.idBtn)
    // Criando um id único para cada elemento
    idAtual = idBtn

    // Criando o div que englobará os elementos novos, desta forma todos podem ser apagados de uma vez
    div = newElement('div')
    div.id = idAtual

    botaoAdd = button


    // Caixa de texto
    caixa = newElement('input')
    caixa.setAttribute("class", `${pai.id}`)
    caixa.type = "text"
    caixa.setAttribute("placeholder",placeholder)
    caixa.required = true

    // Botão para apagar o div 
    botaoDelete = newElement('button')
    botaoDelete.innerHTML = "-"
    botaoDelete.type = "button"
    botaoDelete.id = idAtual
    botaoDelete.setAttribute("class", "botao")
    botaoDelete.onclick = function () { removeElement(pai, document.getElementById(this.id)); }

    // Elemento para quebra de linha 
    lineBreak = newElement('br')

    // Atribuindo o div a um pai, e atribuindo os outros elementos a esse div 
    pai.appendChild(div)
    div.appendChild(caixa)
    div.appendChild(botaoDelete)

    // Desabilitar botão de adicionar
    if (idAtual >= limite) {
        botaoAdd.disabled = true;
    }
}

// Criar novo elemento
function newElement(elementType) {
    element = document.createElement(elementType);
    return element
}

// Apagar elemento
function removeElement(pai, element) {
    
    botaoAdd = button

    pai.removeChild(element)
    
    globalThis.id -= 1

    // Reabilitar botão de adicionar
    if(globalThis.id <= 2){
        botaoAdd.disabled = false;
    }
}