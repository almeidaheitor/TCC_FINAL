const urlUF = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';

const uf = document.getElementById("estado");
const cidade = document.getElementById("cidade");

uf.addEventListener('change', async function(){
    const urlCid = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+ uf.value +'/municipios';
    const request = await fetch(urlCid);
    const response = await request.json()
    let options = '';
    response.forEach(function(cidades){
        options += '<option>'+cidades.nome+'</option>'
    })
    cidade.innerHTML = options
})

window.addEventListener('load', async () => {
    const request = await fetch(urlUF);
    const response = await request.json();
    
    const options = document.createElement("optgroup");
    options.setAttribute('label', 'UFs')
    response.forEach(function(uf){
        options.innerHTML += '<option>'+uf.sigla+'</option>'
    })

    uf.append(options); 
});

//https://servicodados.ibge.gov.br/api/v1/localidades/estados/{UF}/municipios