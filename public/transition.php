<!DOCTYPE html>
<html>
<head>
    <title>Demo 1 - Menucool Image Slider</title>
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="div1"><h2>Demo 1 - Menucool Image Slider</h2>
        <p>Demos: <a href="demo1.html" class="current">1</a><a href="demo2.html">2</a><a href="demo3.html">3</a><a href="demo4.html">4</a>
        <a href="demo5.html">5</a><a href="demo6.html">6</a><a href="demo7.html">7</a><a href="demo8.html">8</a></p>
    </div>
    <div id="sliderFrame">
        <div id="ribbon"></div>
        <div id="slider">
            <a href="http://www.menucool.com/jquery-slider" target="_blank">
                <img src="images/image-slider-1.jpg" alt="Welcome to Menucool.com" />
            </a>
            <img src="images/image-slider-2.jpg" alt="" />
            <img src="images/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
            <img src="images/image-slider-4.jpg" alt="#htmlcaption" />
            <img src="images/image-slider-5.jpg" />
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div>

    <div class="div2">
        <ul>
            <li><b>Copy & Paste</b>: Copy source code and paste it into your own page. All source codes/files are within the <i>demo1.html</i> and the "<i>\themes\1\</i>" folder</li>
            <li><b>Transitional effects</b>: You can choose from 17 transitional effects via the <i>sliderOptions</i> in the <em>js-image-slider.js</em>. 
            Visit <a href="http://www.menucool.com/slider/javascript-image-slider-demo1" target="_blank">Online Demo 1</a> to see how each effect looks and how to customize</li>
            <li><b>Navigation Bullets</b>: Navigation bullets are created automatically by the script of the image slider.
            <p>The CSS class selector <span class="green">.navBulletsWrapper</span> can be used to change the nav bullets' positon and style.</p>
            <p>If you don't need the Navigation Bullets, just hide them via CSS:<br /><span class="green cn">div.navBulletsWrapper  {display:none;}</span></p>
            </li>
            <li><b>HTML Caption</b>: Captions are set through each slide image's <span class="cn">alt</span> attribute. If the caption contains HTML content, 
            you can put the content inside a DIV or SPAN element(usually styled as <span class="cn">display:none</span>), give the element an ID,
            and set the <span class="cn">alt</span> as "#(the content container's id)". For example: <span class="cn">alt="#caption4"</span></li>
            <li><b>Free to use</b>: The image slider shown in this demo is for free. All other demos in this download package needs purchasing a license as they include advanced features such as thumbnail support, video support, etc.            
            </li>
        </ul>
    </div>
</body>
</html>
