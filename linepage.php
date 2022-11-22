<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto minha home page</title>
    <link rel="stylesheet" href="estilo.css">
</head>
    <body onload="carregar()">
        <header>
            <h1>Hora do dia</h1>
        </header>
        <section>
            <div id="msg">        
            </div>
            <br>
            <div id="foto">
                <img id="imagem" src="" alt="Foto do dia">
            </div>
            <div>
                <p>
                    Ano de Nascimento:
                    <input type="number" name="txtano" id="txtano" min="0">
                </p>
                <p>
                    Sexo:
                    <input type="radio" name="radsex" id="masc" checked> 
                    <!-- input masculino e feminino tem o mesmo name para distinção do campo, para a
                     marcação de sexo para um ou para outro  -->
                    <label for="mas">Masculino</label>
                    <input type="radio" name="radsex" id="fem">
                    <label for="fem">Feminino</label>
                </p>
                <p>
                    <input type="button" value="Verificar" onclick="verificar()">
                </p>
            </div>
            <div id="res">
                Preencha os dados acima para ver o resultado!
            </div>
        </section>       
    </body>
    <footer>
        <p>&copy; Cauê Mendonça. Todos os direitos reservados 2022. </p>
    </footer>
    <script src="script.js"></script>
</html>