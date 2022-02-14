<button id="start-camera">Start Camera</button>
<video id="video" width="320" height="240" autoplay></video>
<button id="click-photo">Click Photo</button>
<canvas id="canvas" width="320" height="240"></canvas>
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACxCAMAAAAh3/JWAAAAhFBMVEUAAAD///9gYGD6+voODg7x8fGioqIuLi6Xl5fn5+fFxcXq6ur09PSrq6vPz8+urq4kJCRSUlJnZ2fd3d1ISEh3d3c2NjYYGBiUlJS2trYiIiJBQUGcnJw8PDwICAgoKCgbGxtvb29OTk6FhYXHx8e8vLx5eXnY2NiBgYEyMTJaWlqNjY06gzVSAAAE8UlEQVR4nO3b2XKqShgF4G7AVpwioKKAIM7R93+//fcEdFLn6lQKqFrfxQ6Q1jRr9wQiYwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMDblNOu7CoNUlvRPuv+W20HZc2WGZlOVNpz09N13bQYmqzIbzv407bs2AxNsqkCHk51OQd+1GZpztVHhlKdT1XddhuR8pvGmrKjpnFOW5Xva22xPfddqGMosy1LqWKnem6YszaPo0nOthqI8UzydcWYaRVGe9lefgQmyTSecbXTZ9FeXAequ+1KMyNb3jtTusWpTVUiILLj01T0UxaTO+6rRgKxVOLPuoa0MJ973VaMh2ZMffSgguPq04mOnE00jzOOt/Y3ze7tbv3bb/iozMCvf52FnRZzvHq8aV+ZKzf3lgTFxUwPP6RCz4P14PDDmSJv1kWLxFos4uNbsLQpqNJUX9V2tIVmHa7YVszI4FNe+6zI013DhqXDYRRQYjh1lEh6ZDoddi0Pf1RmYZ7i34exnj75rMzClXPdtRYE56r+UNe7/AQAAAAAAAADA0JSHYuceOX/uSRjeCufRic+siNtt6XB9N88tPWZayphXzJq77nHxsSXe4paEyVx4f3ISfyXg/OYcWHFr3T48EdHuwu4smhKJ+WgmMftT/XJb8sh9vVG3L1k6T7AMXODzeWe3DDkPP5dpvrvRmbzt4bs8L/u/HvJlIYS4hzIH1b6iuOb87sUBY0KWLHTBLz5RP4+c+1/xfvp+zX3OR/TowY9wnpyvzKZHZ2meN6HmdVg0LSy0TeObzprrPlTZ1wk+OdrXmXCoMT2b5wiL8YZTd5+hoB3zqw/n8hTPei9se1jMTeOYtuEs2ZKv1bYOh7pk2PmD+xE99O6GQw2n81WhxDaBkM6WTl8ws9eEI3uRetLLCWfHuXpyUIdD/XOsn6Y74VD3STq/m3GuPrTz1HjzNI3ECYderpqFEw4VVSOxDsd3Gs6oOOG8OT92fueZM56rNKg96Nm8G45sa/KHG47ZU+GcnKedxsUJ59FMNMpWZ5XRcCx37VDihLPWQ5EbDg27/GLCudjAg602ok9KnXB2bjjmvOhM1Qmt1ELmdzhy+vkRDpVJTDhbG87FrHRG9NSyE07OnXm91mPwhFY+cv0rTABOOIkeXn6GQx30o8PZ2/fMwyRJJpyP6PsA7mzlDp5CzToeb6khuRsOrW9UX/sZDi0bfWpqsvzSDuTS14jDuamxwpqoVrHmS3M1ddSzVzecu1k4/wqH3vcuVCxU5NWUP444nEt3LheqV7XrG9mwnswJR9g+8ysc9qJ1sQqHpiu/GWfGHI5s9ol5dHalV7bCDMMSndpJhqP7XroLmyyzX+HISV53KFpf+/aSXnerDf1Kfa94bkZreWH7F2f3P1E4k7UhL5jl5dJt9jkcl5TNmcm+9WwKR+prISH3qfBz0X5L5CUowudMpN1wchsOO9BWuPp8DuLmq9kq4ybx+8DD6Qy3qhXU9v7DRF0XvMwqWVvIiXtiy4fCtCnnloVvC1NgZju/2Zf4N3lh0W05aoX4HmY4zGuZS6D8WhTFwdyuuHjd+1O5F1fsrUtX7RXkxbwBHTm15cvYa+55ZPGM3vRj/kKpy9IiyPPUVf059sZ1GwwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAxuQfdPY/bd31jdAAAAAASUVORK5CYII="id="asdad" width="500" height="600">
<p id="demo"></p>
<body id = "body" style = "text-align:center;"> 
      

</body>
<script>
const ws = new WebSocket('ws://80.43.213.140:9898/');
ggg = 1
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
function doitwwait(msg,name){
       
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
            doitwwait(msg,name);
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
let last  = "asd";
ws.onmessage = function(e) {
  //console.log(e.data);
  dataaa = JSON.parse(e.data)

  if (dataaa.audio != last){
  last = dataaa.audio;
//console.log("audio/"+msg[0]+".mp3")
    console.log(dataaa.audio)
      const audio = new Audio("audio/"+dataaa.audio+".mp3");
      audio.play();
}

  console.log(dataaa)
  var msg = dataaa.data[1].split("~~~~~,")
  //console.log(msgaasd[2])
    doitwwait(msg,JSON.parse(e.data).name)
    
 
};
ws.broadcast = function(e) {
    document.getElementById("#asdad").src = e.data;
  //console.log("Received: '" + e.data + "'");
};


setTimeout(function(){
  let obj = {};
    obj.name="gigel12";
    obj.room="55";
    ws.send(JSON.stringify(obj));
    }, 650);
    </script>