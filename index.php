<!DOCTYPE html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>Teste Vue</title>
    </head>
    <body>
    <div id="app">
        <ul>
            <li v-for="i in lang">{{ i.nome }}</li>
        </ul>
    </div>
    <script src="https://unpkg.com/vue"></script>
    <script src="assets/js/main.js"></script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>

    <script>
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
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    var banco = firebase.database();
    var teste = banco.ref()
    teste.once("value").then(function(snapshot) {
        var key = snapshot.key; // null
        var childKey = snapshot.child('oi/oioi').val(); // imprime o valor
        console.log(childKey)
    });
    </script>
    </body>
</html>