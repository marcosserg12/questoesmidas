<style>
    #inicial {
        width: 300px;
        height: 50px;
        padding: 10px;
        border-radius: 5px
    }

    #final {
        width: 300px;
        height: 50px;
        padding: 10px;
        border-radius: 5px
    }

    #botao {
        border-radius: 5px;
        margin-top: 100px;
        margin-left: -400px;
    }

    .container {
        width: 90vw;
        height: 90vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

</style>


<div class="container">
    <input required name="inicial" id="inicial" type="number"  placeholder="Insira o Numero Inicial"> </input>
    <input required name="final" id="final" type="number"  placeholder="Insira o Numero Final"> </input>
    <button id="botao" onclick="PRIMOS()"> Descobrir os Primos</button>
</div>

<script>
    function PRIMOS() {
        var inicial = document.getElementById("inicial").value;
        var final = document.getElementById("final").value;
        var resultado = []
        if (inicial > final) {
            alert("O número inicial está maior que o numero final");
        } else {
            for (i = inicial; i <= final; i++) {
                if (DESCOBRE_PRIMOS(i)) resultado.push(i)
            }
            alert(resultado)
        }
    }

    function DESCOBRE_PRIMOS(numero) {
        for (var divisor = 2; divisor < numero; divisor++) {
            if (numero % divisor == 0) {
                return false;
            }
        }
        return true;
    }
</script>