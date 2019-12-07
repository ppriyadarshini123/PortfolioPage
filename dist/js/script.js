/*import * as PIXI from 'pixi.js';*/

/*
(function(){
*/

let stage = new PIXI.Container();
/*let renderer = PIXI.autoDetectRenderer(window.innerWidth-4, window.innerHeight-4, {view: document.getElementById("dispCnv")}, {transparent: false}, {backgroundColor: 0x197780}, {clearBeforeRender: true});*/
let h = window.innerHeight - (29.5/100*window.innerHeight);/*Keep top space for Menu*/

/*dont touch, all working*/
let renderer = PIXI.autoDetectRenderer({width: window.innerWidth, height: h,transparent: false});
renderer.backgroundColor = 0x197780;

/* var webGLcanvas = renderer.view;
*  var ctx = renderer.context; */

let _stars = [], _glows = [];
let _mouseX = window.innerWidth*0.5, _mouseY = window.innerHeight*0.5, _starInterval;
let _nextStar = 0, _nextGlow = 0;
let width, height, fontSize, textPixels, yOffset;
let textCanvas, textCtx;
let htmlText = document.getElementById("html-text");

let percent = 0;

/*Append renderer to the canvas element*/
/*document.body.getElementsByTagName("canvas")[0].appendChild(renderer.view);*/
document.querySelector('#home').appendChild(renderer.view);
/*document.body.appendChild(renderer.view);*/

initCanvas();

function begin() {
    resize();
    requestAnimationFrame( animate );
}

/*let render = function() {
    renderer.render(stage);
    /!*requestAnimationFrame(render);*!/
}

render();*/

let textures = [
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-blue.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-orange.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-pink.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-green.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-purple.png")
]

//create stars
for (let i = 0; i < 600; i++) {
    createStar(textures[i%5]);
}

for (let i = 0; i < 100; i++) {
    createGlow();
}

for (let i = 0; i < 100; i++) {
    setTimeout(function() {
        launchGlow();
    }, 10);
}

function createStar(text) {
    let star = new PIXI.Sprite(text);
    star.width = 5 + Math.random()*20;
    star.height = 5 + Math.random()*20;
    star.anchor.x = 0.5;
    star.anchor.y = 0.5;

    stage.addChild(star);
    star.alpha = 0;
    star.launched = false;
    _stars.push(star);
}

function createGlow() {
    let glow = new PIXI.Sprite(PIXI.Texture.from('/dist/imgs/unoptimized/glow-star.png'));
    let size = 2 + Math.random()*14;
    glow.width = size;
    glow.height = size;
    glow.anchor.x = 0.5;
    glow.anchor.y = 0.5;

    stage.addChild(glow);
    glow.alpha = 0;
    glow.launched = false;
    _glows.push(glow);
}

function launchStar() {
    let star = _stars[_nextStar];
    _nextStar = _nextStar == _stars.length-1 ? 0 : _nextStar + 1;
    star.launched = true;
    star.alpha = 1;
    let pos = textPixels[Math.floor(Math.random()*textPixels.length)];
    /*console.log(pos);
    console.log(Math.floor(Math.random()*textPixels.length));
    console.log(Math.random()*textPixels.length);*/
    star.position.x = pos.x;
    star.position.y = yOffset + pos.y;

    star.vx = 1 + Math.random()*1;
    star.vy = -1 + Math.random()*-1;
    star.vr = -0.2 + Math.random()*0.4;
    star.p = 0;
}

function launchGlow(i) {
    let glow = _glows[_nextGlow];
    _nextGlow = _nextGlow == _glows.length-1 ? 0 : _nextGlow + 1;
    glow.launched = true;
    glow.alpha = 0.1 + Math.random()*0.2;
    glow.position.x = Math.random()*width;
    glow.position.y = Math.random()*height;

    glow.vx = 0.5 + Math.random()*0.5;
    glow.vy = -0.5 + Math.random()*-0.5;
}

function launchStarBatch() {
    for (let i = 0; i < 6; i++) {
        launchStar();
    }
}

function animate() {
    launchStarBatch();
    requestAnimationFrame( animate );
    for (let i = 0; i < _stars.length; i++) {
        if(_stars[i].launched) {
            let angle = Math.PI * (1-_stars[i].p);
            _stars[i].rotation += _stars[i].vr;
            _stars[i].position.x += _stars[i].vx + 0.5 * Math.cos(angle) + _stars[i].vx;
            _stars[i].position.y += _stars[i].vy + 0.5 * Math.sin(angle) + _stars[i].vy;
            // _stars[i].vy += 0.04;
            _stars[i].p += _stars[i].vr;
            _stars[i].alpha -= 0.01;
        }
    }

    for (let i = 0; i < _glows.length; i++) {
        if(_glows[i].launched) {
            _glows[i].position.x += _glows[i].vx;
            _glows[i].position.y += _glows[i].vy;

            if (_glows[i].position.y < 0) {
                _glows[i].position.x = Math.random()*width;
                _glows[i].position.y = height + Math.random()*50;
            }
            if (_glows[i].position.x > width) {
                _glows[i].position.x = -Math.random()*100;
                _glows[i].position.y = height*Math.random();
            }

        }
    }
    /*webGlCtx.render(stage);*/
    // render the stage
    renderer.render(stage);
    /*render();*/
}
// canvas
/*Creates one more canvas*/
function initCanvas() {
    /* textCanvas = document.getElementById("dispCnv");
     textCtx = textCanvas.getContext("2d");*/

    textCanvas = renderer.view;

    console.log(renderer.view);
    /*textCtx = textCanvas.getContext('webgl')|| textCanvas.getContext('webgl2');*/
    textCtx = textCanvas.getContext('2d');
    console.log(textCtx);
    /* console.log(textCtx.drawingBufferWidth);
     console.log(textCtx.drawingBufferHeight);*/
}

