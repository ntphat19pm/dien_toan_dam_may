<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

<!-- Firestore -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>

<!-- Auth -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-auth.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>

<script>
	// Your web app's Firebase configuration
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	var firebaseConfig = {
  apiKey: "AIzaSyByCngq78D9VmobO-GSZ8Jem1la9nZHtVs",
  authDomain: "hotel-firebase-279af.firebaseapp.com",
  projectId: "hotel-firebase-279af",
  storageBucket: "hotel-firebase-279af.appspot.com",
  messagingSenderId: "132003014337",
  appId: "1:132003014337:web:8e81c22edeb4ce73955640",
  measurementId: "G-4QMCH0RL4J"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	firebase.analytics();
	var db = firebase.firestore();
</script>