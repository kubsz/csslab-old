<h1>Margin, Padding and Borders in <span class="col3-font bold">CSS3</span></h1>
<p>Using <span class="col3-font bold">margins</span>, <span class="col3-font bold">padding</span> and <span class="col3-font bold">borders</span> are vital in styling a good looking webpage, whether its to create a page layout, styling a button or creating an animation, they can all be used in a variety of ways. One of the most important things to understand when learning CSS is the <span class="col3-font bold">Box Model</span>. It clearly displays the order in which margins, padding and borders work. The key thing to remember is that margins are ultimately on the outside of an element, padding on the inside and borders in between the two.
<div class="choice col4-border-color">
    <div class="choice-option col3-font col3-border-color">
        <p>CSS3 Box Model</p>
    </div>
    <div class="choice-option col1-font col4-border-color">
        <p>Example Page Design</p>
    </div>
    <div class="clear"></div>
</div>
<div class="showcase col1-border-color">
<script>
    $(".choice-option").click(function() {
        $(".choice-option").addClass("col4-border-color");
        $(".choice-option").removeClass("col3-border-color");
        $(".choice-option").find('p').removeClass("col3-font");
        $(".choice-option").find('p').addClass("col1-font");

        $(this).addClass("col3-border-color");
        $(this).removeClass("col4-border-color");
        $(this).find('p').addClass("col3-font");
        $(this).find('p').removeClass("col1-font");

        if( $(this).find('p').html() == "CSS3 Box Model")
            $("#margin-padding-and-borders .showcase").html("<div class='col3 col2-font' id='margin'><div class='col1 col2-font col2-border-color' id='padding'><div class='col3 col2-font' id='content'></div><span id='margin-text' class='col2-font'>Margin</span><span id='border-text' class='col1-font'>Border</span><span id='padding-text' class='col2-font'>Padding</span><span id='content-text' class='col2-font'>Content</span></div></div>");
        else
            $("#margin-padding-and-borders .showcase").html("<div class=\"nav col4 col2-font col3-border-color\"><div class=\"margined\"><div class=\"nav-logo\">LOGO</div><div class=\"nav-option col3-font\">Home</div><div class=\"nav-option\">About</div><div class=\"nav-option\">Store</div></div></div><div class=\"section\"><div class=\"margined\"><h1 class=\"col1-font\">Welcome to my website!</h1><p class=\"col1-font\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum tellus a orci mollis, sit amet auctor metus lobortis. Suspendisse ultricies erat in sagittis fermentum. Nunc commodo leo ac odio congue, vel aliquam dui aliquam. Sed sagittis nisi elit, id lacinia arcu dignissim nec. Cras faucibus ullamcorper augue at ultricies. Donec posuere, tortor at tristique ultrices, dui nulla vehicula massa, tempor viverra erat lectus nec nunc. Suspendisse accumsan erat sed leo laoreet, nec facilisis ligula tristique. Nunc bibendum velit sed erat eleifend commodo. In bibendum risus convallis venenatis pellentesque. Vestibulum nec laoreet nisi. Phasellus eget dignissim lorem, ut lacinia felis.</p><p class=\"col1-font\">Donec at ligula convallis, hendrerit mi quis, scelerisque nunc. Donec vitae malesuada mi. Vivamus aliquet orci lacus, quis egestas ipsum aliquam sed. Etiam elit nisi, auctor eu urna id, rutrum blandit massa. Suspendisse in viverra nisi. Vivamus vel venenatis arcu. Nulla facilisi. Donec finibus, leo eget tempor bibendum, odio sapien accumsan mi, et venenatis lorem risus nec odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eu mauris turpis. Mauris quis tortor nisi. Nulla convallis augue id ipsum blandit maximus. Sed quam magna, tristique sit amet purus fermentum, fermentum aliquam tortor. Integer tempus et nulla ut tempus. Duis vitae vulputate metus.</p><div class=\"clear\"></div></div></div><div class=\"footer col4 col3-border-color col2-font\"><div class=\"margined\"><div class=\"footer-option\">Contact Us</div><div class=\"footer-option\">Copyright 2019</div></div></div></div>");
    });
    $(".choice-option").click();
</script>