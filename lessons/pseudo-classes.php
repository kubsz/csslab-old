<h1>Pseudo Classes in <span class="col3-font bold">CSS3</span></h1>
<p>Pseudo Classes are used to define a special state of an element, or surrounding elements. Some pseudo-classes are used to change CSS propeties during an <span class="col3-font bold">event</span> such as <span class="col3-font bold">:hover</span>, whereas other pseudo-classes are used to seperate elements from others with the same class, such as <span class="col3-font bold">:first-child</span>.</span></p>
<h1>Example uses of <span class="col3-font bold">Pseudo Classes</span></h1>
<div class="pseudo-class-examples">
    <div class="codeblock col1 col2-font hover-codeblock">
        <div class="numbers col3-font">
            <p>1</p>
            <p>2</p>
            <p>3</p>
        </div>
        <div class="code">
            <code><?php echo htmlentities("<div class='")."<span class='col3-font'>hover-example</span>".htmlentities("'>"); ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;Hover over me!"; ?></code>
            <code><?php echo htmlentities("</div>"); ?></code>
        </div>
        <div class="col2 output">
            <div class='hover-example col3 col3-border-color col2-font'>
                Hover over me!
            </div>
        </div>
        <div class="numbers col3-font">
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>6</p>
            <p>7</p>
            <p>8</p>
        </div>
        <div class="code">
            <code><?php echo "<span class='col3-font opacity'>.hover-example</span> {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>padding</span>:20px;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>border</span>:3px solid;"; ?></code>
            <code><?php echo "}"; ?></code>
            <code><?php echo "<span class='col3-font opacity'>.hover-example</span>:hover {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>background</span>:transparent;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>color</span>:#2c3137"; ?></code>
            <code><?php echo "}"; ?></code>
        </div>
    </div>
    <div class="codeblock col1 col2-font focus-codeblock">
        <div class="numbers col3-font">
            <p>1</p>
        </div>
        <div class="code">
            <code><?php echo htmlentities("<input class='")."<span class='col3-font'>focus-example</span>".htmlentities("' type='")."<span class='col3-font'>text</span>".htmlentities("' placeholder='")."<span class='col3-font'>Click to focus!</span>".htmlentities("'>"); ?></code>
        </div>
        <div class="col2 output">
            <input class='focus-example col3-border-color' type="text" placeholder="Click to focus!">
        </div>
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
        </div>
        <div class="code">
            <code><?php echo "<span class='col3-font opacity'>.focus-example</span> {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>background</span>:transparent;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>border</span>:3px solid;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>text-align</span>:center;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>padding</span>:20px;"; ?></code>
            <code><?php echo "}"; ?></code>
            <code><?php echo "<span class='col3-font opacity'>.focus-example</span>:focus {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>background</span>:#2c3137;"; ?></code>
            <code><?php echo "}"; ?></code>
        </div>
    </div>
    <div class="codeblock col1 col2-font nth-of-type-codeblock">
        <div class="numbers col3-font">
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
        </div>
        <div class="code">
            <code><?php echo htmlentities("<p>Hello welcome to my shop!</p>"); ?></code>
            <code><?php echo htmlentities("<p>Hello welcome to my shop!</p>"); ?></code>
            <code><?php echo htmlentities("<p>Hello welcome to my shop!</p>"); ?></code>
            <code><?php echo htmlentities("<p>Hello welcome to my shop!</p>"); ?></code>
        </div>
        <div class="col2 output">
            <p class="col1-font ">Hello welcome to my shop!</p>
            <p class="col3-font bold">Hello welcome to my shop!</p>
            <p class="col1-font">Hello welcome to my shop!</p>
            <p class="col3-font bold">Hello welcome to my shop!</p>
        </div>
        <div class="numbers col3-font">
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>4</p>
            <p>5</p>
            <p>6</p>
            <p>7</p>
        </div>
        <div class="code">
            <code><?php echo "<span class='col3-font opacity'>p</span> {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>color</span>:inherit;"; ?></code>
            <code><?php echo "}"; ?></code>
            <code><?php echo "<span class='col3-font opacity'>p:nth-of-type(2n)</span>:hover {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>color</span>:#2c3137;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>font-weight</span>:bold;"; ?></code>
            <code><?php echo "}"; ?></code>
        </div>
    </div>
    <div class="codeblock col1 col2-font first-letter-codeblock">
        <div class="numbers col3-font">
            <p>1</p>
        </div>
        <div class="code">
            <code><?php echo htmlentities("<p>You can combine the ::first-let..</p>"); ?></code>
        </div>
        <div class="col2 output">
            <p class="col1-font"><span class="col3-font bold">Y</span>ou can combine the ::first-letter and<br>::first-line pseudo-elements to add a<br> special effect to the first letter and<br>the first line of a paragraph!</p>
        </div>
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
        </div>
        <div class="code">
            <code><?php echo "<span class='col3-font opacity'>p</span> {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>color</span>:#000;"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>text-decoration</span>:none;"; ?></code>
            <code><?php echo "}"; ?></code>
            <code><?php echo "<span class='col3-font opacity'>p</span>::first-letter {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>color</span>:#2c3137;"; ?></code>
            <code><?php echo "}"; ?></code>
            <code><?php echo "<span class='col3-font opacity'>p</span>::first-line {"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>text-decoration</span>:underline;"; ?></code>
            <code><?php echo "}"; ?></code>
        </div>
    </div>
