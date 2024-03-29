/*
// file: matchLoto.js
// content: função para càlculo de quantidade de ocorrências de cada número em (n), em n(array)
// data: 16/03/2021
// author: Nei Thomassin Dutra (https://github.com/NeiTDutra)
*/

// processa o script ao carregar a página

window.onload = async () => {
    try {

        var numN = 0;
        return queryDbJson(numN);
    } catch (error) {
        console.error(error);
    }
};

// processa o script caso estipulado numero 'n' de resultados

function nResultados() {

    let num = document.getElementById('ultimos').value;

    let zero = document.querySelector('.zero');
    zero.parentNode.removeChild(zero);
    let one = document.querySelector('.one');
    one.parentNode.removeChild(one);
    let two = document.querySelector('.two');
    two.parentNode.removeChild(two);

    try {

        return queryDbJson(num);
    } 
    catch (error) {

        console.log(error);
    }
}

// declaração das variáveis

const matriz = [
     [01,02,03,05,06,09,11,13,14,15,17,18,22,23,25],
     [01,03,06,07,08,09,10,11,13,14,16,18,20,21,24],
     [03,06,07,08,09,10,13,14,15,16,18,19,20,21,25]
    ];
    
var reqN = [];
var dt = '00/00/0000';
var ns = '0000';

// função para consulta em arquivo json usando XMLHttpRequest

function queryDbJson(n) {

    let request = new XMLHttpRequest();
    let url = './datanumbers.json';
    
    request.open('POST', url, true);
    request.responseType = 'json';
    request.send(null);
    request.onload = () => {

        if(request.readyState === 4 && request.status === 200) {

            let a = request.response;
            let req = a.data;

            dt = a.date;
            ns = a.concurso;
            // testa se existe parametro passado na função
            if(n != null && n != 0) {

                console.log('VALOR DE N:', n);
                reqN = req.slice(0, n);
                console.log('ARRAY DEPOS DO SLICE:', reqN);
            }
            else {

                reqN = req;
            }
            // passa o resultado para a função principal
            main(reqN);
        }
    };
}

// função para consulta em arquivo json usando fetch
/*
async function queryDbJson() {
        await fetch('./dados.json')
        .then(responseStream => responseStream.json())
        .then(d => main(d.data))
        .catch(err => console.log(err));
}
*/
// função principal

function main(arr) {

    let m = 0;
    let res = [];
    let p = 0;
    let posii = 0;
    let rank = 0;

    console.log('VALOR DO ARRAY:', arr);
    // variável "i" incremental representa os numeros de 1 a 25 que
    // serão comparados com os números sorteados
    for(let i = 1; i <= 25; i ++) {
        // variável "j" incremental representa os índices da lista que
        // contém as listas dos números sorteados
        for(var j = 0; j < arr.length; j ++) {
            // variável "n" incremental representa os índices da lista de números
            // sorteados
            for(let n = 0; n < arr[j].length; n ++) {
                // compara os números e faz a contagem de quantas vezes cada número saiu
                // dentro da quantia de sorteios
                if(i === arr[j][n]) {
                    m ++;
                }
            }
        }
        // monta uma lista com os resultados
        res.push([i,m]);
        // zera o contador para o próximo laço
        m = 0;
    }
    // ordena o array de consulta para saída em ordem decrescente
    res.sort( (a,b) => {
        if(a[1] == b[1]) {

            return b[0] - a[0];
        }
        else {

            return b[1] - a[1];
        }
    });
    document.querySelector('#ultima_atualizacao').innerText = dt;
    document.querySelector('#ultimo_numero').innerText = ns;
    document.querySelector('#ultimos').value = j;

    // laço que imprime o resultado
    for(let r = 0; r < res.length; r ++) {

        rank = rank;
        if(res[r][1] !== posii) {

            rank = rank + 1;
            document.querySelector('#zero').innerHTML += '<br class="zero"><div class="zero bg-secondary text-white w-100 pt-1 pb-1">'+rank+'º</div>';
            document.querySelector('#one').innerHTML += '<br class="one"><div class="one bg-primary text-white w-100 pt-1 pb-1">'+res[r][1]+'</div>';
            document.querySelector('#two').innerHTML += '<br class="two"><div class="two bg-success text-white w-100 pt-1 pb-1" id="d'+r+'">|</div>';
            p = r
        }

        document.querySelector('#d'+p).innerText += ' '+res[r][0]+' |';
        posii = res[r][1];
    }
}
