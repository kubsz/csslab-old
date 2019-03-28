<h1>Working with <span class="col3-font bold">CSS3</span> Dimension Units</h1>
<p>CSS3 Can be used in a variery of ways to style elements. A lot of the most common methods of styling involve using <span class="col3-font bold">dimension units</span>. There are many examples of where dimension units are used, here are some examples:</p>
<div class="showcase" id="dimension-showcase">
    <script>
        function showDimension(property) {
            $("#dimension-showcase").append("<div class='color-row col1 col2-font col4-border-color'><code><span class='col3-font'>" + property + "</span>: px|em|%|vw|vh|pt|auto|inherit</code></div>");
        }
        showDimension('width');
        showDimension('height');
        showDimension('border-width');
        showDimension('border-radius');
        showDimension('font-size');
        showDimension('line-height');
        showDimension('margin');
        showDimension('padding');
        showDimension('box-shadow');
        showDimension('text-shadow');
        showDimension('transform:translate()');
        showDimension('letter-spacing');
        showDimension('word-spacing');
        showDimension('max-width');
        showDimension('min-width');
        showDimension('max-height');
        showDimension('min-height');
        showDimension('filter:blur()');
        showDimension('left');
        showDimension('right');
        $("#dimension-showcase").append("<div class='clear'></div>")
    </script>
</div>
<p>Different units can be used to manipulate web pages to change <span class="col3-font bold">dimensions</span> depending on parent containers, device width/height, animations, ect. Some units are determined by elements surrounding it, some are relative, and some are the same no matter the situation. These are all of the currently supported dimensions in CSS3:</p>

<div class="unit-table">
    <div class="table-row col1 col2-font">
        <div class="unit">Unit</div>
        <div class="description">Description of Unit</div>
        <div class="clear"></div>
    </div>
    <script>
        function defineRow(name, description) {
            $(".unit-table").append("<div class='table-row col2 col1-font col1-border-color'><div class='unit'>" + name + "</div><div class='description'>" + description + "</div><div class='clear'></div></div>");
        }
        defineRow('px', 'Pixels (1px = 1/96th of 1in)');
        defineRow('%', 'Relative to the parent element');
        defineRow('in', 'Inches (1in = 96px = 2.54cm)');
        defineRow('cm', 'Centimeters');
        defineRow('mm', 'Millimeters');
        defineRow('pt', 'Points (1pt = 1/72 of 1in)');
        defineRow('vw', 'Relative to 1% of the width of the viewport');
        defineRow('vh', 'Relative to 1% of the height of the viewport');
        defineRow('em', 'Relative to the font-size of the element (2em means 2 times the size of the current font)');
        defineRow('ex', 'Relative to the x-height of the current font (rarely used)');
        defineRow('ch', 'Relative to width of the "0" (zero)');
        defineRow('rem', 'Relative to font-size of the root element');
        $("#dimension-showcase").append("<div class='clear'></div>");
    </script>
</div>