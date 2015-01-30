<!DOCTYPE html>
<html>
<head>

	<title>hello sanjit</title>
<style type="text/css">
	body {
  margin:0;
  background-color:hsla(206, 35%, 5%, 1);
  overflow: hidden;
  width:100%;
}
section{
  padding: 15% 25% 0 0;
}
/*seconds*/
div{
  /*float each right for alignment */
  float:right;
  width: 100px; 
  height: 100px;
  margin:5% 0 0,0; 
  padding: 0;
  transform: skew(-10deg) scale(.5, .45);
}

/*milliseconds*/
div:nth-child(1){
  width: 55px; 
  height: 60px;
  margin-top: 56px;
  margin-left: 15px;
  transform:  skew(-10deg) scale(.30, .27);
}

/*decimal*/
div:nth-child(1):before{
  display: block;
  top: 260px;
  left: -55px;
  width: 34px; 
  height: 31px;
  border-radius: 10px;
  content: "";
}

/* segments && decimal */
p, p:before, p:after,
div:nth-child(1):before{
  position: absolute;
  margin: 0; 
  padding: 0;
  background-color: hsla(235, 95%, 45%, 1);
  box-shadow:
    2px 2px hsla(229, 95%, 35%, .25),
    5px 5px hsla(229, 95%, 35%, .2),
    8px 8px hsla(229, 95%, 35%, .15),
    11px 11px hsla(229, 95%, 35%, .1),
    14px 14px hsla(229, 95%, 35%, .05);
}
/*digits*/
p{
  width: 29px; 
  height: 100px;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

p:nth-child(4){ 
  height: 110px;
}

p:before, p:after{
  content: "";
  display: block;
  width: 29px;
  height: 29px;
  transform: rotate(45deg);
}
p:before{ 
  top:-15px; 
}
p:after { 
  bottom: -15px; 
}

p:nth-child(4):before, p:nth-child(4):after{
  left: 4px;
  width: 20px;
  height: 20px;
}
p:nth-child(4):before{ 
  top: -10px;
}
p:nth-child(4):after { 
  bottom: -10px; 
}
 /*found that the #.99 opacity definition for each frame is necessary to keep the opacity constant & accurate through number changes*/
@keyframes one {
   0% { opacity: 1.0; }   
   9.99% { opacity: 1.0; }
   10% { opacity: 0.1; }
   39.99% { opacity: 0.1;}
   40% { opacity: 1.0; }
   100% { opacity: 1.0; }
} 
@keyframes two {
   0% { opacity: 1.0; }    
   9.99% { opacity: 1.0;}
   10% { opacity: 0.1; }   
   19.99% { opacity: 0.1;}
   20% { opacity: 1.0; }
   39.99% { opacity: 1.0; }
   40% { opacity: 0.1; }   
   49.99% { opacity: 0.1; }
   50% { opacity: 1.0; }
  100% { opacity: 1.0; }
} 

@keyframes three {
   0% { opacity: 1.0; }
   49.99% { opacity: 1.0;}
   50% { opacity: 0.1; }
   69.99% { opacity: 0.1;}
   70% { opacity: 1.0; }
   100% { opacity: 1.0; }
} 

@-webkit-keyframes four {
   0% { opacity: 0.1; }
   19.99% { opacity: 0.1;}
   20% { opacity: 1.0; }
   69.99% { opacity: 1.0;}
   70% { opacity: 0.1; }  
   79.99% { opacity: 0.1; }
   80% { opacity: 1.0; }
   99.99% { opacity: 1.0; }
   100% { opacity: 0.1; }
} 

@keyframes five {
   0% { opacity: 1.0; }    
   9.99% { opacity: 1.0;}
   10% { opacity: 0.1; }   
   19.99% { opacity: 0.1;}
   20% { opacity: 1.0; }   
   29.99% { opacity: 1.0;}
   30% { opacity: 0.1; }
   59.99% { opacity: 0.1;}
   60% { opacity: 1.0; }   
   69.99% { opacity: 1.0;}
   70% { opacity: 0.1; }   
   79.99% { opacity: 0.1;}
   80% { opacity: 1.0; }   
   89.99% { opacity: 1.0;}
   90% { opacity: 0.1; }   
   99.99% { opacity: 0.1; }
   100% { opacity: 1.0; }
} 

@keyframes six {
   0% { opacity: 1.0; }    
   9.99% { opacity: 1.0;}
   10% { opacity: 0.1; }   
   19.99% { opacity: 0.1;}
   20% { opacity: 1.0; }
   39.99% { opacity: 1.0;}
   40% { opacity: 0.1; }   
   49.99% { opacity: 0.1;}
   50% { opacity: 1.0; }
   69.99% { opacity: 1.0;}
   70% { opacity: 0.1; }   
   79.99% { opacity: 0.1;}
   80% { opacity: 1.0; }
   100% { opacity: 1.0; }
} 

@keyframes seven {
   0% { opacity: 1.0; }
   19.99% { opacity: 1.0;}
   20% { opacity: 0.1; }  
   29.99% { opacity: 0.1;}
   30% { opacity: 1.0; }
   100% { opacity: 1.0; }
}

/*duration*/
div:nth-child(1) p{ 
  animation-duration: 1s;
}
div:nth-child(2) p{ 
  animation-duration:10s;
}
div:nth-child(3) p{ 
  animation-duration:100s;
}
div:nth-child(4) p{ 
  animation-duration: 1000s;
}

/*segments*/
p:nth-child(1){ 
  top:0; 
  left: 0; 
  animation-name: one;
}
p:nth-child(2){ 
  top: -70px; 
  left: 70px; 
  animation-name: two;
}
p:nth-child(3){ 
  top:   0;   
  left: 140px; 
  animation-name: three;
}
p:nth-child(4){ 
  top:  70px; 
  left:  70px; 
  animation-name: four;
}
p:nth-child(5){ 
  top: 150px; 
  left:   0;  
  animation-name: five;
}
p:nth-child(6){ 
  top: 220px; 
  left:  70px; 
  animation-name: six;
}
p:nth-child(7){ 
  top: 150px; 
  left: 140px; 
  animation-name: seven;
}
/*horizontal rotation */
p:nth-child(even){
  transform: rotate(90deg);
}

/*top & left side borders*/
p:nth-child(1):before, p:nth-child(1):after,
p:nth-child(2):before, p:nth-child(2):after,
p:nth-child(5):before, p:nth-child(5):after{
  left: -6px;
  border-radius: 0 0 0 99px;
}

/*bottom & right borders */
p:nth-child(3):before, p:nth-child(3):after,
p:nth-child(6):before, p:nth-child(6):after,
p:nth-child(7):before, p:nth-child(7):after{
  right: -6px;
  border-radius:  0 99px 0 0;
}
/*pause / resume text*/
#pause, #resume  {
  font-family:'Orbitron', Arial;
  font-size:15em;
  text-decoration:none;
  line-height:50px;
  margin-left:-945px;
  transition:all .5s ease;
}
div:nth-child(5) {
  display:none;
  visibility:hidden;
}
#counter:target p {
  animation-play-state: paused;
 }
