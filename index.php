<?php
// Configuração do cardápio de lanches (Array Associativo)
$lanches = [
    [
        "nome" => "X-Salada",
        "imagem" => "images/xsalada.jpg",
        "preco" => "8,00"
    ],
    [
        "nome" => "Cheddar",
        "imagem" => "images/cheddar.jpg",
        "preco" => "17,00"
    ],
    [
        "nome" => "Bata Frita", // Mantido o termo original do HTML
        "imagem" => "images/batata.jpg",
        "preco" => "7,00"
    ],
    [
        "nome" => "X-Burguer",
        "imagem" => "images/cheese.jpg",
        "preco" => "1,50"
    ],
    [
        "nome" => "Big Tower",
        "imagem" => "images/bigtower.jpg",
        "preco" => "20,50"
    ],
    [
        "nome" => "X-Frango",
        "imagem" => "images/fragonrequeijao.jpg",
        "preco" => "12,90"
    ],
    [
        "nome" => "Nuggets (c/ 8)",
        "imagem" => "images/nuggets.jpg",
        "preco" => "6,50"
    ],
    [
        "nome" => "Refri (Lata)",
        "imagem" => "images/refri.jpg",
        "preco" => "4,50"
    ],
    [
        "nome" => "Sucos (Vários Sabores)",
        "imagem" => "images/sucos.jpg",
        "preco" => "8,50"
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">    
    <title>André Lanches</title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <div id="logo">
            <img id="logoImg" src="images/logo.png" alt="Logo André Lanches">
            <h1 id="tituloLogo">André Lanches</h1>
        </div>
        <div id="menu">
            <ul class="listaMenu">
                <li><a href="sobre.html">Sobre Nós</a></li>
                <li><a id="menuAtual" href="index.php">Lanches</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </div>
    </div>
    
    <div id="content">
        <div id="promotionBanner">
            <h1 id="promocaoH1">Promoção!</h1>
            <h2 id="promocaoValor">X-Salada + Batata = 9,90</h2>
        </div>
        <div id="maisVendidos">
            <h1 id="tituloConteudo">Nossos Lanches</h1>
            <div id="areaProdutos">
                <table>
                    <tr>
                        <?php 
                        $contador = 0;
                        foreach ($lanches as $lanche): 
                            // Quebra a linha da tabela (tr) a cada 3 produtos
                            if ($contador > 0 && $contador % 3 == 0) {
                                echo "</tr><tr>";
                            }
                        ?>
                            <td>
                                <p class="tituloProduto"><?php echo $lanche['nome']; ?></p>
                                <img src="<?php echo $lanche['imagem']; ?>" alt="<?php echo $lanche['nome']; ?>">                                
                                <p class="precoProduto">R$: <?php echo $lanche['preco']; ?></p>
                            </td>
                        <?php 
                            $contador++;
                        endforeach; 
                        ?>
                    </tr>                  
                </table>
            </div>
        </div>        
    </div>

    <div id="entrega">
        <div id="tel">
            <a href="tel:1111111111"><h4>(11) 1111-1111</h4></a>
            <h5>Entregamos na sua casa!</h5>
        </div>
        <img src="images/telefone.png" alt="Ícone Telefone"> 
    </div>

</body>
</html>
