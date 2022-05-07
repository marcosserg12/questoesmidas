<style>
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
    <?php
    $numero = range(1, 10);
    echo '<pre>';
    printf('<br>  Números Aleatórios <br>');
    for ($i = 1; $i <= 20; $i++) {
        $numero_random[] = (array_rand($numero));
    }
    print_r($numero_random);
        $conta_numeros_array = array_count_values($numero_random);
        printf('<br> Contagem De Numeros <br>');
    foreach ($conta_numeros_array as $key => $value){
        printf("%s - Repete %s vezes  <br>", $key, $value);
        if($value == 1){
            $numero_nao_rep[] = $key;
        }
    }
    print_r('Os números que não se repetem são o <br>');
    print_r($numero_nao_rep);

    ?>
</div>