function sampleCanvas() {
    /*textCanvas.style.width = width + 'px';
    textCanvas.style.height = fontSize + 'px';
    textCanvas.style.marginTop = -(fontSize / 2) + 'px';
    textCanvas.width = width;
    textCanvas.height = fontSize;
    textCtx.textAlign = 'center';
    textCtx.textBaseline = "top";
    textCtx.font = fontSize + 'px "Luckiest Guy"';
    textCtx.fillStyle = '#eee';
    textCtx.fillRect(0, 0, width, fontSize);
    */

   /* textCtx.clearRect(0, 0, renderer.width, fontSize);*//*sets the pixels in a rectangular area to transparent black. The rectangle's corner is at (x,y).
    This code snippet erases part of the canvas. This is commonly required at the start of each frame in an animation.*/

    /*textCtx.fillText('WELCOME TO MY WEBPAGE', width / 2, 0);*/

    textCtx.fillStyle = "#197780";/*the green background color*/
    textCtx.fillRect(window.innerWidth/4,0, window.innerWidth/2, window.innerHeight);/*This rectangle contains the stars*/
    let pix = textCtx.getImageData(0,0, window.innerWidth, fontSize).data;/*returns an ImageData object representing the underlying pixel data for a specified portion of the canvas. RGBA color value is specified with RGBA. The alpha parameter is a number between 0 (fully transparent) and 255(fully opaque)*/
    /*textCtx.putImageData(pix, 0, -100);*/
    textPixels = [];
    console.log(pix);
    /*let imageData = new Uint8Array(textCtx.width * fontSize * 4);/!*length is 4 , to store 4 values of red, green, blue, alpha*!/*/
    console.log(pix.length);
    for (let i = pix.length; i >= 0; i -= 4) {
        /*console.log(pix[i] != 0);*/
        if (pix[i] != 0) {
            let x = (i / 4) % window.innerWidth;
            let y = Math.floor(Math.floor(i / window.innerWidth) / 4);
           /* console.log(y);*/
            if ((x && x % 6 == 0) && (y && y % 6 == 0)) {
                textPixels.push({
                    x: x,
                    y: y
                });
                console.log(textPixels.length);
            }
        }
    }
    /*creating a rectangle and then reading its pixels*/
    /*textCtx.fillStyle = renderer.backgroundColor;*/
    /*console.log(textCtx.backgroundColor);*/
    /*textCtx.viewport(0, 0, textCtx.width, textCtx.height);*/

    /*textCtx.readPixels(0, 0, textCtx.width, fontSize, textCtx.RGBA, textCtx.UNSIGNED_BYTE, imageData);*/
    /*console.log(imageData);*/

    /* for (let i = imageData.length; i >= 0; i -= 4) {
         if (imageData[i] != 0) {
             let x = (i / 4) % textCtx.width;
             let y = Math.floor(Math.floor(i / textCtx.width) / 4);

             if ((x && x % 6 == 0) && (y && y % 6 == 0))
                 textPixels.push({
                     x: x,
                     y: y
                 });

         }console.log(textPixels);
     }*/
}

/*We need this text display "Welcome to my Webpage display, Resizing will be needed depending on the viewport size*/
function resizeText() {
    htmlText.style.fontSize = fontSize+'px';
    htmlText.style.height = fontSize+'px';
    htmlText.style.color = '#ffffff';
    htmlText.style.marginTop = '25%';
}

/*don't comment, need this to call resize(), depending on the viewport size*/
window.addEventListener('resize', resize);
function resize() {
    width = window.innerWidth;
    height = h;
    /*Simply scale the font-size with a factor. Lets say your canvas default size is 1000 pixels and the font size is 80 pixels. That will create a relationship of:ratio = 80 / 1000 = 0.08. That will create a relationship of:
ratio = 80 / 1000 = 0.08*/
    fontSize = width*0.14;

    if (fontSize > 100) fontSize = 100;
    yOffset = height*0.6 - (fontSize/2);

    /*rendering the canvas with specified width and height*/
    renderer.resize(width, height);

    resizeText();
    sampleCanvas();
}

/*WebFont.load({
    google: {
        families: ['Luckiest Guy'],
        urls: [
            'https://fonts.googleapis.com/css?family=Luckiest+Guy'
        ]
    },
    active: begin
});*/
begin();
// /*window.addEventListener('load', init);*/
/*})();//close iffy*/

