var app = new Vue({
    el: "#app",
    data: {
        titulo: "Titulo de teste",
        lang: [
            {nome: "pedro"},
            {nome: "teste"},
            {nome: "teste2"},
        ]
    }
});
for(var i in app.lang) {
    console.log(app.lang[i].nome)
}