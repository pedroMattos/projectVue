// Firebase conn
// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyBpN27qSNliXGxH5BVh9YoqvzbWmLtz6Is",
    authDomain: "ccm-mobile-c3339.firebaseapp.com",
    databaseURL: "https://ccm-mobile-c3339.firebaseio.com",
    projectId: "ccm-mobile-c3339",
    storageBucket: "ccm-mobile-c3339.appspot.com",
    messagingSenderId: "601825304256",
    appId: "1:601825304256:web:8604b84c961e2865b39725",
    measurementId: "G-M7P4TVZ3R3"
};


// Vue templates
var navbar = Vue.component('nav-bar', {
    template: '#nav-bar',
    data() {
        return {
            pages: [
                {page: 'Filmes', slug: 'filmes'},
                {page: 'Jogos', slug: 'jogos'},
                {page: 'Contato', slug: 'contato'},
            ]
        }
    },
});
var banner = Vue.component('banner-home', {
    template: '#banner-home',
    props: { internalPage: Boolean },
    data() {
        return {
            title: 'See our Games',
            sub: '',
            ctaText: 'Go!',
            image: [
                {url: 'banner.jpg', alt: 'imagem banner'}
            ],
        }
    }
});
var bannerInternal = Vue.component('banner-internal', {
    template: '#banner-internal-page',
    data() {
        return {
            title: 'Our games is the best',
            image: [
                {url: 'banner-internal.jpg', alt: 'imagem banner'}
            ],
        }
    }
});
var jogosBody = Vue.component('jogos-page-body', {
    template: '#jogos-body',
    data() {
        return {
            title: 'Jogos',
        }
    },
});
var cards = Vue.component('card', {
    template: '#cards',
    mounted() {
        var context = this;
        // firebase.initializeApp(firebaseConfig);
        // firebase.analytics();
        // var bd = firebase.database();
        // var cards = bd.ref('Cards/');
        // cards.once("value").then(function(snapshot) {
        //     snapshot.forEach(function(childSnapshot) {
        //         var nome = childSnapshot.child('Nome').val()
        //         var dt_lanc = childSnapshot.child('Dt_lanc').val()
        //         var desc = childSnapshot.child('Desc').val()
        //         var imagem = childSnapshot.child('Imagem').val()
        //         context.content = desc
        //         context.image.url = imagem
        //     });
            
        // });
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        var bd = firebase.firestore();
        // var cards = bd.ref('Cards/');
        var docRef = bd.collection("Cards");
        docRef.get().then(function(doc) {
            doc.forEach(doc => {
                console.log(doc.data())
                const data = {
                    'id': doc.id,
                    'title': doc.data().Nome,
                    'desc': doc.data().Desc,
                    'url_img': doc.data().ImgUrl,
                }
                context.card.push(data)
            })
        })
        
    },
    data() {
        return {
            card: [],
        }
    },
})


// Routes
var router = new VueRouter({
    routes: [
        {path: '/', name: 'home', component: banner,
        props: { internalPage: false }},
        {path: '/jogos', name: 'jogos', component: jogosBody},
    ]
});