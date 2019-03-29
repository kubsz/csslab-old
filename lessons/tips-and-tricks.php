<h1>Tips and Tricks</h1>
<p>Now we're at the end of the tutorial, you should know the basics of CSS styling. However, there is <span class="col3-font bold">always</span> more to learn! Here are <span class="col3-font bold">5</span> tips and tricks that I wish I learnt earlier in my journey with CSS.</p>
<div class="tip">
    <h2 class="col3-font">Comments</h2>
    <p>You can comment markup in CSS by using '<span class="col3-font bold">/*</span>' to open the comment, and '<span class="col3-font bold">*/</span>' to end the comment. Comments are very useful as they allow you to write little notes next to your code which will help you, or another person understand it if they're reading it at a later date.</p>
    <div class="codeblock col1 col2-font">
        <div class="numbers col3-font">
            <p>1</p>
            <p>2</p>
            <p>3</p>
        </div>
        <div class="code">
            <code><?php echo "<span class='col3-font'>.container div:nth-of-type(3n)</span> { <span class='grey'>/* every 3rd child div of the container*/</span>"; ?></code>
            <code><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;<span class='col3-font'>background</span>: green;"; ?></code>
            <code><?php echo "}"; ?></code>
        </div>
    </div>
</div>
<div class="tip">
    <h2 class="col3-font">CSS Combinators</h2>
    <p>I could've done a whole page on combinators in CSS as they're an <span class="col3-font bold">extremely</span> useful thing to learn. Combinators allow you to select specific elements in CSS without specifying class/id names. They work in a similar way to pseudo-elements, but they're a lot easier to understand and can be used more often. There are four different combinators in CSS:</p>
    <ul>
        <li>Descendant Selector (space):
            <ul>
                <li>The descendant selector matches all elements that are descendants of a specified element. </li>
                <li>Example: <span class="col3-font bold">.container div</span> (select all divs inside the container class).</li>
            </ul>
        </li>
        <li>Child Selector (>)
            <ul>
                <li>The child selector selects all elements that are the immediate children of a specified element.</li>
                <li>Example: <span class="col3-font bold">.container > p</span> (select all p tags that are a direct child to the .container class).</li>
            </ul>
        </li>
        <li>Adjacent Sibling Selector (+)
            <ul>
                <li>The adjacent sibling selector selects all elements that are the adjacent siblings of a specified element.</li>
                <li>Example: <span class="col3-font bold">h1 + p</span> (select all p tags that come directly after a h1 tag).</li>
            </ul>
        </li>
        <li>General Sibling Selector(~)
            <ul>
                <li>The general sibling selector selects all elements that are siblings of a specified element.</li>
                <li>Example: <span class="col3-font bold">h2 div</span> (select all div tags that are siblings of a h2 tag).</li>
            </ul>
        </li>
    </ul>
</div>
<div class="tip">
    <h2 class="col3-font">CSS Priorities</h2>
    <p>CSS ID's will always take priority over classes, no matter the order. However, if you'd like to negate this, you can stick <span class="col3-font bold">!important</span> at the end of the property value, and it will set as the priority.</p>
</div>
<div class="tip">
    <h2 class="col3-font">Equations and Calculations in CSS</h2>
    <p>When entering a property value (20px for example), instead of manually using a value that you've calculated, you can use <span class="col3-font bold">calc()</span> to calculate the number. An example of this being used is if you want to create a row of 3 divs that combined have a width of 100%. Instead of manually writing 33.33333%, you can use calc(100% / 3) to easily generate the number.</p>
</div>