</div>
<h1>How can <span class="col3-font bold">Pseudo-Classes</span> be used?</h1>
<p>Pseudo-classes can be used in a variety of ways, whether you're intending to change specifics of a paragraph, changing multiple lined-up buttons or even changing the look of a link after it has already been visited, pseudo-classes are here to make your life a whole lot easier. Here are a bunch of <span class="col3-font bold">pseudo-classes</span> and <span class="col3-font bold">pseudo-elements</span> that you can play around with in CSS3. <span class="col3-font bold">Hover</span> over the pseudo-class to view the description.</p>
<div id="pseudo-showcase">

</div>
<script>
    function pseudoExamples(name, desc) {
        $("#pseudo-classes #pseudo-showcase").append("<div class='class-container'><div class='pseudo-row col1 col2-font col4-border-color'><code>" + name + "</code></div><div class='description-text col3 col2-font col4-border-color'>" + desc + "</div><div class='clear'></div></div>");
  }
  pseudoExamples(':active', 'Selects the active link');
  pseudoExamples(':checked', 'Selects every checked element');
  pseudoExamples(':disabled', 'Selects every disabled element');
  pseudoExamples(':empty', 'Selects every element that has no children');
  pseudoExamples(':enabled', 'Selects every enabled element');
  pseudoExamples(':first-child', 'Selects every element that is the first child of its parent');
  pseudoExamples(':first-of-type', 'Selects every element that is the first element of its parent');
  pseudoExamples(':focus', 'Selects the element that has focus');
  pseudoExamples(':hover', 'Selects links on mouse over');
  pseudoExamples(':in-range', 'Selects elements with a value within a specified range');
  pseudoExamples(':invalid', 'Selects all elements with an invalid value');
  pseudoExamples(':last-child', 'Selects every element that is the last child of its parent');
  pseudoExamples(':last-of-type', 'Selects every element that is the last element of its parent');
  pseudoExamples(':not(selector)', 'Selects every element that is not a element');
  pseudoExamples(':nth-child(n)', 'Selects every element that is the nth child of its parent');
  pseudoExamples(':nth-of-type(n)', 'Selects every element that is the second element of its parent');
  pseudoExamples(':nth-last-child(n)', 'Selects every element that is the second child of its parent, counting from the last child');
  pseudoExamples(':nth-last-of-type(n)', 'Selects every element that is the second element of its parent, counting from the last child');
  pseudoExamples(':only-of-type', 'Selects every element that is the only element of its parent');
  pseudoExamples(':only-child', 'Selects every element that is the only child of its parent');
  pseudoExamples(':optional', 'Selects elements with no "required" attribute');
  pseudoExamples(':out-of-range', 'Selects elements with a value outside a specified range');
  pseudoExamples(':read-only', 'Selects elements with a "readonly" attribute specified');
  pseudoExamples(':valid', 'Selects all elements with a valid value');
  pseudoExamples('visited', 'Selects all visited links');

    // $(".pseudo-row").mouseover(function() {
    //     $(".description-text").css("max-width", "50px")
    // })

</script>