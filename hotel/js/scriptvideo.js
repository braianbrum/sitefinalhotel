
var video = document.getElementById("videos");



function plays1() {
    video.src="video/FARTUUNB.mp4";
    video.play();
    
}

function pause1() {
    video.pause();
}



function stop1(){
video.pause();
video.currentTime = 0;
video.src="images/musica01.png";

   
}


var volume_valor = document.getElementById('vv');
 var volvideo = document.getElementById('volumeVideo');
function volume(){
 var vol = (parseFloat(volvideo.value)*100).toFixed(2);
 video.volume = volvideo.value; 
 vv.innerHTML = vol+"%";
 }



var duracao = document.getElementById('tempo');
  
duracao.addEventListener("change", function(){
  

    var tempo = video.duration * (duracao.value / 100);
   
    video.currentTime = tempo;
    console.log("tempo", video.currentTime);

});

video.addEventListener("timeupdate", function(){
  var valor = (100/video.duration) * video.currentTime; 
   
    duracao.value = valor;
    
    tempo_valor.innerHTML = duracao.value+"%";
    console.log(duracao.value);

  
   
});

function mutar(){
if(video.muted==false){

    video.muted=true;
}else{
    video.muted=false;
}
}

function telaCheia(){
    if(video.requestFullscreen){
        video.requestFullscreen();
        
    }
}






 


/**musica 2 */




function plays2() {
    video.src="video/abdiN.mp4";
    video.play();
    
}




function pauses2() {
    video.pause();
}

function stops2(){
    video.pause();
    video.currentTime = 0;
    video.src="images/musica02.png";
    
       
    }

    
var volume_valor = document.getElementById('vv');
var volvideo = document.getElementById('volumeVideo');
function volume2(){
var vol = (parseFloat(volvideo.value)*100).toFixed(2);
video.volume = volvideo.value; 
vv.innerHTML = vol+"%";
}


var duracao = document.getElementById('tempo');
  
      duracao.addEventListener("change", function(){
  

  var tempo2 = video.duration * (duracao.value / 100);
   
    video.currentTime = tempo;
    console.log("tempo", video.currentTime);

});

video.addEventListener("timeupdate", function(){
  var valor = (100/video.duration) * video.currentTime; 
   
    duracao.value = valor;
    
    tempo_valor.innerHTML = duracao.value+"%";
    console.log(duracao.value);

  
   
});

function mutar2(){
    if(video.muted==false){
    
        video.muted=true;
    }else{
        video.muted=false;
    }
    }

    function telaCheia2(){
        if(video.requestFullscreen){
            video.requestFullscreen();
            
        }
    }

    /**musica 3 */




function plays3() {
    video.src="video/adan.mp4";
    video.play();
    
}


function pauses3() {
    video.pause();
}

function stops3(){
    video.pause();
    video.currentTime = 0;
    video.src="images/musica03.png";
    
       
    }

    
var volume_valor = document.getElementById('vv');
var volvideo = document.getElementById('volumeVideo');
function volume3(){
var vol = (parseFloat(volvideo.value)*100).toFixed(2);
video.volume = volvideo.value; 
vv.innerHTML = vol+"%";
}


var duracao = document.getElementById('tempo');
  
      duracao.addEventListener("change", function(){
  

  var tempo2 = video.duration * (duracao.value / 100);
   
    video.currentTime = tempo;
    console.log("tempo", video.currentTime);

});

video.addEventListener("timeupdate", function(){
  var valor = (100/video.duration) * video.currentTime; 
   
    duracao.value = valor;
    
    tempo_valor.innerHTML = duracao.value+"%";
    console.log(duracao.value);

  
   
});

function mutar3(){
    if(video.muted==false){
    
        video.muted=true;
    }else{
        video.muted=false;
    }
    }

    function telaCheia3(){
        if(video.requestFullscreen){
            video.requestFullscreen();
            
        }
    }
 

    /**musica 4 */




function plays4() {
    video.src="video/heesta.mp4";
    video.play();
    
}


function pauses4() {
    video.pause();
}

function stops4(){
    video.pause();
    video.currentTime = 0;
    video.src="images/musica04.png";
    
       
    }

    
var volume_valor = document.getElementById('vv');
var volvideo = document.getElementById('volumeVideo');
function volume4(){
var vol = (parseFloat(volvideo.value)*100).toFixed(2);
video.volume = volvideo.value; 
vv.innerHTML = vol+"%";
}


var duracao = document.getElementById('tempo');
  
      duracao.addEventListener("change", function(){
  

  var tempo2 = video.duration * (duracao.value / 100);
   
    video.currentTime = tempo;
    console.log("tempo", video.currentTime);

});

video.addEventListener("timeupdate", function(){
  var valor = (100/video.duration) * video.currentTime; 
   
    duracao.value = valor;
    
    tempo_valor.innerHTML = duracao.value+"%";
    console.log(duracao.value);

  
   
});

function mutar4(){
    if(video.muted==false){
    
        video.muted=true;
    }else{
        video.muted=false;
    }
    }

    function telaCheia4(){
        if(video.requestFullscreen){
            video.requestFullscreen();
            
        }
    }
 
  /**musica 5 */




function plays5() {
    video.src="video/halimo.mp4";
    video.play();
    
}


function pauses5() {
    video.pause();
}

function stops5(){
    video.pause();
    video.currentTime = 0;
    video.src="images/musica04.png";
    
       
    }

    
var volume_valor = document.getElementById('vv');
var volvideo = document.getElementById('volumeVideo');
function volume5(){
var vol = (parseFloat(volvideo.value)*100).toFixed(2);
video.volume = volvideo.value; 
vv.innerHTML = vol+"%";
}


var duracao = document.getElementById('tempo');
  
      duracao.addEventListener("change", function(){
  

  var tempo2 = video.duration * (duracao.value / 100);
   
    video.currentTime = tempo;
    console.log("tempo", video.currentTime);

});

video.addEventListener("timeupdate", function(){
  var valor = (100/video.duration) * video.currentTime; 
   
    duracao.value = valor;
    
    tempo_valor.innerHTML = duracao.value+"%";
    console.log(duracao.value);

  
   
});

function mutar5(){
    if(video.muted==false){
    
        video.muted=true;
    }else{
        video.muted=false;
    }
    }

    function telaCheia5(){
        if(video.requestFullscreen){
            video.requestFullscreen();
            
        }
    }





