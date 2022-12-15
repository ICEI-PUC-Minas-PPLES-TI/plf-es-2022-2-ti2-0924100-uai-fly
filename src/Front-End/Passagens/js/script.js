// aula 05
// criar a variável modalKey sera global
let modalKey = 0

// variavel para controlar a quantidade inicial de passagems na modal
let quantpassagems = 1

let cart = [] // carrinho
// /aula 05

// funcoes auxiliares ou uteis
const seleciona = (elemento) => document.querySelector(elemento)
const selecionaTodos = (elemento) => document.querySelectorAll(elemento)

const formatoReal = (valor) => {
    return valor.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
}

const formatoMonetario = (valor) => {
    if(valor) {
        return valor.toFixed(2)
    }
}

const abrirModal = () => {
    seleciona('.passagemWindowArea').style.opacity = 0 // transparente
    seleciona('.passagemWindowArea').style.display = 'flex'
    setTimeout(() => seleciona('.passagemWindowArea').style.opacity = 1, 150)
}

const fecharModal = () => {
    seleciona('.passagemWindowArea').style.opacity = 0 // transparente
    setTimeout(() => seleciona('.passagemWindowArea').style.display = 'none', 500)
}

const botoesFechar = () => {
    // BOTOES FECHAR MODAL
    selecionaTodos('.passagemInfo--cancelButton, .passagemInfo--cancelMobileButton').forEach( (item) => item.addEventListener('click', fecharModal) )
}

const preencheDadosDaspassagems = (passagemItem, item, index) => {
    // aula 05
    // setar um atributo para identificar qual elemento foi clicado
	passagemItem.setAttribute('data-key', index)
    passagemItem.querySelector('.passagem-item--img img').src = item.img
    passagemItem.querySelector('.passagem-item--price').innerHTML = formatoReal(item.price[2])
    passagemItem.querySelector('.passagem-item--name').innerHTML = item.name
    passagemItem.querySelector('.passagem-item--desc').innerHTML = item.description
}

const preencheDadosModal = (item) => {
    seleciona('.passagemBig img').src = item.img
    seleciona('.passagemInfo h1').innerHTML = item.name
    seleciona('.passagemInfo--desc').innerHTML = item.description
    seleciona('.passagemInfo--actualPrice').innerHTML = formatoReal(item.price[2])
}

// aula 05
const pegarKey = (e) => {
    // .closest retorna o elemento mais proximo que tem a class que passamos
    // do .passagem-item ele vai pegar o valor do atributo data-key
    let key = e.target.closest('.passagem-item').getAttribute('data-key')
    console.log('passagem clicada ' + key)
    console.log(passagemJson[key])

    // garantir que a quantidade inicial de passagems é 1
    quantpassagems = 1

    // Para manter a informação de qual passagem foi clicada
    modalKey = key

    return key
}

const preencherTamanhos = (key) => {
    // tirar a selecao de tamanho atual e selecionar o tamanho grande
    seleciona('.passagemInfo--size.selected').classList.remove('selected')

    // selecionar todos os tamanhos
    selecionaTodos('.passagemInfo--size').forEach((size, sizeIndex) => {
        // selecionar o tamanho grande
        (sizeIndex == 2) ? size.classList.add('selected') : ''
        size.querySelector('span').innerHTML = passagemJson[key].sizes[sizeIndex]
    })
}

const escolherTamanhoPreco = (key) => {
    // Ações nos botões de tamanho
    // selecionar todos os tamanhos
    selecionaTodos('.passagemInfo--size').forEach((size, sizeIndex) => {
        size.addEventListener('click', (e) => {
            // clicou em um item, tirar a selecao dos outros e marca o q vc clicou
            // tirar a selecao de tamanho atual e selecionar o tamanho grande
            seleciona('.passagemInfo--size.selected').classList.remove('selected')
            // marcar o que vc clicou, ao inves de usar e.target use size, pois ele é nosso item dentro do loop
            size.classList.add('selected')

            // mudar o preço de acordo com o tamanho
            seleciona('.passagemInfo--actualPrice').innerHTML = formatoReal(passagemJson[key].price[sizeIndex])
        })
    })
}

