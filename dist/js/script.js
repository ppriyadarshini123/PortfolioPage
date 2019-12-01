/*import * as PIXI from 'pixi.js';*/

(function(){

    let stage = new PIXI.Container();
    let renderer = PIXI.autoDetectRenderer(window.innerWidth-4, window.innerHeight-4, {transparent: true});
    let _stars = [], _glows = [];
    let _mouseX = window.innerWidth*0.5, _mouseY = window.innerHeight*0.5, _starInterval;
    let _nextStar = 0, _nextGlow = 0;
    let width, height, fontSize, textPixels, yOffset;
    let textCanvas, textCtx;
    let htmlText = document.getElementById("html-text");

    let percent = 0;
    document.body.appendChild(renderer.view);



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

        // render the stage
        renderer.render(stage);
    }

// canvas
    function initCanvas() {
        textCanvas = document.getElementById('text');
        textCtx = textCanvas.getContext('2d');
    }

    function sampleCanvas() {
        textCanvas.style.width = width + 'px';
        textCanvas.style.height = fontSize + 'px';
        textCanvas.style.marginTop = -(fontSize/2) + 'px';
        textCanvas.style.backgroundColor = '#197780';
        textCanvas.width = width;
        textCanvas.height = fontSize;
        textCtx.textAlign = 'center';
        textCtx.textBaseline = 'top';
        textCtx.font = fontSize + 'px "Luckiest Guy"';
        textCtx.fillStyle = '#197780';
        textCtx.clearRect(0, 0, width, fontSize);
        textCtx.fillText('Welcome to my Webpage', 0, 0);

        let pix = textCtx.getImageData(0, 0, width, fontSize).data;
        textPixels = [];
        for (let i = pix.length; i >= 0; i -= 4) {
            if (pix[i] != 0) {
                let x = (i / 4) % width;
                let y = Math.floor(Math.floor(i / width) / 4);
                if ((x && x % 6 == 0) && (y && y % 6 == 0)) textPixels.push({
                    x: x,
                    y: y
                });
            }
        }
    }

  /*  function resizeText() {
        htmlText.style.fontSize = fontSize+'px';
        htmlText.style.height = fontSize+'px';
        htmlText.style.color = '#ffffff';
        htmlText.style.marginTop = -(fontSize/2)+'px';
    }*/



    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        fontSize = width*0.14;
        if (fontSize > 100) fontSize = 100;
        yOffset = height*0.6 - (fontSize/2);
        renderer.resize(width, height);
       /* resizeText();*/
        sampleCanvas();
    }
    function begin() {
        resize();
        requestAnimationFrame( animate );
    }
    function init(){
        initCanvas();
        begin();
       /* window.addEventListener('resize', resize);*/
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


    }
    WebFont.load({
            google: {
                families: ['Luckiest Guy']
            },
            active: begin
        });
    window.addEventListener('load', init);
})();//close iffy

