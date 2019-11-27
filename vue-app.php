<script>
    var app = new Vue({
        el: "#app",
        data: {
            titulos_prod: "Nossos produtos",
            imagem_home: "assets/img/images.jpg",
            alt: "imagem home",
            produtos_home: [
                {img: "assets/img/images1.jpg", 
                    desc: "Aqui está a descrição 1",
                    titles: "Titulo 1"},
                {img: "assets/img/images2.jpg", 
                    desc: "Aqui está a descrição 2", 
                    titles: "Titulo 2"},
                {img: "assets/img/images3.jpg", 
                    desc: "Aqui está a descrição 3", 
                    titles: "Titulo 3"},
            ],
        }
    });
</script>