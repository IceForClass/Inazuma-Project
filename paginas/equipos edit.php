<?php include("../include/index.inc.php") ?>

<?php headHTML(); ?>

<style>
    body {
    background-color: #8c52ff;
    height: 600px;
    margin: 0;
    display: grid;
    grid-template-rows: 500px 100px;
    grid-template-columns: 1fr 30px 30px 30px 30px 30px 1fr;
    align-items: center;
    justify-items: center;
    font-family: 'Poppins', sans-serif;
}

.item img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-top: 15px;
}

.name {
    margin-bottom: 2px;
    color: #8c52ff;
}

.occupation {
    font-style: italic;
    margin-top: 2px;
}

main#carousel {
    grid-row: 1 / 2;
    grid-column: 1 / 8;
    width: 100vw;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transform-style: preserve-3d;
    perspective: 600px;
    --items: 5;
    --middle: 3;
    --position: 1;
    pointer-events: none;
}

div.item {
    text-align: center;
    padding: 20px;
    border: 3px solid black;
    border-radius: 20px;
    background-color: #fff;
    position: absolute;
    width: 300px;
    height: 250px;
    background-color: white;
    --r: calc(var(--position) - var(--offset));
    --abs: max(calc(var(--r) * -1), var(--r));
    transition: all 0.25s linear;
    transform: rotateY(calc(-10deg * var(--r)))
    translateX(calc(-300px * var(--r)));
    z-index: calc((var(--position) - var(--abs)));
}

div.item:nth-of-type(1) {
    --offset: 1;
}
div.item:nth-of-type(2) {
    --offset: 2;
}
div.item:nth-of-type(3) {
    --offset: 3;
}
div.item:nth-of-type(4) {
    --offset: 4;
}
div.item:nth-of-type(5) {
    --offset: 5;
}

input:nth-of-type(1) {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
}

input:nth-of-type(1):checked ~ main#carousel {
    --position: 1;
}

input:nth-of-type(2) {
    grid-column: 3 / 4;
    grid-row: 2 / 3;
}
input:nth-of-type(2):checked ~ main#carousel {
    --position: 2;
}

input:nth-of-type(3) {
    grid-column: 4 /5;
    grid-row: 2 / 3;
}
input:nth-of-type(3):checked ~ main#carousel {
    --position: 3;
}

input:nth-of-type(4) {
    grid-column: 5 / 6;
    grid-row: 2 / 3;
}
input:nth-of-type(4):checked ~ main#carousel {
    --position: 4;
}

input:nth-of-type(5) {
    grid-column: 6 / 7;
    grid-row: 2 / 3;
}
input:nth-of-type(5):checked ~ main#carousel {
    --position: 5;
}
</style>


<body class="bg-dark">

    <?php headerHTML(); ?>

    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" checked />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <main id="carousel">
        <div class="item">
            <img src="../Imagenes/Alius/Clear.png">
            <h3 class="name">Sally Sharpe</h3>
            <p class="occupation">Marketing Admin</p>
            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, suscipit?</p>
        </div>
        <div class="item">
        <img src="../Imagenes/Alius/Clear.png">
            <h3 class="name">Michael John</h3>
            <p class="occupation">Cybersecurity Engineer</p>
            <p class="testimonial">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, dolore.</p>
        </div>
        <div class="item">
        <img src="../Imagenes/Alius/Clear.png">
            <h3 class="name">Mikayla Eddie</h3>
            <p class="occupation">Software Engineer</p>
            <p class="testimonial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, temporibus?</p>
        </div>
        <div class="item">
        <img src="../Imagenes/Alius/Clear.png">
            <h3 class="name">Eve Smith</h3>
            <p class="occupation">UI/UX Designer</p>
            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, beatae?</p>
        </div>
        <div class="item">
        <img src="../Imagenes/Alius/Clear.png">
            <h3 class="name">Luke Maxwell</h3>
            <p class="occupation">System Architect</p>
            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, tempore.</p>
        </div>
    </main>

    <?php footerHTML(); ?>

</body>

</html>