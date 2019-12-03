/*import * as PIXI from 'pixi.js';*/

(function(){

    let stage = new PIXI.Container();
    /*let renderer = PIXI.autoDetectRenderer(window.innerWidth-4, window.innerHeight-4, {view: document.getElementById("dispCnv")}, {transparent: false}, {backgroundColor: #197780}, {clearBeforeRender: true});*/

    let renderer = PIXI.autoDetectRenderer(document.getElementsByTagName("canvas").width, document.getElementsByTagName("canvas").height, {transparent: true});
    let _stars = [], _glows = [];
    let _mouseX = window.innerWidth*0.5, _mouseY = window.innerHeight*0.5, _starInterval;
    let _nextStar = 0, _nextGlow = 0;
    let width, height, fontSize, textPixels, yOffset;
    let textCanvas, textCtx;
    let htmlText = document.getElementById("html-text");

    let percent = 0;
    /*black one below*/
   /* renderer.backgroundColor = 197780;
    renderer.view = document.getElementsByTagName("canvas")[0];*/
    console.log(renderer.view);
    document.body.getElementsByTagName('canvas')[0].append(renderer.view);
    /*renderer.render(stage);*/



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
        textCanvas = document.getElementById('dispCnv');
        /*textCanvas.append(renderer.view);*/
        textCtx = textCanvas.getContext('2d');
        /*textCtx = renderer.context;*/
       // /* console.log(textCtx);*/

    }

    function sampleCanvas() {
        /*textCanvas.style.width = width + 'px';
        textCanvas.style.height = fontSize + 'px';
        textCanvas.style.marginTop = -(fontSize/2) + 'px';
        textCanvas.style.backgroundColor = '#197780';
        textCanvas.width = width;
        textCanvas.height = fontSize;*/

       /* textCanvas.style.backgroundColor = '#197780';
        textCanvas.style.width = '100%';
        textCanvas.style.height = 'calc(100vh-20%)';*/

        /*textCtx.textAlign = 'center';
        textCtx.textBaseline = 'top';
        textCtx.font = fontSize + 'px "Luckiest Guy"';
        textCtx.fillStyle = '#197780';*/
        /*textCtx.clearRect(0, 0, width, fontSize);
        textCtx.fillText('Welcome to my Webpage', 0, 0);*/



        //green one on top, canvas
        //green rectangle behind
        /*Getting imagedata from Canvas: checked code from developer.mozilla.org*/
        textCtx.fillStyle = "#197780";
        textCtx.rect(0,0, textCanvas.width, textCanvas.height);
        textCtx.fill();
        //text infront
        textCtx.font = fontSize + 'vw "Luckiest Guy"';
        console.log(fontSize);
        textCtx.fillStyle = "#ffffff";
        textCtx.fillText("Welcome to my Webpage", textCanvas.width/2 - 400, 500);

        /*stage.render(renderer);
        stage.render(textCanvas);*/
        //tried
        /*renderer.view(textCtx);*/
        /*textCanvas = renderer.view;
        textCtx = renderer.context;*/

        /* The following code gets the pixels to create the hairy text*/
        let pix = textCtx.getImageData(0, 0, textCanvas.width, textCanvas.height).data;
        textPixels = [];
        for (let i = pix.length; i >= 0; i -= 4) {
            /*we are checking every alpha pixel in the array, if it isn't zero that means it is one of the text pixels*/
            if (pix[i] != 0) {
                /*get the x position*/
                let x = (i / 4) % textCanvas.width;
                /*get the y position*/
                let y = Math.floor(Math.floor(i / textCanvas.width) / 4);

                /*we don't want every pixel for this visualization, we'll just get every 4th pixel in the x and y direction */
                if ((x && x % 6 == 0) && (y && y % 6 == 0)) textPixels.push({
                    x: x,
                    y: y
                });
            }
        }
        /*document.body.appendChild(textCtx);*/
        /*textCtx.fill(renderer.view);*/
        /*console.log(renderer.view);*/
        /*renderer.render(pix);*/
        /*textCtx = renderer.context;*/
    }

    /*This gives an extra "Welcome to my Webpage display, therefore comeenting*/
  /*  function resizeText() {
        htmlText.style.fontSize = fontSize+'px';
        htmlText.style.height = fontSize+'px';
        htmlText.style.color = '#ffffff';
        htmlText.style.marginTop = -(fontSize/2)+'px';
    }
*/


    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        /*fontSize = width*0.14;*/
        /*For desktop size, fontSize should be 3.9vw*/
        fontSize = 3.9;
        /*if (fontSize > 100) fontSize = 100;*/
        yOffset = height*0.6 - (fontSize/2);
        renderer.resize(width, height);
        /*resizeText();*/
        sampleCanvas();
    }
    function begin() {
        resize();
        requestAnimationFrame( animate );
    }

    function init(){
        initCanvas();
        begin();
        window.addEventListener('resize', resize);
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


        /*stage.addChild(renderer.view);*/
        /*textCtx.fill(renderer.view);*/

        /*renderer.addChild(textCtx);*/
        /*textCtx.fill(renderer.view);*/
        /*renderer.render(textPixels);*/
        /*stage.render(renderer.view);*/
        /*console.log(renderer.view);*/
       /* document.body.getElementsByTagName('canvas')[0].appendChild(renderer.view);*/


    }
    WebFont.load({
            google: {
                families: ['Luckiest Guy']
            },
            active: begin
        });
    window.addEventListener('load', init);
})();//close iffy

