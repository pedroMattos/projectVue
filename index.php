<?php
include 'header.php';
?>
    <div id="app">
        <div id="header-img">
            <img v-bind:src="imagem_home" v-bind:alt="img">
        </div>


        <section>
            <h2 class="center">{{ titulos_prod }}</h2>
            <div class="row">
                <div v-for="produto in produtos_home" class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img v-bind:src="produto.img">
                    <span class="card-title">{{ produto.titles }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{ produto.desc }}</p>
                    </div>
                    <div class="card-action">
                    <a href="#">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>

<?php
include 'footer.php';
