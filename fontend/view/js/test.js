
$(document).ready(function(){$("body").append('<div class="MangBinhDinhRainEffect" style="position:fixed;z-index:9999;left:0;right:0;bottom:0;pointer-events:none;"><canvas id="canvasMangBinhDinhRainEffect"></canvas></div>');var n=$("#canvasMangBinhDinhRainEffect")[0];if(n.width=window.innerWidth,n.height=window.innerHeight,n.getContext){var t=n.getContext("2d"),a=n.width,e=n.height;t.strokeStyle="rgba(174,194,224,1)",t.lineWidth=1,t.lineCap="round";for(var i=[],o=0;o<1e3;o++)i.push({x:Math.random()*a,y:Math.random()*e,l:1*Math.random(),xs:4*Math.random()-4+2,ys:10*Math.random()+10});for(var r=[],d=0;d<1e3;d++)r[d]=i[d];setInterval(function(){t.clearRect(0,0,a,e);for(var n=0;n<r.length;n++){var i=r[n];t.beginPath(),t.moveTo(i.x,i.y),t.lineTo(i.x+i.l*i.xs,i.y+i.l*i.ys),t.stroke()}!function(){for(var n=0;n<r.length;n++){var t=r[n];t.x+=t.xs,t.y+=t.ys,(t.x>a||t.y>e)&&(t.x=Math.random()*a,t.y=-20)}}()},30)}});
1
$(document).ready(function(){$("body").append('<div class="MangBinhDinhRainEffect" style="position:fixed;z-index:9999;left:0;right:0;bottom:0;pointer-events:none;"><canvas id="canvasMangBinhDinhRainEffect"></canvas></div>');var n=$("#canvasMangBinhDinhRainEffect")[0];if(n.width=window.innerWidth,n.height=window.innerHeight,n.getContext){var t=n.getContext("2d"),a=n.width,e=n.height;t.strokeStyle="rgba(174,194,224,1)",t.lineWidth=1,t.lineCap="round";for(var i=[],o=0;o<1e3;o++)i.push({x:Math.random()*a,y:Math.random()*e,l:1*Math.random(),xs:4*Math.random()-4+2,ys:10*Math.random()+10});for(var r=[],d=0;d<1e3;d++)r[d]=i[d];setInterval(function(){t.clearRect(0,0,a,e);for(var n=0;n<r.length;n++){var i=r[n];t.beginPath(),t.moveTo(i.x,i.y),t.lineTo(i.x+i.l*i.xs,i.y+i.l*i.ys),t.stroke()}!function(){for(var n=0;n<r.length;n++){var t=r[n];t.x+=t.xs,t.y+=t.ys,(t.x>a||t.y>e)&&(t.x=Math.random()*a,t.y=-20)}}()},30)}});