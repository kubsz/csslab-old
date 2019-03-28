<h1>Using Flexbox in <span class="col3-font">CSS3</span></h1>
<p>Whether you're trying to align text, images, tables or any general element, flex is here for you! I'm going to be going through a variety of ways you can align elements with flexbox!</p>
<script>
    function containerButton(property, value) {
        $(".container-properties").append("<div class='codeblock col1 col2-font code-buttons " + property + "'><div class='numbers col3-font'><p>1</p></div><div class='code'><code><span class='col3-font'>" + property + "</span>: " + value + ";</code></div></div>");
    }
    function elementButton(property, value) {
        $(".element-properties").append("<div class='codeblock col1 col2-font code-buttons " + property + "'><div class='numbers col3-font'><p>1</p></div><div class='code'><code><span class='col3-font'>" + property + "</span>: " + value + ";</code></div></div>");
    }
</script>
<div class="flexbox-playground">
    <div class="container">
        <h2>Container Properties</h2>
        <div class="buttons container-properties">
            <script>
                containerButton("flex-direction", "row");
                containerButton("flex-direction", "row-reverse");
                containerButton("flex-direction", "column");
                containerButton("flex-direction", "column-reverse");
                containerButton("justify-content", "flex-start");
                containerButton("justify-content", "flex-end");
                containerButton("justify-content", "space-between");
                containerButton("justify-content", "center");
                containerButton("justify-content", "space-around");
                containerButton("align-items", "flex-start");
                containerButton("align-items", "flex-end");
                containerButton("align-items", "center");
                containerButton("align-items", "baseline");
                containerButton("align-items", "stretch");
                $(".container-properties").append("<div class=\"clear\"></div>")
            </script>
        </div>
        <h2>Element Properties</h2>
        <div class="buttons element-properties">
            <script>
                elementButton("align-self", "auto");
                elementButton("align-self", "flex-start");
                elementButton("align-self", "flex-end");
                elementButton("align-self", "center");
                elementButton("align-self", "baseline");
                elementButton("align-self", "stretch");
                elementButton("flex-grow", "0");
                elementButton("flex-grow", "1");
                elementButton("flex-grow", "2");
                elementButton("flex-grow", "3");
                elementButton("flex-grow", "4");
                elementButton("flex-grow", "5");
                elementButton("flex-grow", "6");
                elementButton("flex-grow", "7");
                elementButton("flex-grow", "8");
                elementButton("flex-grow", "9");

                $(".element-properties").append("<div class=\"clear\"></div>")
            </script>
        </div>
        <div class="showcase-container col3-border-color col1 col2-font">
            <div class="element col2"></div>
            <div class="element col2"></div>
            <div class="element element-choice col3"></div>
            <div class="element col2"></div>
            <div class="element col2"></div>
        </div>
    </div>
</div>
<!---->
<script>
    $(".code-buttons").click(function() {
        var property = $(this).text();
        property = property.slice(1, -1);
        var index = property.indexOf(": ");
        var p = property.substr(0, index);
        var v = property.substr(index + 1);
        v = v.slice(1, v.length);

        if(!$(this).hasClass("selected")) {
            $("." + p).removeClass("selected");
            $("." + p).removeClass("col3");
            $("." + p).addClass("col1");
            $("." + p).find('span:not(.edit-color)').addClass("col3-font");
            $("." + p).find('.numbers').addClass("col3-font");

            $(this).addClass("selected");

            $(this).addClass("col3");
            $(this).removeClass("col1");
            $(this).find('span:not(.edit-color)').removeClass("col3-font");
            $(this).find('.numbers').removeClass("col3-font");
        }

        switch(p) {
            case "flex-direction":
            case "justify-content":
            case "align-items":
                $(".showcase-container").css(p, v);
                console.log(property);
                break;
            case "align-self":
            case "flex-grow":
                $(".element-choice").css(p, v);
                console.log(property);
                break;
        }
    });
    $(".element").click(function() {
        $(".element").removeClass("element-choice");
        $(".element").removeClass("col3");
        $(".element").addClass("col2");
        $(this).addClass("element-choice");
        $(this).addClass("col3");
        $(this).removeClass("col2");
    });
</script>