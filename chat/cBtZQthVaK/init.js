if (typeof firebase === 'undefined') throw new Error('hosting/init-error: Firebase SDK not detected. You must include it before /__/firebase/init.js');
firebase.initializeApp({
    apiKey: "AIzaSyAflpjFYcoj37vlriw2uhEbxVG86PM2BDM",
    authDomain: "sasowi-chat.firebaseapp.com",
    databaseURL: "https://sasowi-chat.firebaseio.com",
    projectId: "sasowi-chat",
    storageBucket: "sasowi-chat.appspot.com",
    messagingSenderId: "102984721799",
    appId: "1:102984721799:web:7d9684815ab2f49d905f22",
    measurementId: "G-TG1QKJP8Y9"
});