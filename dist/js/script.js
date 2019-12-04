/*import * as PIXI from 'pixi.js';*/

/*
(function(){
*/

let stage = new PIXI.Container();
/*let renderer = PIXI.autoDetectRenderer(window.innerWidth-4, window.innerHeight-4, {view: document.getElementById("dispCnv")}, {transparent: false}, {backgroundColor: #197780}, {clearBeforeRender: true});*/
let h = window.innerHeight - (1/5*window.innerHeight);
let renderer = PIXI.autoDetectRenderer(window.innerWidth, h,{transparent: true});
renderer.view.

let _stars = [], _glows = [];
let _mouseX = window.innerWidth*0.5, _mouseY = window.innerHeight*0.5, _starInterval;
let _nextStar = 0, _nextGlow = 0;
let width, height, fontSize, textPixels, yOffset;
let textCanvas, webGlCtx;
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

let textures = [
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-blue.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-orange.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-pink.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-green.png"),
    PIXI.Texture.from("/dist/imgs/unoptimized/neon-star-purple.png")
]

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
}
// canvas
/*Creates one more canvas*/
/*function initCanvas() {
    textCanvas = document.getElementById("dispCnv");
    webGlCtx = textCanvas.getContext("webgl");

}*/

/*function sampleCanvas() {
    textCanvas.style.width = width + 'px';
    textCanvas.style.height = fontSize + 'px';
    textCanvas.style.marginTop = -(fontSize/2) + 'px';
    textCanvas.width = width;
    textCanvas.height = fontSize;
    textCtx.textAlign = 'center';
    textCtx.textBaseline = "top";
    textCtx.font = fontSize+'px "Luckiest Guy"';
    textCtx.fillStyle = '#eee';
    textCtx.clearRect(0, 0, width, fontSize);

    textCtx.fillText('IT DEPENDS', width / 2, 0);

    var pix = textCtx.getImageData(0, 0, width, fontSize).data;
    textPixels = [];
    for (var i = pix.length; i >= 0; i -= 4) {
        if (pix[i] != 0) {
            var x = (i / 4) % width;
            var y = Math.floor(Math.floor(i / width) / 4);

            if ((x && x % 6 == 0) && (y && y % 6 == 0)) textPixels.push({
                x: x,
                y: y
            });
        }
    }
}*/

/*This gives an extra "Welcome to my Webpage display, therefore comenting, No resizing needed in my project therefore, not needed*/
/*function resizeText() {
    htmlText.style.fontSize = fontSize+'px';
    htmlText.style.height = fontSize+'px';
    htmlText.style.color = '#ffffff';
    htmlText.style.marginTop = -(fontSize/2)+'px';
}*/


/*window.addEventListener('resize', resize);*/
function resize() {
    /*width = window.innerWidth;
    height = 932;*/
    width = window.innerWidth;
    height = h;

    /*Simply scale the font-size with a factor. Lets say your canvas default size is 1000 pixels and the font size is 80 pixels. That will create a relationship of:ratio = 80 / 1000 = 0.08. That will create a relationship of:
ratio = 80 / 1000 = 0.08*/
    fontSize = width*0.14;

    if (fontSize > 100) fontSize = 100;
    yOffset = height*0.6 - (fontSize/2);

    /*position the webGL canvas*/
    renderer.backgroundColor = 197780;
    /*renderer.style.width = "100%";*/
    /*renderer.view.style.position = "absolute";*/
    /*renderer.view.style.display = "block";*/

    /*rendering the canvas with specified width and height*/
    renderer.resize(width, height);

   /* resizeText();
    sampleCanvas();*/
}
WebFont.load({
    google: {
        families: ['Luckiest Guy']
    },
    active: begin
});
// /*window.addEventListener('load', init);*/
/*})();//close iffy*/

