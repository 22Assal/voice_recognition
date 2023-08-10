
var speech=true;
window.SpeechRecognition = window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();
recognition.interimResults=true;

while(speech==true){
recognition.addEventListener('result' , e=>{
const transcript = Array.from(e.results)
.map(result =>result[0])
.map(result => result.transcript)

vtext.innerHTML = transcript


})
recognition.start();



}

