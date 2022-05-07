<style>
    #principal {
        place-items: center;
        width: 300px;
        height: 50px;
        padding: 5px;
        border-radius: 5px
    }

    .container {
        width: 100vw;
        height: 90vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    #botao {
        border-radius: 5px;
        margin-top: 100px;
        margin-left: -200px;
    }
</style>


<div class="container">
    <input id="principal" type="number" max-length="4" placeholder="Insira o Ano"> </input>
    <button id="botao" onclick="SECULOANO()"> Descobrir o seculo</button>
</div>

<script>
    function SECULOANO() {
        var ano = document.getElementById("principal").value;
        var tamanho = ano.length;
        if (tamanho == 1 || tamanho == 2) {
            var seculo = 0
        }
        if (tamanho == 3) {
            if(ano.substr(-1) == 0 && ano.substr(-2) == 0){
                var seculo = ano.substr(0, 1)
            }
            else{
                var seculo = ano.substr(0, 1)
                seculo ++
            }
        }
        if (tamanho == 4) {
            if(ano.substr(-1) == 0 && ano.substr(-2) == 0 ){
                var seculo = ano.substr(0, 2)
            }
            else{
                var seculo = ano.substr(0, 2)
                seculo ++
            }
        }
        alert(seculo)
    }
</script>