const mudarQuantidade = () => {
    // Ações nos botões + e - da janela modal
    seleciona('.passagemInfo--qtmais').addEventListener('click', () => {
        quantpassagems++
        seleciona('.passagemInfo--qt').innerHTML = quantpassagems
    })

    seleciona('.passagemInfo--qtmenos').addEventListener('click', () => {
        if(quantpassagems > 1) {
            quantpassagems--
            seleciona('.passagemInfo--qt').innerHTML = quantpassagems	
        }
    })
}
// /aula 05

// aula 06
const adicionarNoCarrinho = () => {
    seleciona('.passagemInfo--addButton').addEventListener('click', () => {
        console.log('Adicionar no carrinho')

        // pegar dados da janela modal atual
    	// qual passagem? pegue o modalKey para usar passagemJson[modalKey]
    	console.log("passagem " + modalKey)
    	// tamanho
	    let size = seleciona('.passagemInfo--size.selected').getAttribute('data-key')
	    console.log("Tamanho " + size)
	    // quantidade
    	console.log("Quant. " + quantpassagems)
        // preco
        let price = seleciona('.passagemInfo--actualPrice').innerHTML.replace('R$&nbsp;', '')
    
        // crie um identificador que junte id e tamanho
	    // concatene as duas informacoes separadas por um símbolo, vc escolhe
	    let identificador = passagemJson[modalKey].id+'t'+size

        // antes de adicionar verifique se ja tem aquele codigo e tamanho
        // para adicionarmos a quantidade
        let key = cart.findIndex( (item) => item.identificador == identificador )
        console.log(key)

        if(key > -1) {
            // se encontrar aumente a quantidade
            cart[key].qt += quantpassagems
        } else {
            // adicionar objeto passagem no carrinho
            let passagem = {
                identificador,
                id: passagemJson[modalKey].id,
                size, // size: size
                qt: quantpassagems,
                price: parseFloat(price) // price: price
            }
            cart.push(passagem)
            console.log(passagem)
            console.log('Sub total R$ ' + (passagem.qt * passagem.price).toFixed(2))
        }

        fecharModal()
        abrirCarrinho()
        atualizarCarrinho()
    })
}

const abrirCarrinho = () => {
    console.log('Qtd de itens no carrinho ' + cart.length)
    if(cart.length > 0) {
        // mostrar o carrinho
	    seleciona('aside').classList.add('show')
        seleciona('header').style.display = 'flex' // mostrar barra superior
    }

    // exibir aside do carrinho no modo mobile
    seleciona('.menu-openner').addEventListener('click', () => {
        if(cart.length > 0) {
            seleciona('aside').classList.add('show')
            seleciona('aside').style.left = '0'
        }
    });
}

const fecharCarrinho = () => {
    // fechar o carrinho com o botão X no modo mobile
    seleciona('.menu-closer').addEventListener('click', () => {
        seleciona('aside').style.left = '100vw' // usando 100vw ele ficara fora da tela
        seleciona('header').style.display = 'flex'
    })
}

