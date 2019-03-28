<h1>Utilizing Colors in <span class="col3-font">CSS3</span></h1>
<p>There are many ways of choosing the right color in CSS, you can use the <span class="col3-font bold">pre-defined</span> names in CSS3:</p>
<div class="showcase" id="color-showcase">
    <script>
        function showColor(color) {
            $("#colors #color-showcase").append("<div class='color-row col1 col2-font col4-border-color'><div style='background:" + color + "' class=\"col4-border-color\"></div><code>" + color + "</code></div>");
        }
        showColor('aqua');
        showColor('azure');
        showColor('blue');
        showColor('crimson');
        showColor('chocolate');
        showColor('coral');
        showColor('darkgreen');
        showColor('fuchsia');
        showColor('indigo');
        showColor('hotpink');
        showColor('lime');
        showColor('magenta');
        showColor('maroon');
        showColor('midnightblue');
        showColor('palevioletred');
        showColor('red');
        showColor('royalblue');
        showColor('yellow');
        showColor('teal');
        showColor('springgreen');
        showColor('blueviolet');
        showColor('cornflowerblue');
        showColor('darkgoldenrod');
        showColor('darkolivegreen');
        showColor('darkslategrey');
        showColor('deeppink');
        showColor('forestgreen');
        showColor('gold');
        showColor('honeydew');
        showColor('lightseagreen');
        showColor('ivory');
        showColor('navy');
        showColor('olivedrab');
        showColor('rosybrown');
        showColor('seagreen');
        $("#colors #color-showcase").append("<div class=\"clear\"></div>")
    </script>
</div>
<h1><span class="col3-font bold">RGB</span> Values</h1>
<p>However, if none of these tickle your fancy, there are other ways to access more precise colors. <span class="col3-font">RGB</span> stands for 'Red Green Blue', and is used by parsing the intensity of each parameter to create a unique color. For example, <span class="col3-font bold">rgb(255,0,0)</span> would create red, there is only a red color, however <span class="col3-font bold">rgb(255,255,0)</span> will create yellow, because red and green mixed together creates yellow. We can also add an 'a' to the end of rgb to create the property 'rgba()' which will allow us to alter the opacity of the rgb value by parsing a decimal number between 0 and 1 through the 'a' parameter of the function.</p>
<div class="showcase rgb">
    <div class="color-output col1-border-color"><span>rgb(0, 0, 0)</span></div>
    <div class="bar-container">
        <input class="col4-border-color col1 slider" type="range" min="0" max="255" value="0" id="r">
        <input class="col4-border-color col1 slider" type="range" min="0" max="255" value="0" id="g">
        <input class="col4-border-color col1 slider" type="range" min="0" max="255" value="0" id="b">
        <span>R</span>
        <span>G</span>
        <span>B</span>
    </div>
</div>
<h1><span class="col3-font bold">HEX</span> Values</h1>
<div class="showcase hex">
    <div class="color-output col1-border-color"><span>#000000</span></div>
    <div class="bar-container">
        <input class="col4-border-color col1 slider" type="range" min="0" max="255" value="0" id="hexr">
        <input class="col4-border-color col1 slider" type="range" min="0" max="255" value="0" id="hexg">
        <input class="col4-border-color col1 slider" type="range" min="0" max="255" value="0" id="hexb">
        <span>RR</span>
        <span>GG</span>
        <span>BB</span>
    </div>
</div>
<script>
    var r = $("#r");
    var g = $("#g");
    var b = $("#b");
    var hexr = $("#hexr");
    var hexg = $("#hexg");
    var hexb = $("#hexb");

    $('.rgb input[type=range]').on('input', function () {
        var rval = r.val();
        var gval = g.val();
        var bval = b.val();
        $(".rgb .color-output span").html("rgb(" + rval + ", " + gval + ", " + bval + ")");
        $(".rgb .color-output").css("background", "rgb(" + rval + "," + gval + "," + bval + ")");
    });

    $('.hex input[type=range]').on('input', function () {
        var rhex = hexr.val();
        var ghex = hexg.val();
        var bhex = hexb.val();
        $(".hex .color-output span").html(rgb2hex("rgb(" + rhex + ", " + ghex + ", " + bhex + ")"));
        $(".hex .color-output").css("background", "rgb(" + rhex + "," + ghex + "," + bhex + ")");
    });

    function rgb2hex(rgb) {
        if (  rgb.search("rgb") == -1 ) {
            return rgb;
        } else {
            rgb = rgb.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/);
            function hex(x) {
                return ("0" + parseInt(x).toString(16)).slice(-2);
            }
            return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
        }
    }
    $(".color-output, .color-row > div").click(function() {
        color = $(this).css("background-color");
        console.log("color: " + color);
        setCookie("color", color, "7");
        $(".edit-color").html(color)
        $('html > head').append("<style> .col3 { background: " + color + "; } .col3-font { color: " + color + "; } .col3-border-color { border-color: " + color + " ;} #colors .bar-container > input::-webkit-slider-thumb { background: " + color + "; } ::selection { background: " + color + "; }</style>");
        $('html > head').append("<style> #dimension-units .table-row:nth-of-type(even) { background: " + color.replace(')', ', 0.3)').replace('rgb', 'rgba') + "; } </style>");
    })

</script>
