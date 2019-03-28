<h1>Styling Fonts in <span class="col3-font bold">CSS3</span></h1>
<p>Text on a webpage can be manipulated in a multitude of ways. Whether you need to change the <span class="col3-font bold">font-family</span>, <span class="col3-font bold">font-size</span> or the <span class="col3-font bold">letter-spacing</span> - it can be done using CSS3. Changing font-family in CSS is defined by the property:</p>
<div class="codeblock col1 col2-font">
    <div class="numbers col3-font">
        <p>1</p>
    </div>
    <div class="code">
        <code><?php echo "<span class='col3-font'>font-family</span>: sans-serif;"; ?></code>
    </div>
</div>
<p>However, if you would like to use a custom font that is not a CSS3 preset font, you must first reference the font package in the <span class="col3-font bold">header</span> in the CSS document.</p>
<div class="codeblock col1 col2-font">
    <div class="numbers col3-font">
        <p>1</p>
        <p>2</p>
        <p>3</p>
        <p>4</p>
    </div>
    <div class="code">
        <code><?php echo "<span class='col3-font opacity'>@font-face</span> {"; ?> </code>
        <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>font-family</span>: Junebug;"; ?></code>
        <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>src</span>: url('http://example.com/custom-font.ttf'); "; ?></code>
        <code><?php echo "}"; ?></code>
    </div>
</div>
<h1>Choose the font used in css.<span class="col3-font">lab</span>!</h1>
<div class="showcase">
    <div class="box col1 col2-font" id="roboto">
        <p>Roboto</p>
    </div>
    <div class="box col1 col2-font" id="verdana">
        <p>Verdana</p>
    </div>
    <div class="box col1 col2-font" id="quicksand">
        <p>Quicksand</p>
    </div>
    <div class="box col1 col2-font" id="ubuntu">
        <p>Ubuntu</p>
    </div>
    <div class="box col1 col2-font" id="comic-sans-ms">
        <p>Comic Sans MS</p>
    </div>
    <div class="clear"></div>
</div>
<script>
    $(".box").click(function() {
        var id = this.id;
        var font = $("#" + id + " > p").text();
        console.log("font-family:", "'" + font + "'")
        $("html > head").append("<style> #styling-fonts, .sidenav { font-family:'" + font + "'} </style>");
        setCookie("font", font, "7");
        $(".box").removeClass("col3");
        $(".box").addClass("col1");
        $(this).addClass("col3");
        $(this).removeClass("col1");
    });
    function codebutton(property, value) {
        if(property == "color")
            $("#code-button-showcase").append("<div class='codeblock col1 col2-font code-buttons'><div class='numbers col3-font'><p>1</p></div><div class='code'><code><span class='col3-font'>" + property + "</span>: <span class='edit-color'>" + value + "</span>;</code></div></div>");
        else
            $("#code-button-showcase").append("<div class='codeblock col1 col2-font code-buttons'><div class='numbers col3-font'><p>1</p></div><div class='code'><code><span class='col3-font'>" + property + "</span>: " + value + ";</code></div></div>");
    }
</script>
<p>Here are some more properties that can be used to style fonts:</p>
<div class="showcase" id="code-button-showcase">
    <script>
        codebutton("font-size", "24px");
        codebutton("color", $(".col3-font").css("color"));
        codebutton("font-weight", "700");
        codebutton("letter-spacing", "5px");
        codebutton("text-transform", "uppercase");
        codebutton("text-shadow", "rgb(0, 0, 0) 1px 1px");
        codebutton("text-align", "center");
        codebutton("text-decoration", "underline");
        codebutton("word-spacing", "5px");
        codebutton("opacity", "0.5");
        $("#code-button-showcase").append("<div class=\"clear\"></div>")
    </script>
</div>

<p class="example-text col1-border-color">The quick brown dean jumps over the lazy dog</p>

<script>
    $(".code-buttons").click(function() {
        var property = $(this).text();
        property = property.slice(1, -1);
        var index = property.indexOf(": ");
        var p = property.substr(0, index);
        var v = property.substr(index + 1);
        v = v.slice(1, v.length);

        if($(".example-text").css(p).includes(v)) {
            switch (p) {
                case "font-size":
                    $(".example-text").css(p, "20px");
                    break;
                case "color":
                    $(".example-text").css(p, "#000");
                    break;
                case "font-weight":
                    $(".example-text").css(p, "normal");
                    break;
                case "text-transform":
                    $(".example-text").css(p, "lowercase");
                    break;
                case "letter-spacing":
                case "word-spacing":
                    $(".example-text").css(p, "0");
                    break;
                case "text-align":
                    $(".example-text").css(p, "left");
                    break;
                case "text-decoration":
                    $(".example-text").css(p, "none");
                    break;
                case "text-shadow":
                    $(".example-text").css(p, "#000 0px 0px");
                    break;
                case "opacity":
                    $(".example-text").css(p, "1");
                    break;
            }
            $(this).addClass("col1");
            $(this).removeClass("col3");
            $(this).find('span:not(.edit-color)').addClass("col3-font");
            $(this).find('.numbers').addClass("col3-font");
        } else {
            $(".example-text").css(p, v);
            $(this).removeClass("col1");
            $(this).addClass("col3");
            $(this).find('span:not(.edit-color)').removeClass("col3-font");
            $(this).find('.numbers').removeClass("col3-font");
        }
    });
</script>
<h1>Property Values</h1>
<p>Obviously these values aren't the only ones you can use - it's all up to your imagination! </p>


    <?php
    if(isset($_COOKIE['font'])) {
        $font = strtolower(str_replace(' ', '-', $_COOKIE['font']));
        echo "<script>$('#$font').addClass('col3'); </script>";
        echo "<script>$('#$font').removeClass('col1'); </script>";
    } else {
        echo "<script>$('#roboto').addClass('col3'); </script>";
        echo "<script>$('#roboto').removeClass('col1'); </script>";
    }
    ?>

