<?php include '../include/topo.php'; ?>
<?php include '../include/menu.php'; ?>

<div class="category-container">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1" checked>
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <a href="">
                    <img src="../img/sliders/SLI1.PNG" alt="Imagem 1">
                </a>
            </div>
            <div class="slide">
                <a href="">
                    <img src="../img/sliders/SLI2.PNG"" alt="Imagem 2">
                </a>
            </div>
            <div class="slide">
                <a href="">
                    <img src="../img/sliders/SLI3.PNG" alt="Imagem 3">
                </a>
            </div>
            <div class="slide">
                <a href="">
                    <img src="../img/sliders/SLI4.PNG" alt="Imagem 4">
                </a>
            </div>
        </div>

        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>

        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
    <div class="category">
        <h1 id="greeting">Boas vindas</h1>
        <h2 class="session">Navegar por todas as seções</h2>
    </div>


    <div class="offer__scroll-container">
        <div class="offer__list">
            <section class="offer__list-item">

                <a href="./telaOrigem.php" class="cards">
                    <div class="cards card1">
                        <img src="../img/banners/ORIGEM.png" alt="" />

                    </div>
                </a>

                <a href="./telaEvolucao.php" class="cards">
                    <div class="cards card2">
                        <img src="../img/banners/EVOLUÇÃO.png " alt="" />

                    </div>
                </a>

                <a href="./telaCampeonatos.php" class="cards">
                    <div class="cards card3">
                        <img src="../img/banners/CAMPEONATOS.png" alt="" />
                    </div>
                </a>

                <a href="" class="cards">
                    <div class="cards card4">
                        <img src="../img/banners/GRANDESATLETAS.png" alt="" />
                    </div>
                </a>

            </section>
        </div>
    </div>
</div>


</div>


</main>
<script src="../scripts/slider.js"></script>
</body>

</html>