<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/layout.css">
        <?php
        if(isset($_COOKIE['font'])) {
            echo "<style> #styling-fonts, .sidenav { font-family:".$_COOKIE['font']."; } </style>";
        }
        if(isset($_COOKIE['color'])) {
            echo "<style>
            .col3 {background: ".$_COOKIE['color']." }  
            ::selection { background: ".$_COOKIE['color']."; }
            .col3-font {color: ".$_COOKIE['color']."  }
            .col3-border-color {border-color: ".$_COOKIE['color']."  }
            input::-webkit-slider-thumb { background:".$_COOKIE['color']."}
            .active-animation { background:".$_COOKIE['color']."}
            #dimension-units .table-row:nth-of-type(even) { background: ".str_replace(")", ", .5)", str_replace("rgb", "rgba", $_COOKIE['color']))."; }
            .focus-example:focus { background: ".str_replace(")", ", .5)", str_replace("rgb", "rgba", $_COOKIE['color']))."; }
         </style>";
        }
        if(isset($_COOKIE['theme'])) {
            switch($_COOKIE['theme']) {
                case "rgb(238, 238, 238)":
                    echo "<style>
                        .col1 {background: ".$_COOKIE['theme']."; }
                        .col1-font { color: ".$_COOKIE['theme']."; }
                        .col1-border-color { border-color: ".$_COOKIE['theme']."; }
                        .col2 { background:rgb(44, 49, 55) ; }
                        .col2-font { color: rgb(44, 49, 55) ; }
                        .col2-border-color { border-color: rgb(44, 49, 55) ; }
                        .col4 { background:rgb(27, 30, 36) ; }
                        .col4-border-color: rgb(27, 30, 36) ; }</style>";
                    break;
                case "rgb(44, 49, 55)":
                    echo "<style>
                        .col1 {background: ".$_COOKIE['theme']."; }
                        .col1-font { color: ".$_COOKIE['theme']."; }
                        .col1-border-color { border-color: ".$_COOKIE['theme']."; }
                        .col2 { background:rgb(238, 238, 238) ; }
                        .col2-font { color: rgb(238, 238, 238) ; }
                        .col2-border-color { border-color: rgb(238, 238, 238) ; }
                        .col4 { background:rgb(27, 30, 36) ; }
                        .col4-border-color: rgb(27, 30, 36) ; }</style>";
                    break;
                case "rgb(27, 30, 36)":
                    echo "<style> .col1 {background: ".$_COOKIE['theme']."; }
                        .col1-font { color: ".$_COOKIE['theme']."; }
                        .col2 { background:rgb(238, 238, 238) ; }
                        .col2-border-color { border-color:rgb(238, 238, 238) ; }
                        .col2-font { color: rgb(238, 238, 238) ; }
                        .col2-border-color { border-color: rgb(238, 238, 238) ; }
                        .col4 { background: rgb(44, 49, 55) ; }
                        .col4-border-color: rgb(44, 49, 55) ; }</style>";
                    break;
            }
        }
        ?>
        <link rel="stylesheet" type="text/css" href="/css/lessons.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
	<body>
		<div class="sidenav col1 col2-font col4-border-color">
			<div class='nav-list'>
				<div class='logo col4'>
                    <span class='logo-text'>css<span class="col3-font">.lab</span></span>
				</div>
				<div class='option-container col4'>
					<div class='col3-font col3-border-color option col1'><i class="fas fa-book"></i>Introduction</div>
					<div class='col2-font option next-option col1'><i class="fas fa-palette"></i>Colors</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-font"></i>Styling Fonts</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-pencil-ruler"></i>Dimension Units</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-box"></i>Margin, Padding and Borders</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-align-left"></i>Flexbox</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-mouse-pointer"></i>Pseudo Classes</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-mobile"></i>Media Queries</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-video"></i>Transitions and Animations</div>
					<div class='col2-font option locked-option col1'><i class="fas fa-magic"></i>Tips and Tricks</div>
				</div>
			</div>

            <h4>Theme</h4>
            <div class="color-container">
                <div class="theme col4-border-color" style="background:#eee"></div>
                <div class="theme col4-border-color" style="background:#2c3137"></div>
                <div class="theme col4-border-color" style="background:#1b1e24"></div>
                <div class="clear"></div>
            </div>

            <h4>Primary Color</h4>
            <div class="color-container">
                <div class="color col4-border-color" style="background:#9a5bba"></div>
                <div class="color col4-border-color" style="background:#a6211c"></div>
                <div class="color col4-border-color" style="background:#f85920"></div>
                <div class="color col4-border-color" style="background:#4fc0e0"></div>
                <div class="color col4-border-color" style="background:#FF146E"></div>
                <div class="color col4-border-color" style="background:#396d97"></div>
                <div class="color col4-border-color" style="background:#ef5d89"></div>
                <div class="color col4-border-color" style="background:#ed9537"></div>
                <div class="color col4-border-color" style="background:#188b4a"></div>
                <div class="clear"></div>
            </div>
            <div class="footer col4-border-color">
                <p>Developed by <a class="col3-font" href="https://twitter.com/Kubs9989">@Kubsz</a>.
                <?php
                if(isset($_COOKIE['load'])) {
                	if($_COOKIE['load'] == "false") {
                        echo "<i class=\"col3-font fas fa-times\"></i>";
                    } else {
                        echo "<i class=\"col3-font fas fa-sticky-note\"></i>";
                    }
                } else {
                        echo "<i class=\"col3-font fas fa-sticky-note\"></i>";
                    }
                ?>
                </p>
            </div>
		</div>
		<div class="main col2 col1-font">
            <div class="load-container">
                <div class="col4 upper-bar col1-border-color"></div>
                <div class="col4 lower-bar"></div>
                <div class="bars">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                    <div class="bar bar4"></div>
                    <div class="bar bar5"></div>
                </div>
            </div>
            <div class="main-content" id="introduction">
                <?php include($_SERVER['DOCUMENT_ROOT']."/lessons/introduction.php"); ?>
            </div>
		</div>
	</body>
	<script src="/script.js"></script>
</html>