function carregar() {
msg = window.document.getElementById('msg')
img = window.document.getElementById('imagem')
data = new Date()
hora = data.getHours()
minutos = data.getMinutes()
//hora = 9
if(hora >= 0 && hora < 12){
    //Bom dia
    msg.innerHTML = `Bom dia, são ${hora}:${minutos}.`
    img.src = 'fotos/cafe.png'
    document.body.style.background = '#e2cd9f'
} else if (hora >= 12 && hora < 18) {
    //Boa tarde
    msg.innerHTML = `Boa tarde, são ${hora}:${minutos}.`
    img.src = 'fotos/job.jpg'
    document.body.style.background = 'gray'
} else {
    //Boa noite
    msg.innerHTML = `Boa noite, são ${hora}:${minutos}.`
    img.src = 'fotos/rua.jpg'
    document.body.style.background = '#515154'
}
}
function verificar(){
    ano = data.getFullYear()
    fano = document.getElementById('txtano')
    res = document.querySelector('div#res') 
    if (fano.value.length == 0 || Number(fano.value) > ano){
        window.alert('Erro data inválida, tente novamente!')
    } else {
        fsex = document.getElementsByName('radsex')
        idade = ano - Number(fano.value)
        genero = ''
        img = document.createElement('img')
        img.setAttribute('id','foto')
        if(fsex[0].checked){
            genero = 'Homem'
                if(idade >= 0 && idade < 10) {
                //criança
                img.setAttribute('src', 'fotos/bebe.jpg')
                } else if (idade < 21) {
                //Jovem
                img.setAttribute('src', 'fotos/jovem.jpg')
                } else if(idade < 50) {
                //Adulto
                img.setAttribute('src', 'fotos/adulto.jpg')
                } else {
                //Idoso
                img.setAttribute('src', 'fotos/idoso.jpg')
                }            

        } else if(fsex[1].checked) {
            genero = 'Mulher'
                if(idade >= 0 && idade < 10) {
                //criança
                img.setAttribute('src', 'fotos/bebef.jpg')
                } else if (idade < 21) {
                //Jovem
                img.setAttribute('src', 'fotos/jovemf.jpg')
                } else if(idade < 50) {
                //Adulto
                img.setAttribute('src', 'fotos/adulta.jpg')
                } else {
                //Idoso
                img.setAttribute('src', 'fotos/idosa.jpg')
                }
        }
        res.style.textAlign = 'center'
        res.innerHTML = `Detectamos ${genero} com ${idade} anos.`
        res.appendChild(img)
    }
}

