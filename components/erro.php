<style>
    .erro {
    display: block;
    position: absolute;
    top: 20px;
    right: 30px;
    width: 300px;
    height: 100px;
    background-color: rgb(255, 52, 52);
    border-radius: 10px;
    border: 5px solid red;
    text-align: center;
    transition: 0.5s;
}

.erro h2 {
    color: black;
    text-decoration: underline;
    font-size: 1.4em;
}
</style>

<div class="erro">
    <h2><?=$_SESSION["erro"]?></h2>
</div>