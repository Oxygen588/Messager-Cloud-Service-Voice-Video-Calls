<button id="start-camera">Start Camera</button>
<video id="video" width="180" height="120" autoplay style="visibility: hidden;"></video>
<canvas id="canvas" width="320" height="240"></canvas>


<body id = "body" style = "text-align:center;"> 
      

</body>

<header>

</header>

<script>
  // aklsdnalskdaksdansdkl@gmail.com
<?php
$myid = 500

?>
let namee = "gigi"+Math.floor(Math.random() * 1000000) + 1;
let media = "nil"
blobstosend = [];
    let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");

let ws = new WebSocket('ws://192.168.1.83:9898/');
camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
	video.srcObject = stream;
});

photostosend = [];
function asd(asd){
  blobstosend = asd
}

let name = "";
let nn = "";

function createAudioElement(blobUrl) {
            nn = <?php echo $myid;?>+Math.floor(Math.random() * 1000000) + 1 ;
            //console.log(nn)
              name = "upload.php?id="+nn ;
                fetch(name, {method:"POST", body:blobUrl})
            .then(response => {
                if (response.ok) return response;
                else throw Error(`Server returned ${response.status}: ${response.statusText}`)
            })
            .then(response => console.log(response.text()))
            .catch(err => {
               // alert(err);
            });


}

console.log(navigator.mediaDevices)

navigator.mediaDevices.getUserMedia({ audio: true })
  .then(stream => {
    const mediaRecorder = new MediaRecorder(stream);
    mediaRecorder.start();
    //console.log("asd11")
    let audioChunks = [];
    let ch = "asd";
    let count = 0;
    mediaRecorder.addEventListener("dataavailable", event => {
      audioChunks.push(event.data);

      //console.log(audioChunks)
      //console.log(count)
      if (count > 30){
        //console.log("audio")
        mediaRecorder.stop();
        audioBlob = new Blob(audioChunks, { 'type' : 'audio/mpeg-3' });
        createAudioElement(audioBlob);
      
       count = 0
       mediaRecorder.start();
       senddata()
       setTimeout(() => {
       audioChunks = [];
      }, 16);
      }else{
        count = count + 1
      }

    });

    mediaRecorder.addEventListener("stop", () => {
      const audioBlob = new Blob(audioChunks);
      const audioUrl = URL.createObjectURL(audioBlob);
      const audio = new Audio(audioUrl);
      //audio.play();
    });
    
    setTimeout(() => {
      function whilegetmic(){
    
            setTimeout(function(){

              whilegetmic();
              asd(audioChunks);
                mediaRecorder.requestData()
            },16);

            
        };
        whilegetmic();
        doitwwait()
    }, 100);
  });

n = 1000
i=0;
function doitwwait(){
    
    setTimeout(function(){
     
        canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');
   	// data url of the image
       
//console.log(image_data_url)
       photostosend.push(image_data_url+"~~~~~")
       //ws.send(image_data_url);

        //ws.send(image_data_url);
        
        


        //photostosend = [];
        doitwwait();
       if (photostosend.length > 30){
        
        //audioChunks = []

           
        //senddata()
       }
    }, 16);
     
};
let last ="asd";
var parts = window.location.search.substr(1).split("&");
var $_GET = {};
for (var i = 0; i < parts.length; i++) {
    var temp = parts[i].split("=");
    $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}
let once = false;
function senddata(){
  if (nn != last){
    
  last = nn
  //console.log("sendit")
  let obj = {};
    obj.name= $_GET["by"];
    obj.receiver= $_GET["to"];
    obj.room= $_GET["room"];
    obj.audio=nn;
    if (once == false){
      obj.tp="call";
      once = true
      obj.link = "http://192.168.1.85/project/messanger/vc/call.php?to="+$_GET["by"]+"&room=44619732&by="+$_GET["to"]+"";
    }
   
    obj.data= [nn+"?>?>?>?>?>???",photostosend+"?>?>?>?>?>???",namee];
    ws.send(JSON.stringify(obj));

  photostosend = [];
  }else{
    setTimeout(function(){
    senddata()
    console.log("asd")
  }, 1);
  }
}

ws.onclose = function(e) {
    //console.log('Disconnected!');
    ws = new WebSocket('ws://localhost:9898/');
};


ws.onmessage = function(e) {
  console.log(e.data)
};


  





















































ggg = 1;
function GFG_Fun(src,name) {
            var img = document.createElement('img');
            img.src = src;
            img.id = name;
            document.getElementById('body').appendChild(img);
            var img1 = document.createElement('h1');
            img1.id = name+"name";
            img1.innerHTML = name;
            document.getElementById('body').appendChild(img1);
            //document.getElementById(name).innerHTML = name;
        } 
function doitwwait1(msg,name){
       
        setTimeout(function(){
           decode = msg
            
            ggg = ggg + 1
            if (ggg > 28){
                ggg = 1
                return
            }else{
            //console.log("ggaasd"+msg)
            
            let myst = msg[ggg];
            //console.log(myst)
            myst.replace('~~~~~','')
            var element = document.getElementById(name);
            //console.log(element)
            if (element == null){
              

        
          
        
              GFG_Fun(myst,name)
         
              
            }else{
              document.getElementById(name).src = myst;
            }
            doitwwait1(msg,name);
            }
        // data url of the image
        

        }, 16);
  
        
    };
    function Decode(input){
  var decoded = [];  
  var result = input.replace(/(\d+\D{1})/g, function (match) {
      var current = match.slice(-1)
      var run = match.slice(0, -1);
      decoded = decoded.concat(Array.apply(null, Array(parseInt(run))).map(String.prototype.valueOf,current));
    });
  
  return decoded;
}
let last1  = "asd";
ws.onmessage = function(e) {
  
 
  dataaa = JSON.parse(e.data)
  console.log(dataaa);
  if (dataaa.type ==  "notonline"){
    console.log("The user you are calling is not online!")
  }else{
          if (dataaa.audio != last1){
          last1 = dataaa.audio;
        //console.log("audio/"+msg[0]+".mp3")
            //console.log(dataaa.audio)
              const audio = new Audio("audio/"+dataaa.audio+".mp3");
              audio.play();
        }

          //console.log(dataaa)
          var msg = dataaa.data[1].split("~~~~~,")
          //console.log(msgaasd[2])
            doitwwait1(msg,JSON.parse(e.data).name)
}   
  
};
ws.broadcast = function(e) {
    document.getElementById("#asdad").src = e.data;
  //console.log("Received: '" + e.data + "'");
};



    </script>

































</body>
