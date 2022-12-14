<?php
session_start();
require "../../../conexao.php";

if($_SESSION["cargo"] == "funcionario"){
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Produto</title>
        <link rel="stylesheet" href="../../../public/css/forms.css">
    </head>
    <body>
        <section>
            <div class="cadastro">
                <h1>Novo Produto</h1>
                <form action="insertProduto.php" method="POST" enctype="multipart/form-data">
                    <input type="text"  name="nome" placeholder="Nome do Produto">
                    <select name="cor" id="">
                        <option value="" selected disabled>Selecionar a Cor</option>
                        <option value="azul">Azul</option>
                        <option value="verde">Verde</option>
                        <option value="vermelho">Vermelho</option>
                        <option value="preto">Preto</option>
                        <option value="Branco">Branco</option>
                        <option value="Amarelo">Amarelo</option>
                    </select>
                    <select name="categoria" id="">
                        <option value="" selected disabled>Selecionar Categoria</option>
                        <?php
                            $select = "SELECT * FROM categoria";
                            $query = mysqli_query(conexao(), $select);

                            while($linha = mysqli_fetch_assoc($query)){
                                ?>
                                    <option value="<?=$linha["nomeCategoria"]?>"><?=$linha["nomeCategoria"]?></option>
                                <?php
                            }
                        ?>
                    </select>
                    <select name="tamanho" id="">
                        <option value="" selected disabled>Selecione o Tamanho</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                    </select>
                    <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descri????o do Produto"></textarea>
                    <input type="number" name="estoque" placeholder="Quantidade no Estoque">
                    <input type="text" name="preco" placeholder="Pre??o do Produto">
                    <div class="upload">
                        <img src="../../../public/imagens/upload-na-nuvem.png" alt="">
                        <br>
                        <label for="principal">Insira a imagem principal</label>
                        <input type="file" name="principal" id="principal">
                    </div>
                    <div class="upload">
                        <img src="../../../public/imagens/upload-na-nuvem.png" alt="">
                        <br>
                        <label for="imagem">Insira as imagens secund??rias</label>
                        <input type="file" name="imagem[]" multiple="multiple" id="imagem">
                    </div>
                    <button class="botao">Cadastrar Produto</button>
                </form>
            </div>
        </section>
    </body>
    </html>
    <?php
} else {
    header("location: ../../");
}
?>