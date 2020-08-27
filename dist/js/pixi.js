/*import * as PIXI from 'pixi.js';*/


(function(){

    let stage = new PIXI.Container();
    let h;

    //mobile
    enquire.register("screen and (max-width:360px)", {
        match: function(){
            h = window.innerHeight - (65/100*window.innerHeight);/*Keep top space for Menu*/

        },/*match*/
        unmatch: function(){


        }/*unmatch*/
    });/*enquire.register*/

    //tablet
    enquire.register("screen and (min-width:361px) and (max-width: 768px)", {
        match: function(){
            h = window.innerHeight - (55/100*window.innerHeight);/*Keep top space for Menu*/
        },/*match*/
        unmatch: function(){


        }/*unmatch*/
    });/*enquire.register*/

    //laptop
    enquire.register("screen and (min-width: 769px) and (max-width: 1200px)", {
        match: function(){
            h = window.innerHeight - (20/100*window.innerHeight);/*Keep top space for Menu*/
        },/*match*/
        unmatch: function(){
        }/*unmatch*/
    });/*enquire.register*/

    //desktop
    enquire.register("screen and (min-width:1200px)", {
        match: function(){
            h = window.innerHeight - (25/100*window.innerHeight);/*Keep top space for Menu*/
        },/*match*/
        unmatch: function(){

        }/*unmatch*/
    });/*enquire.register*/

    /*This helper function will automatically detect which renderer you should be using.
    WebGL is the preferred renderer as it is a lot faster. If WebGL is not supported by the browser then
    this function will return a canvas renderer*/
    let renderer = PIXI.autoDetectRenderer({width: window.innerWidth, height: h,transparent: false, forceCanvas: true});
    renderer.backgroundColor = 0x197780;

    let _stars = [], _glows = [];
    let _mouseX = window.innerWidth*0.5, _mouseY = window.innerHeight*0.5, _starInterval;
    let _nextStar = 0, _nextGlow = 0;
    let width, height, fontSize, textPixels, yOffset;
    let textCanvas, textCtx;
    let htmlText = document.getElementById("html-text");
    let percent = 0;
    let textures = [
        PIXI.Texture.from("/dist/imgs/optimized/neon-star-lightblue-100x102.png"),
        PIXI.Texture.from("/dist/imgs/optimized/neon-star-brown-100x102.png"),
        PIXI.Texture.from("/dist/imgs/optimized/neon-star-lightpink-100x102.png"),
    ];

    /**
     * @name begin
     * @desc begin animation
     */
    function begin() {
        resize();
        requestAnimationFrame( animate );
    }/*begin*/


    /**
     * @name createStar
     * @desc creates star on stage
     * @param text
     */
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
    }/*createStar(text)*/

    /**
     * @name createGlow
     * @desc Creates glow on stage
     */
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
    }/*createGlow()*/

    /**
     * @name launchStar()
     * @desc launches stars
     */
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
    }/*launchStar()*/

    /**
     * @name launchGlow
     * @desc launches glow star
     * @param i
     */
    function launchGlow(i) {
        let glow = _glows[_nextGlow];
        _nextGlow = _nextGlow == _glows.length-1 ? 0 : _nextGlow + 1;
        glow.launched = true;
        glow.alpha = 0.1 + Math.random()*0.2;
        glow.position.x = Math.random()*width;
        glow.position.y = Math.random()*height;

        glow.vx = 0.5 + Math.random()*0.5;
        glow.vy = -0.5 + Math.random()*-0.5;
    }/*launchGlow(i)*/

    /**
     * @name launchStarBatch()
     * @desc launches batch of star
     */
    function launchStarBatch() {
        for (let i = 0; i < 6; i++) {
            launchStar();
        }/*for*/
    }/*launchStarBatch()*/

    /**
     * @name animate()
     * @desc Animate the stars
     */
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
            }/*if*/
        }/*for*/

        for (let i = 0; i < _glows.length; i++) {
            if(_glows[i].launched) {
                _glows[i].position.x += _glows[i].vx;
                _glows[i].position.y += _glows[i].vy;

                if (_glows[i].position.y < 0) {
                    _glows[i].position.x = Math.random()*width;
                    _glows[i].position.y = height + Math.random()*50;
                }/*if*/
                if (_glows[i].position.x > width) {
                    _glows[i].position.x = -Math.random()*100;
                    _glows[i].position.y = height*Math.random();
                }/*if*/
            }/*if*/
        }/*for*/

        // render the stage
        renderer.render(stage);
    }// canvas

    /**
     * @name initCanvas
     * @desc Creates one more canvas
     */
    function initCanvas() {
        /*commented new*/
        textCanvas = renderer.view;
        if(textCanvas.getContext('webgl')||textCanvas.getContext('webgl2'))
        {
            if(textCanvas.getContext('webgl'))
                textCanvas.getContext('webgl').disable(textCanvas.getContext('webgl').DITHER);
            if(textCanvas.getContext('webgl2'))
            textCanvas.getContext('webgl2').disable(textCanvas.getContext('webgl2').RENDERBUFFER_ALPHA_SIZE);
        }/*if*/
        textCtx = textCanvas.getContext("2d");
        document.querySelector('#home').appendChild(renderer.view);
    }/*initCanvas()*/

    /**
     * @name sampleCanvas()
     * @desc create canvas and populate the stars
     */
    function sampleCanvas() {
        textCtx.fillStyle = "#197780";/*the green background color*/
        textCtx.fillRect(window.innerWidth/4,0, window.innerWidth/2, window.innerHeight);/*This rectangle contains the stars*/
        let pix = textCtx.getImageData(0,0, window.innerWidth, fontSize).data;/*returns an ImageData object representing the underlying pixel data for a specified portion of the canvas. RGBA color value is specified with RGBA. The alpha parameter is a number between 0 (fully transparent) and 255(fully opaque)*/

        textPixels = [];

        for (let i = pix.length; i >= 0; i -= 4) {
            if (pix[i] != 0) {
                let x = (i / 4) % window.innerWidth;
                let y = Math.floor(Math.floor(i / window.innerWidth) / 4);
                if ((x && x % 6 == 0) && (y && y % 6 == 0)) {
                    textPixels.push({
                        x: x,
                        y: y
                    });/*if*/
                }/*if*/
            }/*if*/
        }/*for*/
    }/*sampleCanvas()*/

    /**
     * @name resizeText
     * @desc We need this text display "Welcome to my Webpage display, Resizing will be needed depending on the viewport size
     */
    function resizeText() {
        htmlText.style.fontSize = fontSize+'px';
        htmlText.style.height = fontSize+'px';
        htmlText.style.color = '#ffffff';

        /*For mobile*/
        enquire.register("screen and (max-width:360px)", {
            match: function () {
                htmlText.style.position = 'absolute';
                htmlText.style.top = '43%';
                htmlText.style.textAlign = 'center';
            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        /*For tablet*/
        enquire.register("screen and (min-width:361px) and (max-width: 768px)", {
            match: function () {
                htmlText.style.position = 'absolute';
                htmlText.style.top = '25%';
                htmlText.style.textAlign = 'center';
            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        /*For laptop*/
        enquire.register("screen and (min-width:769px) and (max-width:1200px)", {
            match: function () {
                htmlText.style.position = 'absolute';
                htmlText.style.top = '52%';
                htmlText.style.textAlign = 'center';
            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        /*For Desktop*/
        enquire.register("screen and (min-width:1200px)", {
            match: function () {
                htmlText.style.position = 'absolute';
                htmlText.style.top = '38%';
                htmlText.style.textAlign = 'center';
            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/
    }/*resizeText()*/

    /**
     * @name resize()
     * @desc resize the canvas
     */
    function resize() {
        width = window.innerWidth;
        height = h;
        /*Simply scale the font-size with a factor. Lets say your canvas default size is 1000 pixels and the font size is 80 pixels. That will create a relationship of:ratio = 80 / 1000 = 0.08. That will create a relationship of:
    ratio = 80 / 1000 = 0.08*/
        fontSize = width*0.14;

        /*For mobile*/
        enquire.register("screen and (max-width:360px)", {
            match: function () {
                fontSize = 25;
            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        /*For tablet*/
        enquire.register("screen and (min-width:361px) and (max-width: 768px)", {
            match: function () {
                fontSize = 25;

            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        /*For laptop*/
        enquire.register("screen and (min-width:769px) and (max-width:1200px)", {
            match: function () {
                fontSize = 47;

            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        /*For desktop*/
        enquire.register("screen and (min-width:1200px)", {
            match: function () {
                fontSize = 69;

            },/*match*/
            unmatch: function () {

            }/*unmatch*/
        });/*enquire.register*/

        yOffset = height*0.6 - (fontSize/2);

        /*rendering the canvas with specified width and height*/
        renderer.resize(width, height);

        resizeText();
        sampleCanvas();
    }/*resize()*/

    /**
     * @Name bindBtns()
     * @desc Starting the Confetti display of stars
     */
    function bindBtns()
    {
        initCanvas();
        begin();

        /*don't comment, need this to call resize(), depending on the viewport size*/
        window.addEventListener('resize', resize);

        //create stars
        for (let i = 0; i < 600; i++) {
            createStar(textures[i%5]);
        }/*for*/

        for (let i = 0; i < 100; i++) {
            createGlow();
        }/*for*/

        for (let i = 0; i < 100; i++) {
            setTimeout(function() {
                launchGlow();
            }, 10);
        }/*for*/
    }/*bindBtns()*/


    /**
     * @name init
     * @desc Initializing function
     */
    function init() {
        bindBtns();
    }//end init

    window.onload = init;
})();//close iffy