#counter:target div:nth-child(5) {
  display:inline;
  visibility:visible;
}
#counter:target div:nth-child(6) {
  display:none;
}
#pause{
  color:hsla(96, 85%, 45%, 1);
  text-shadow:
    1px 6px hsla(90, 85%, 35%, .4),
    2px 8px hsla(90, 85%, 35%, .35),
    3px 10px hsla(90, 85%, 35%, .3),
    4px 12px hsla(90, 85%, 35%, .2),
    5px 14px hsla(90, 85%, 35%, .19),
    6px 16px hsla(90, 85%, 35%, .18),
    7px 18px hsla(90, 85%, 35%, .17),
    8px 20px hsla(90, 85%, 35%, .16);
}
#pause:active{
  text-shadow:  1px 6px hsla(90, 85%, 35%, .4),
    2px 8px hsla(90, 85%, 35%, .35),
    3px 10px hsla(90, 85%, 35%, .3),
    4px 12px hsla(90, 85%, 35%, .2),
    5px 14px hsla(90, 85%, 35%, .19);
}
#resume{
    color:hsla(59, 95%, 55%, 1);
    text-shadow:
    1px 6px hsla(53, 95%, 45%, .4),
    2px 8px hsla(53, 95%, 45%, .35),
    3px 10px hsla(53, 95%, 45%, .3),
    4px 12px hsla(53, 95%, 45%, .2),
    5px 14px hsla(53, 95%, 45%, .19),
    6px 16px hsla(53, 95%, 45%, .18),
    7px 18px hsla(53, 95%, 45%, .17),
    8px 20px hsla(53, 95%, 45%, .16);
}
#resume:active{
  text-shadow: 1px 6px hsla(53, 95%, 45%, .4),
    2px 8px hsla(53, 95%, 45%, .35),
    3px 10px hsla(53, 95%, 45%, .3),
    4px 12px hsla(53, 95%, 45%, .2),
    5px 14px hsla(53, 95%, 45%, .19);
}
/*Font for the pause/resume text from http://www.fontsquirrel.com/fonts/orbitron*/
@font-face {
  font-family: 'Orbitron';
  font-style: normal;
  font-weight: 800;
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/131045/font.woff') format('woff');
}
</style>
</head>
<body>

<body>

<section id="counter">
<div><p><p><p><p><p><p><p></div>
<div><p><p><p><p><p><p><p></div>
<div><p><p><p><p><p><p><p></div>
<div><p><p><p><p><p><p><p></div>
<div><a id = 'resume' href="#">Resume</a></div> 
<div><a id ='pause' href="#counter">Pause</a></div>
<div>i love you sanjit</div>
</section>

</body>


</body>
</html>