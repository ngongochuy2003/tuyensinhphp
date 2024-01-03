var container = document.getElementById(container);
var bordersarray = ['50%', '0'];
var blursarray = ['0','5px'];
var colorsarray = ['#FF6B6B' , '#FFE66D','#4472CA'];
var width = document.documentElement.clientWidth;
var height = document.documentElement.clientHeight;
var count = 40 ;


function createElementRandom (){
  
    for ( var i = 0 ; i<count ; i++){
       
        var randomLeft = Math.floor(Math.random()*width);
        var randomTop = Math.floor(Math.random()*height);
        var color = Math.floor(Math.random()*3);
        var border = Math.floor(Math.random()*2);
        var blur = Math.floor(Math.random()*2);
        var widthElement =  Math.floor(Math.random()*5)+5;
        var timeAnimation =  Math.floor(Math.random()*12)+8;

        var div = document.createElement("div");
        div.style.backgroundColor=colorsarray[color];
        div.style.position='absolute';
        div.style.width= widthElement + 'px';
        div.style.height= widthElement + 'px';
        div.style.marginLeft = randomLeft + 'px';
        div.style.marginTop = randomTop + 'px';
        div.style.borderRadius = bordersarray[border];
        div.style.filter = 'blur('+blursarray[blur]+')';
        div.style.animation='move'+timeAnimation + ' s ease-in isFinite '  ;

container.appendChild(div);

    }
}
createElementRandom ();
