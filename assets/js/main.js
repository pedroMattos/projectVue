//     // Your web app's Firebase configuration
//     var firebaseConfig = {
//         apiKey: "AIzaSyBpN27qSNliXGxH5BVh9YoqvzbWmLtz6Is",
//         authDomain: "ccm-mobile-c3339.firebaseapp.com",
//         databaseURL: "https://ccm-mobile-c3339.firebaseio.com",
//         projectId: "ccm-mobile-c3339",
//         storageBucket: "ccm-mobile-c3339.appspot.com",
//         messagingSenderId: "601825304256",
//         appId: "1:601825304256:web:8604b84c961e2865b39725",
//         measurementId: "G-M7P4TVZ3R3"
//     };
//     // Initialize Firebase
//     firebase.initializeApp(firebaseConfig);
//     firebase.analytics();
//     var banco = firebase.database();
//     var teste = banco.ref('Users/')
//     teste.once("value").then(function(snapshot) {
//         var key = snapshot.key; // null
//         var childKey = snapshot.val(); // imprime o valor
//     });
// for(var i in app.lang) {
//     console.log(app.lang[i].nome)
// }

window.onload = function() {

    const doc = document;

    function submenu() {
        var sub = document.getElementById('submenu')
        var trigger = document.getElementById('menu')
        var i = 0;
        trigger.onclick = function() {
            sub.setAttribute('style', 'height:100%;border: 1px solid grey')
            i++;
            if(i >= 2) {
                sub.removeAttribute('style')
                i = 0;
            }
        }
    }


    submenu()

}