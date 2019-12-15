
var audio= document.getElementById("audioss");
function plays() {
    audio.play();   
}
    
function pauses() {
    audio.pause();
}

function stops(){
    audio.pause();
    audio.currentTime = 0;       
}


var duracaoaudio = document.getElementById("tempoaudio");
var tempo_valoraudio = document.getElementById("tempo_valoraudio");

console.log("duracaoaudio", duracaoaudio);
  
duracaoaudio.addEventListener("change", function(){
    console.log("AQUII");
    var tempo = audio.duration * (duracaoaudio.value / 100);

    audio.currentTime = tempo;
    console.log("tempo", tempo);

});

audio.addEventListener("timeupdate", function(){
    var valoraudio = (100/audio.duration) * audio.currentTime; 

    duracaoaudio.value = valoraudio;

    tempo_valoraudio.innerHTML = duracaoaudio.value+"%";
    console.log(duracaoaudio.value);



});


var volume_valoraudio = document.getElementById('va');
var volaudio = document.getElementById("volumeaudio");


function volumeAU(){

    var volume_valoraudio = document.getElementById('va');
    var volaudio = document.getElementById("volumeaudio");

    var volA = (parseFloat(volaudio.value)*100).toFixed(2);
    audio.volume = volaudio.value; 
    volume_valoraudio.innerHTML = volA+"%";
}


function mutaraudio(){
    if(audio.muted==false){

        audio.muted=true;
    }else{
        audio.muted=false;
    }
}