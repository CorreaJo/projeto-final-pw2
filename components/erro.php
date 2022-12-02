<style>
    .erro {
        display: block;
        position: absolute;
        top: 20px;
        right: 30px;
        width: 300px;
        height: 130px;
        background-color: rgb(255, 52, 52);
        border-radius: 10px;
        text-align: center;
    }

    .erro h2 {
        color: black;
        text-decoration: underline;
        font-size: 1.4em;
    }

    .erro img {
        width: 50px;
    }
</style>

<div class="erro">
    <h2><?=$_SESSION["erro"]?></h2>
    <img src="../../../public/imagens/alerta.png" alt="">
</div>