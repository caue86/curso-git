<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Jquery</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script> 
    $(function(){
        var posx = null;
        $("button#dir").click(function(){
            $("div#center").animate({left:"+=10%"}, 300);
            posx = $("div#center").position().left;
            $("#info").html(posx);
            if ($("button#esq").attr("disabled")) 
                $("button#esq").removeAttr("disabled");
                
            if(posx > 505){
                $(this).attr("disabled", 'disabled');
            }
        });
        $("button#esq").attr("disabled", 'disabled');
    //Função realize ação apos clicar no button, a div sera movita para direita a cada click.
        $("button#esq").click(function(){
            $("div#center").animate({left:"+=-10%"}, 300);
            posx = $("div#center").position().left;
            $("#info").html(posx);
            if ($("button#dir").attr("disabled")) 
                $("button#dir").removeAttr("disabled");
            if(posx < 12){
                $(this).attr("disabled", 'disabled');
            }
        });
    });
    //Função realize ação apos clicar no button, a div sera movita para esquerda a cada click.  
    
    // select.onchange = function() {
    // var choice = select.value;
    // $("button#dir") = 'visible';
    // $("button#esq") = 'visible';
    // if(choice("div#center" >= 'left:40%')){
    //     $("button#dir") = 'height:togle';
    // }else if (choice("div#center" >= 'left:-40%')){
    //     $("button#esq") = 'height:togle';
    // }};
    

</script>
<style>
    body{
        padding: 0;
        margin: 0;
    }
    div.box{
        margin: -2% 19%;
        border: gray 3px solid;
        border-radius: 5px;
        display: block;
    }
    #center{
        height: 200px;
        width: 200px;
        background: green;
        margin: 20% 40%;
        position: relative;
    }
    #dir{
        float: right;
        font-size: 20px;
    }
    #esq{
        position: absolute;
        float: left;
        font-size: 20px;
    }
    .ori{
        position: absolute;
        font-size: 20px;
        margin-left: 30%;
        
    }
</style>
</head>
<body>
    <div class="box">
        <div id="center"></div>
        <button id="esq" class="w3-btn w3-blue"><---Mover para esquerda</button>
        <button id="dir" class="w3-btn w3-blue">Mover para direita---></button>
        <a href="http://localhost/exercicio/" class="ori" class="w3-btn w3-blue">Iniciar</a>
    </div>   
    <br>
    <div id="info"></div>
    
    
</body>
</html>