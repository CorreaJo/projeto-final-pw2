<?php
session_start();

if($_SESSION["cargo"] == "funcionario"){

    require "../../../conexao.php";
    require "../../../models/produto.php";

    $idProduto = $_GET["idProduto"];

    $con = conexao();
    $select = ListarProduto($idProduto);

    $resul = mysqli_query($con, $select);
    $linha = mysqli_fetch_assoc($resul);
    ?>


    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar Produto</title>
        <link rel="stylesheet" href="../../../public/css/forms.css">
    </head>
    <body>
        <section>
            <div class="cadastro">
                <h1>Atualizar Produto</h1>
                <form action="atualizarProduto.php" method="POST" enctype="multipart/form-data">
                    <input type="text"  name="nome" placeholder="Nome do Produto" value="<?=$linha["nome"]?>">
                    <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição do Produto"><?=$linha["descricao"]?></textarea>
                    <select name="cor" id="">
                        <option value="" selected disabled>Selecionar a Cor</option>
                        <?php
                            if($linha["cor"] == "azul"){
                                ?>
                                    <option selected value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                    <option value="vermelho">Vermelho</option>
                                    <option value="preto">Preto</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Amarelo">Amarelo</option>
                                <?php
                            } else if($linha["cor"] == "vermelho"){
                                ?>
                                    <option value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                    <option selected value="vermelho">Vermelho</option>
                                    <option value="preto">Preto</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Amarelo">Amarelo</option>
                                <?php
                            } else if($linha["cor"] == "preto"){
                                ?>
                                    <option value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                    <option value="vermelho">Vermelho</option>
                                    <option selected value="preto">Preto</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Amarelo">Amarelo</option>
                                <?php
                            } else if($linha["cor"] == "branco"){
                                ?>
                                    <option value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                    <option value="vermelho">Vermelho</option>
                                    <option value="preto">Preto</option>
                                    <option selected value="Branco">Branco</option>
                                    <option value="Amarelo">Amarelo</option>
                                <?php
                            } else if($linha["cor"] == "amarelo"){
                                ?>
                                    <option value="azul">Azul</option>
                                    <option value="verde">Verde</option>
                                    <option value="vermelho">Vermelho</option>
                                    <option value="preto">Preto</option>
                                    <option value="Branco">Branco</option>
                                    <option selected value="Amarelo">Amarelo</option>
                                <?php
                            }
                        ?>
                    </select>
                    <select name="tamanho" id="">
                        <option value="" disabled>Selecione o Tamanho</option>
                        <?php
                            for($i=36; $i <= 42; $i++){
                                if($linha["tamanho"] == $i){
                                    ?>
                                    <option selected value="<?=$linha["tamanho"]?>"><?=$linha["tamanho"]?></option>
                                    <?php
                                } else {
                                    ?>
                                        <option selected value="<?=$i?>"><?=$i?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                    <select name="categoria" id="">
                        <option value="" selected disabled>Selecionar Categoria</option>
                        <?php
                            $select = "SELECT nomeCategoria FROM produto inner join categoria on produto.categoria = categoria.nomeCategoria";
                            $query = mysqli_query(conexao(), $select);

                            while($categoria = mysqli_fetch_assoc($query)){
                                if($linha["categoria"] == $categoria["nomeCategoria"]){
                                    ?>
                                        <option value="<?=$categoria["nomeCategoria"]?>" selected><?=$categoria["nomeCategoria"]?></option>
                                    <?php
                                } else {
                                    ?>
                                        <option value="<?=$categoria["nomeCategoria"]?>"><?=$categoria["nomeCategoria"]?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                    <input type="text" name="preco" placeholder="Preço do Produto" value="<?=$linha["preco"]?>">
                    <input type="number" name="estoque" placeholder="Quantidade no Estoque" value="<?=$linha["estoque"]?>">
                    <div class="upload">
                        <img src="../../../public/imagens/upload-na-nuvem.png" alt="">
                        <br>
                        <label for="principal">Insira a imagem principal</label>
                        <input type="file" name="principal" id="principal">
                    </div>
                    <div class="upload">
                        <img src="../../../public/imagens/upload-na-nuvem.png" alt="">
                        <br>
                        <label for="imagem">Insira as imagens secundárias</label>
                        <input type="file" name="imagem[]" multiple="multiple" id="imagem">
                    </div>
                    <input type="hidden" name="idProduto" value="<?= $linha["idProduto"]?>">
                    <h3>IMPORTANTE: coloque as imagens do produto antes de atualizar!</h3>
                    <button>Enviar</button>
                </form>
            </div>
        </section>
    </body>
    </html>
    <?php
} else {
    header("location: ../../");
}