const atualizarCarrinho = () => {
    // exibir número de itens no carrinho
	seleciona('.menu-openner span').innerHTML = cart.length
	
	// mostrar ou nao o carrinho
	if(cart.length > 0) {

		// mostrar o carrinho
		seleciona('aside').classList.add('show')

		// zerar meu .cart para nao fazer insercoes duplicadas
		seleciona('.cart').innerHTML = ''

        // crie as variaveis antes do for
		let subtotal = 0
		let desconto = 0
		let total    = 0

        // para preencher os itens do carrinho, calcular subtotal
		for(let i in cart) {
			// use o find para pegar o item por id
			let passagemItem = passagemJson.find( (item) => item.id == cart[i].id )
			console.log(passagemItem)

            // em cada item pegar o subtotal
        	subtotal += cart[i].price * cart[i].qt
            //console.log(cart[i].price)

			// fazer o clone, exibir na telas e depois preencher as informacoes
			let cartItem = seleciona('.models .cart--item').cloneNode(true)
			seleciona('.cart').append(cartItem)

			let passagemSizeName = cart[i].size

			let passagemName = `${passagemItem.name} (${passagemSizeName})`

			// preencher as informacoes
			cartItem.querySelector('img').src = passagemItem.img
			cartItem.querySelector('.cart--item-nome').innerHTML = passagemName
			cartItem.querySelector('.cart--item--qt').innerHTML = cart[i].qt

			// selecionar botoes + e -
			cartItem.querySelector('.cart--item-qtmais').addEventListener('click', () => {
				console.log('Clicou no botão mais')
				// adicionar apenas a quantidade que esta neste contexto
				cart[i].qt++
				// atualizar a quantidade
				atualizarCarrinho()
			})

			cartItem.querySelector('.cart--item-qtmenos').addEventListener('click', () => {
				console.log('Clicou no botão menos')
				if(cart[i].qt > 1) {
					// subtrair apenas a quantidade que esta neste contexto
					cart[i].qt--
				} else {
					// remover se for zero
					cart.splice(i, 1)
				}

                (cart.length < 1) ? seleciona('header').style.display = 'flex' : ''

				// atualizar a quantidade
				atualizarCarrinho()
			})

			seleciona('.cart').append(cartItem)

		} // fim do for

		// fora do for
		// calcule desconto 10% e total
		//desconto = subtotal * 0.1
		desconto = subtotal * 0
		total = subtotal - desconto

		// exibir na tela os resultados
		// selecionar o ultimo span do elemento
		seleciona('.subtotal span:last-child').innerHTML = formatoReal(subtotal)
		seleciona('.desconto span:last-child').innerHTML = formatoReal(desconto)
		seleciona('.total span:last-child').innerHTML    = formatoReal(total)

	} else {
		// ocultar o carrinho
		seleciona('aside').classList.remove('show')
		seleciona('aside').style.left = '100vw'
	}
}

const finalizarCompra = () => {
    seleciona('.cart--finalizar').addEventListener('click', () => {
        console.log('Finalizar compra')
        seleciona('aside').classList.remove('show')
        seleciona('aside').style.left = '100vw'
        seleciona('header').style.display = 'flex'
    })
}

// /aula 06

// MAPEAR passagemJson para gerar lista de passagems
passagemJson.map((item, index ) => {
    //console.log(item)
    let passagemItem = document.querySelector('.models .passagem-item').cloneNode(true)
    //console.log(passagemItem)
    //document.querySelector('.passagem-area').append(passagemItem)
    seleciona('.passagem-area').append(passagemItem)

    // preencher os dados de cada passagem
    preencheDadosDaspassagems(passagemItem, item, index)
    
    // passagem clicada
    passagemItem.querySelector('.passagem-item a').addEventListener('click', (e) => {
        e.preventDefault()
        console.log('Clicou na passagem')

        // aula 05
        let chave = pegarKey(e)
        // /aula 05

        // abrir janela modal
        abrirModal()

        // preenchimento dos dados
        preencheDadosModal(item)

        // aula 05
        // pegar tamanho selecionado
        preencherTamanhos(chave)

		// definir quantidade inicial como 1
		seleciona('.passagemInfo--qt').innerHTML = quantpassagems

        // selecionar o tamanho e preco com o clique no botao
        escolherTamanhoPreco(chave)
        // /aula 05

    })

    botoesFechar()

}) // fim do MAPEAR passagemJson para gerar lista de passagems

// aula 05
// mudar quantidade com os botoes + e -
mudarQuantidade()
// /aula 05

// aula 06
adicionarNoCarrinho()
atualizarCarrinho()
fecharCarrinho()
finalizarCompra()
// /aula 06
