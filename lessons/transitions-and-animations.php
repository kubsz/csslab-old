<h1>Transitions and Animations in <span class="col3-font bold">CSS3</span></h1>
<p>Transitions and animation can be used easier and better than ever now with <span class="col3-font bold">HTML5</span> and <span class="col3-font bold">CSS3</span>. Animations in CSS can be created using the <span class="col3-font bold">@keyframes</span> selector. There are a bunch of CSS animations you can check out underneath, with the source code. Feel free to use the code if you'd like.</p><br>
<div class="animation-buttons">
    <div class="animation-button col2-font active-animation">rotate</div>
    <div class="animation-button col1 col2-font">rotate scale</div>
    <div class="animation-button col1 col2-font">flip</div>
    <div class="animation-button col1 col2-font">flip scale</div>
    <div class="animation-button col1 col2-font">shadow pop</div>
    <div class="animation-button col1 col2-font">pulse</div>
    <div class="animation-button col1 col2-font">shake</div>
    <div class="animation-button col1 col2-font">jello</div>
    <div class="animation-button col1 col2-font">bounce</div>
    <div class="animation-button col1 col2-font">roll in</div>
</div>
<div class="animation-container col1 col2-font">
    <div class="code-container">
        <h2>- stylesheet<span class="col3-font bold">.css</span> -</h2>
        <div class="code-margin col2 col1-font">
            <div class="numbers col3-font">
                <p>1</p>
                <p>2</p>
                <p>3</p>
                <p>4</p>
                <p>5</p>
                <p>6</p>
                <p>7</p>
                <p>8</p>
                <p>9</p>
                <p>10</p>
                <p>11</p>
            </div>
            <div class="code">
                <code><span class="col3-font">@keyframes</span> <span class="col3-font bold">rotate</span> {</code><code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="col3-font">transform</span>: rotateZ(0);</code><code>&nbsp;&nbsp;&nbsp;&nbsp;}</code><code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code><code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="col3-font">transform</span>: rotateZ(360deg);</code><code>&nbsp;&nbsp;&nbsp;&nbsp;}</code><code>}</code><code>.<span class="col3-font">rotate</span> {</code><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="col3-font">animation</span>: rotate 1s ease;</code><code>}</code>
            </div>
        </div>
    </div>
    <div class="animation-box col2 col1-font">
        <div id="animation-element" class="col3 col2-font"></div>
    </div>
</div>
<script>
    // $(".animation-button").css("height", $(".animation-button").css("width"));

    $(".animation-button").click(function() {
        var animation = $(this).text().replace(" ", "-");
        $(".animation-button").removeClass("active-animation");
        $(".animation-button").addClass("col1");
        $(this).addClass("active-animation");
        $(this).removeClass("col1");
        var elem = $("#animation-element");
        resetElement();
        setTimeout(function() {
            elem.addClass(animation + "-class");
            switch (animation) { //dont ask
                case "rotate":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: rotateZ(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: rotateZ(360deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                case "rotate-scale":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1) rotateZ(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;50% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1.5) rotateZ(360deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1) rotateZ(360deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                case "flip":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: rotateX(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: rotateX(-180deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                case "flip-scale":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1) rotateX(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;50% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1.5) rotateX(-90deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1) rotateX(-180deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                case "shadow-pop":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>box-shadow</span>: 0 0 #2c3137, 0 0 #2c3137, 0 0 #2c3137, 0 0 #2c3137, 0 0 #2c3137, 0 0 #2c3137, 0 0 #2c3137, 0 0 #2c3137;;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(0) translateY(0);;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>box-shadow</span>: 1px -1px #2c3137, 2px -2px #2c3137, 3px -3px #2c3137, 4px -4px #2c3137, 5px -5px #2c3137, 6px -6px #2c3137, 7px -7px #2c3137, 8px -8px #2c3137;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(-8px) translateY(8px);</code>" +
                    "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                case "pulse":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform-origin</span>: center center;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;10% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(.91);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-in;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;17% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(.98);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;33% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(.87);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-in;</code>" +                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;45% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale(.1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                    case "shake":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0%,</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;10%,</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;30%,</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;50%,</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;70% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(-10px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;20%,</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;40%,</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;60% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(10px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;80% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(8px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;90% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(-8px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                    case "jello":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(1, 1, 1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;30% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(1.25, 0.75, 1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;40% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(0.75, 1.25, 1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;50% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(1.15, 0.85, 1));</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;65% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(0.95, 1.05, 1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;75% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(1.05, 0.95, 1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: scale3d(1, 1, 1);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                    case "bounce":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(-500px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-in;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>opacity</span>: 0;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;38% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>opacity</span>: 1;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;55% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(-65px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-in;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;72% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;81% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(-28px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-in;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;90% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;95% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(-8px);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-in;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateY(0);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation-timing-function</span>: ease-out;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
                    case "roll-in":
                    $(".code").html("<code><span class='col3-font'>@keyframes</span> <span class='col3-font bold'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;0% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(-800px) rotate(-540deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>opacity</span>: 0;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;100% {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>transform</span>: translateX(0) rotate(0deg);</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>opacity</span>: 1;</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;}</code>" +
                        "<code>}</code>" +
                        "<code>.<span class='col3-font'>" + animation + "</span> {</code>" +
                        "<code>&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>animation</span>: " + $("." + animation + "-class").css("animation-name") + " 1s ease;</code>" +
                        "<code>}</code>");
                    $(".numbers").html("");
                    for(i = 1; i <= $(".code code").length; i++)
                        $(".numbers").append("<p>" + i + "</p>");
                    break;
            }
        }, 10)

    });
    function resetElement() {
        $("#animation-element").removeClass();
        $("#animation-element").addClass("col3");
        $("#animation-element").addClass("col2-font");
    }
</script>