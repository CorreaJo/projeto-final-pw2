<style>
    .certo {
        display: block;
        position: absolute;
        padding: 10px;
        top: 20px;
        right: 30px;
        height: 130px;
        background-color: #008000;
        border-radius: 10px;
        text-align: center;
        width: 350px;
    }

    .certo h2 {
        color: black;
        text-decoration: underline;
        font-size: 1.4em;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .certo img {
        width: 50px;
    }
</style>

<div class="certo">
    <h2><?=$_SESSION["certo"]?></h2>
    <img src="../../../public/imagens/trabalho-feito.png" alt="">
</div>