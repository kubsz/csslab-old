<h1 class="col1-font">Introduction to Styling with <span class="col3-font">CSS3</span></h1>
<p>CSS is a language that is used to describe and manipulate HTML elements to change the look and feel of a webpage. This tutorial will help you to grasp the basics and learn the advanced. All HTML elements can be manipulated in a never-ending amount of ways. CSS can decide aesthetic features including <span class="col3-font bold">color</span>, <span class="col3-font bold">size</span> and <span class="col3-font bold">animations</span>!</p>
<div class="showcase">
    <div class="box1 col3-font">
        Hello World!
    </div>
    <div class="box2">
        Hello World!
    </div>
    <div class="box3">
        <span class="let1">H</span>
        <span class="let2">e</span>
        <span class="let3">l</span>
        <span class="let4">l</span>
        <span class="let5">o</span>
        <span class="let6"> </span>
        <span class="let7">W</span>
        <span class="let8">o</span>
        <span class="let9">r</span>
        <span class="let10">l</span>
        <span class="let11">d</span>
        <span class="let12">!</span>
    </div>
</div>
<p>In order to manipulate HTML elements, CSS must have a suitable area to be written at. There are <span class="col3-font bold">2</span> main methods. The first (and most common) way is to create a <span class="col3-font bold">.css</span> file seperate to the HTML document, and link the file in the header of the HTML document with the following tag:</p>
<div class="codeblock col1 col2-font">
    <div class="numbers col3-font">
        <p>1</p>
    </div>
    <div class="code">
        <code><?php echo htmlentities("<link rel='")."<span class='col3-font'>stylesheet</span>".htmlentities("' type='")."<span class='col3-font'>text/css</span>".htmlentities("' href='")."<span class='col3-font'>my-stylesheet.css</span>".htmlentities("'>"); ?></code>
    </div>
</div>
<p>Another way to add CSS to a HTML document is to use <span class="col3-font bold"><?php echo htmlentities("<style>") ?></span> tags. Using this opening tag will allow a space to write CSS markup until you use the <span class="col3-font bold"><?php echo htmlentities("</style>") ?></span> tag to close it.</p>
<div class="codeblock col1 col2-font">
    <div class="numbers col3-font">
        <p>1</p>
        <p>2</p>
        <p>3</p>
        <p>4</p>
        <p>5</p>
    </div>
    <div class="code">
        <code><?php echo htmlentities("<style>"); ?></code>
        <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font opacity'>.header</span> {"; ?></code>
        <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>color</span>:red;"; ?></code>
        <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;}"; ?></code>
        <code><?php echo htmlentities("</style>"); ?></code>
    </div>
</div>
<h1><span class="col3-font">CSS3</span> Syntax</h1>
<p>CSS syntax consists of 3 parameters, the <span class="col3-font bold">selector</span>, <span class="col3-font bold">property</span> and the <span class="col3-font bold">value</span> of that property. The selector is usually a callback to a <span class="col3-font bold">class</span> or <span class="col3-font bold">id</span> that has been declared in the HTML document, however default tags, mathematical formulas and many more can be used to manipulate the document. The property is the <span class="col3-font bold">variable</span>, that we're changing the selector into. Properties can range anywhere from color, to opacity. Finally, the <span class="col3-font bold">value</span> is the data we're assigning to the <span class="col3-font bold">property</span>. This value can be a string, number or specific unit.</>
<div class="syntax-container">
    <div class="explanation">
        <span class="selector-ex col3 col2-font">selector</span>
        <span class="property-ex col3 col2-font">property</span>
        <span class="value-ex col3 col2-font">value</span>
    </div>
    <div class="syntax-text col1 col2-font">
        <div class="selector">#content</div>
        <div class="brackets">{ </div>
        <div class="property">font-size:</div>
        <div class="value"> green</div>
        <div class="brackets"> }</div>
        <div class="clear"></div>
    </div>
</div>