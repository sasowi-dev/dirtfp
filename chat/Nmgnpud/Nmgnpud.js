/**
 * Copyright 2015 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
'use strict';
function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user=getCookie("newdevice");
  if (user === "verified") {
  	var provider = new firebase.auth.GoogleAuthProvider();
firebase.auth().signInWithPopup(provider);
  	   // Sign in Firebase using popup auth and Google as the identity provider.
  } else {
     if (user === "" || user === null) {
     	pwveriFunction();
     }
  }
}
// Signs-in Friendly Chat.
function signIn() {
	checkCookie();
}

// Signs-out of Friendly Chat.
function signOut() {
  // Sign out of Firebase.
  firebase.auth().signOut();
}

// Initiate firebase auth.
function initFirebaseAuth() {
  // Listen to auth state changes.
  firebase.auth().onAuthStateChanged(authStateObserver);
}

// Returns the signed-in user's profile Pic URL.
function getProfilePicUrl() {
  return firebase.auth().currentUser.photoURL || '/images/profile_placeholder.png';
}

// Returns the signed-in user's display name.
function getUserName() {


  return firebase.auth().currentUser.displayName;
}

//이용자 보호조치 관련 코드
function userprotectionend(){
		document.removeEventListener('contextmenu', event);
//	 document.getElementById("messages-card-container").classList.remove("blur");
	// 	 document.getElementById("messages-card-container").classList.remove("blur");
	 //	 	 	 document.getElementById("moim-notice-viewer").classList.remove("blur");
	 	 	 	  	 //	 document.getElementById("moim-notice-viewer").removeAttribute("hidden");
	 	 	 	  	 	  document.getElementById("message-form").removeAttribute("hidden");
}
function userprotectionstart(){
	document.addEventListener('contextmenu', event => event.preventDefault());
	// document.getElementById("messages-card-container").classList.add("blur");
	 //	 document.getElementById("moim-notice-viewer").classList.add("blur");
	 	 	 	// document.getElementById("moim-notice-viewer").setAttribute("hidden", "true");
	 	 	 	  	 	 	 document.getElementById("message-form").setAttribute("hidden", "true");
}
		// Wait for window load
		$(window).load(function() {
      	setTimeout(function(){  document.getElementById("loader").setAttribute("hidden", "true");}, 1500);
		});
		
//사용자 사소위 인증
//사용자 사소위 인증
function pwveriFunction() {
  var pw = prompt("새로운 기기에서 로그인 시도 중입니다.\n비밀번호는 bypass입니다.\n비밀번호를 입력하세요.", "입력하세요...");
  if (pw == null || pw == "") {
    alert('비밀번호를 틀리셨습니다.');
    userprotectionstart();
        pwveriFunction();
  } else if (pw === "0000"||pw ==="bypass"){
  	   // Sign in Firebase using popup auth and Google as the identity provider.
  var provider = new firebase.auth.GoogleAuthProvider();
firebase.auth().signInWithPopup(provider);

       setCookie("newdevice", "verified", 30);
  }
  else{
  	    alert('비밀번호를 틀리셨습니다.');
    userprotectionstart();
    pwveriFunction();
  }
}
// Returns true if a user is signed-in.
function isUserSignedIn() {

  return !!firebase.auth().currentUser;
}
// Saves a new message on the Cloud Firestore.
function saveMessage(messageText) {
  // Add a new message entry to the Firebase database.
  return firebase.firestore().collection('messages').add({
    name: getUserName(),
    text: messageText,
    profilePicUrl: getProfilePicUrl(),
    sendchannel: "Nmgnpud",
    timestamp: firebase.firestore.FieldValue.serverTimestamp()
  }).catch(function(error) {
alert('알 수 없는 오류가 발생했습니다.\n확인을 클릭하면 언링크팀에 이 오류가 전송됩니다.');

  });
}

// Loads chat messages history and listens for upcoming ones.
function loadMessages() {
  // Create the query to load the last 12 messages and listen for new ones.
  var query = firebase.firestore().collection('messages').orderBy('timestamp', 'desc').limit(100);
  
  // Start listening to the query.
  query.onSnapshot(function(snapshot) {
    snapshot.docChanges().forEach(function(change) {
		
      if (change.type === 'removed') {
        deleteMessage(change.doc.id);
      } else {
		  
        var message = change.doc.data();
		

        displayMessage(change.doc.id, message.timestamp, message.sendchannel, message.name,
                      message.text, message.profilePicUrl, message.imageUrl);
                      
  	  var audio = new Audio('noti.mp3');
  	  audio.play();
      }
    });
  });
if(!!firebase.auth().currentUser === false){
userprotectionstart();
}
}

// Saves a new message containing an image in Firebase.
// This first saves the image in Firebase storage.
function saveImageMessage(file) {
  // 1 - We add a message with a loading icon that will get updated with the shared image.
  firebase.firestore().collection('messages').add({
    name: getUserName(),
    imageUrl: LOADING_IMAGE_URL,
	  sendchannel: "Nmgnpud",
    profilePicUrl: getProfilePicUrl(),
    timestamp: firebase.firestore.FieldValue.serverTimestamp()
  }).then(function(messageRef) {
    // 2 - Upload the image to Cloud Storage.
    var filePath = firebase.auth().currentUser.uid + '/' + messageRef.id + '/' + file.name;
    return firebase.storage().ref(filePath).put(file).then(function(fileSnapshot) {
      // 3 - Generate a public URL for the file.
      return fileSnapshot.ref.getDownloadURL().then((url) => {
        // 4 - Update the chat message placeholder with the images URL.
        return messageRef.update({
          imageUrl: url,
          storageUri: fileSnapshot.metadata.fullPath
        });
      });
    });
  }).catch(function(error) {
    console.error('There was an error uploading a file to Cloud Storage:', error);
  });
}


// Saves the messaging device token to the datastore.
function saveMessagingDeviceToken() {
  firebase.messaging().getToken().then(function(currentToken) {
    if (currentToken) {
      console.log('Got FCM device token:', currentToken);
      // Saving the Device Token to the datastore.
      firebase.firestore().collection('fcmTokens').doc(currentToken)
          .set({uid: firebase.auth().currentUser.uid});
    } else {
      // Need to request permissions to show notifications.
      requestNotificationsPermissions();
    }
  }).catch(function(error){
    console.error('Unable to get messaging token.', error);
  });
}

// Requests permissions to show notifications.
function requestNotificationsPermissions() {
  console.log('Requesting notifications permission...');
  firebase.messaging().requestPermission().then(function() {
    // Notification permission granted.
    saveMessagingDeviceToken();
  }).catch(function(error) {
    console.error('Unable to get permission to notify.', error);
  });
}

// Triggered when a file is selected via the media picker.
function onMediaFileSelected(event) {
  event.preventDefault();
  var file = event.target.files[0];

  // Clear the selection in the file picker input.
  imageFormElement.reset();

  // Check if the file is an image.
  if (!file.type.match('image.*')) {
    var data = {
      message: '사진을 선택해 주세요!',
      timeout: 2000
    };
    signInSnackbarElement.MaterialSnackbar.showSnackbar(data);
    return;
  }
  // Check if the user is signed-in
  if (checkSignedInWithMessage()) {
    saveImageMessage(file);
  }
}

// Triggered when the send new message form is submitted.
function onMessageFormSubmit(e) {
  e.preventDefault();
 
  // Check that the user entered a message and is signed in.
  if (messageInputElement.value && checkSignedInWithMessage()) {
    saveMessage("Nmgnpud:"+messageInputElement.value).then(function() {
      // Clear message text field and re-enable the SEND button.
      resetMaterialTextfield(messageInputElement);
      toggleButton();
    });
  }
}

// Triggers when the auth state change for instance when the user signs-in or signs-out.
function authStateObserver(user) {
  if (user) { // User is signed in!
    // Get the signed-in user's profile pic and name.
    var profilePicUrl = getProfilePicUrl();
    var userName = getUserName();
    		if(!!firebase.auth().currentUser === true){
		userprotectionend();
}
	if (firebase.auth().currentUser.email === "gyubini38@gmail.com"){
		var ibo=1;
	alert('서비스 운영정책 위반으로 모임챗 이용이 임시 제한되었습니다.\n임시제한 기간 동안 다른 언링크 서비스는 이용 가능하나 모임챗 이용 재개는 불가하며, 모임챗 가입/인증 및 탈퇴에 제한이 있습니다.\n임시제한에 관한 안내는 redev@redevs.ga에서 문의 가능합니다.');
	userprotectionstart();

	}
    // Set the user's profile pic and name.
    userPicElement.style.backgroundImage = 'url(' + addSizeToGoogleProfilePic(profilePicUrl) + ')';
    userNameElement.textContent = userName;

    // Show user's profile and sign-out button.
    userNameElement.removeAttribute('hidden');
    userPicElement.removeAttribute('hidden');
    signOutButtonElement.removeAttribute('hidden');

    // Hide sign-in button.
    signInButtonElement.setAttribute('hidden', 'true');

    // We save the Firebase Messaging Device token and enable notifications.
    saveMessagingDeviceToken();

  } else { // User is signed out!
    // Hide user's profile and sign-out button.
    	userprotectionstart();
    userNameElement.setAttribute('hidden', 'true');
    userPicElement.setAttribute('hidden', 'true');
    signOutButtonElement.setAttribute('hidden', 'true');

    // Show sign-in button.
    signInButtonElement.removeAttribute('hidden');
  }
}

// Returns true if user is signed-in. Otherwise false and displays a message.
function checkSignedInWithMessage() {
  // Return true if the user is signed in Firebase
  if (isUserSignedIn()) {
    return true;
  }

  // Display a message to the user using a Toast.
  var data = {
    message: '메시지 전송은 로그아웃 상태에서 지원하지 않습니다. 로그인 해주세요!',
    timeout: 2000
  };
  signInSnackbarElement.MaterialSnackbar.showSnackbar(data);
  return false;
}

// Resets the given MaterialTextField.
function resetMaterialTextfield(element) {
  element.value = '';
  element.parentNode.MaterialTextfield.boundUpdateClassesHandler();
}

// Template for messages.
var MESSAGE_TEMPLATE =
    '<div class="message-container">' +
      '<div class="spacing"><div class="pic"></div></div>' +
            
      '<div class="message"></div>' +
'<div class="name"></div>' +
    '</div>';

// Adds a size to Google Profile pics URLs.
function addSizeToGoogleProfilePic(url) {
  if (url.indexOf('googleusercontent.com') !== -1 && url.indexOf('?') === -1) {
    return url + '?sz=150';
  }
  return url;
}

// A loading image URL.
var LOADING_IMAGE_URL = 'https://www.google.com/images/spin-32.gif?a';

// Delete a Message from the UI.
function deleteMessage(id) {
  var div = document.getElementById(id);
  // If an element for that message exists we delete it.
  if (div) {
    div.parentNode.removeChild(div);
  }
}
function createAndInsertMessage(id, timestamp) {
  const container = document.createElement('div');
  container.innerHTML = MESSAGE_TEMPLATE;
  const div = container.firstChild;
  div.setAttribute('id', id);

  // If timestamp is null, assume we've gotten a brand new message.
  // https://stackoverflow.com/a/47781432/4816918
  timestamp = timestamp ? timestamp.toMillis() : Date.now();
  div.setAttribute('timestamp', timestamp);


  // figure out where to insert new message
  const existingMessages = messageListElement.children;
  if (existingMessages.length === 0) {
    messageListElement.appendChild(div);
  } else {
    let messageListNode = existingMessages[0];

    while (messageListNode) {
      const messageListNodeTime = messageListNode.getAttribute('timestamp');

      if (!messageListNodeTime) {
        throw new Error(
          `Child ${messageListNode.id} has no 'timestamp' attribute`
        );
      }

      if (messageListNodeTime > timestamp) {
        break;
      }

      messageListNode = messageListNode.nextSibling;
    }

    messageListElement.insertBefore(div, messageListNode);
  }

  return div;
}

// Displays a Message in the UI.
function displayMessage(id, timestamp, sendchannel, name, text, picUrl, imageUrl) {
	if (sendchannel === "Nmgnpud"){
	  var div = document.getElementById(id) || createAndInsertMessage(id, timestamp);

  // profile picture
  if (picUrl) {
    div.querySelector('.pic').style.backgroundImage = 'url(' + addSizeToGoogleProfilePic(picUrl) + ')';
  }
//어드민
	if (name==="딧센"||name==="Unlink"||name==="사소위 공식 유튜브"||name==="공식채널사소위"||name==="zzic smile"){
		if (picUrl==="https://lh3.googleusercontent.com/a-/AOh14GiOxlDJpLFN9NDvF1LXVP7iUORnfoFVN2v3WrQawA=s96-c"||picUrl==="https://lh3.googleusercontent.com/a-/AOh14Gi_dk5lDdgEd1OEyiAkh3rAAApoDrDf0vWFrIoIwQ=s96-c"||picUrl==="https://lh3.googleusercontent.com/-BP8f00rSbNA/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucn6h_GjWbhZeLCXEtf_cYa0tVvkvQ/s96-c/photo.jpg"||picUrl==="https://lh3.googleusercontent.com/a-/AOh14GhjENBoPx-ze7P3h_AZH9Nv4-aPDPbeT1TZrMJo=s96-c"||picUrl==="https://lh6.googleusercontent.com/-melB4XivmU0/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnClE5-UW7UAtumCj5YQBSWDMRUSA/s96-c/photo.jpg"){

  div.querySelector('.name').textContent = name;
  div.querySelector('.pic').classList.add("mdl-badge");
    div.querySelector('.pic').classList.add("verifiedbadge");
    div.querySelector('.pic').classList.add("mdl-badge--overlap");
  div.querySelector('.pic').setAttribute('data-badge', 'done');
		}
			else{
				div.querySelector('.name').textContent = name;
			}
}
	else{
		
  div.querySelector('.name').textContent = name;

}
  var messageElement = div.querySelector('.message');
  
  if (text) { // If the message is text.
    messageElement.textContent = text.replace('Nmgnpud:', '');
    // Replace all line breaks by <br>.
    messageElement.innerHTML = messageElement.innerHTML.replace(/\n/g, '<br>');
  } else if (imageUrl) { // If the message is an image.
    var image = document.createElement('img');
    image.addEventListener('load', function() {
      messageListElement.scrollTop = messageListElement.scrollHeight;
    });
    image.src = imageUrl + '&' + new Date().getTime();
    messageElement.innerHTML = '';
    messageElement.appendChild(image);
  }
  // Show the card fading-in and scroll to view the new message.
  setTimeout(function() {div.classList.add('visible')}, 1);
  messageListElement.scrollTop = messageListElement.scrollHeight;
messageInputElement.focus();
	}
	}
	
	
	
// Enables or disables the submit button depending on the values of the input
// fields.
function toggleButton() {
  if (messageInputElement.value) {
    submitButtonElement.removeAttribute('disabled');
  } else {
    submitButtonElement.setAttribute('disabled', 'true');
  }
}

// Checks that the Firebase SDK has been correctly setup and configured.
function checkSetup() {
  if (!window.firebase || !(firebase.app instanceof Function) || !firebase.app().options) {
    window.alert('You have not configured and imported the Firebase SDK. ' +
        'Make sure you go through the codelab setup instructions and make ' +
        'sure you are running the codelab using `firebase serve`');
  }
}

// Checks that Firebase has been imported.
checkSetup();

// Shortcuts to DOM Elements.
var messageListElement = document.getElementById('messages');
var messageFormElement = document.getElementById('message-form');
var messageInputElement = document.getElementById('message');
var submitButtonElement = document.getElementById('submit');
var imageButtonElement = document.getElementById('submitImage');
var imageFormElement = document.getElementById('image-form');
var mediaCaptureElement = document.getElementById('mediaCapture');
var userPicElement = document.getElementById('user-pic');
var userNameElement = document.getElementById('user-name');
var signInButtonElement = document.getElementById('sign-in');
var signOutButtonElement = document.getElementById('sign-out');
var signInSnackbarElement = document.getElementById('must-signin-snackbar');

// Saves message on form submit.
messageFormElement.addEventListener('submit', onMessageFormSubmit);
signOutButtonElement.addEventListener('click', signOut);
signInButtonElement.addEventListener('click', signIn);

// Toggle for the button.
messageInputElement.addEventListener('keyup', toggleButton);
messageInputElement.addEventListener('change', toggleButton);

// Events for image upload.
imageButtonElement.addEventListener('click', function(e) {
  e.preventDefault();
  mediaCaptureElement.click();
});
mediaCaptureElement.addEventListener('change', onMediaFileSelected);

// initialize Firebase
initFirebaseAuth();

 // TODO: Enable Firebase Performance Monitoring.
firebase.performance();

// We load currently existing chat messages and listen to new ones.
loadMessages();
