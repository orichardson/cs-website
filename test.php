<!DOCTYPE html>
<html ng-app="app1">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id="bigthing">Oliver Richardson</title>

	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css" />

    <!-- <base href="cs.cornell.edu/~oli" target="_blank"> -->
    <!--link rel="stylesheet" type="text/css" href="/stylesheets/svgtext.css" /-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
        window.params = JSON.parse('<%-JSON.stringify(params).replace(/\'/g, "");%>');
    </script>
    <script src="js/main.js"></script>
    <!--<script type="text/javascript" src="js/<%=page%>.js"></script>-->

</head>

<!-- BELOW: note the explicit styling based on server data. -->
<body>    <!--style='background-color: <%- params.tabs[page].colors.bg %>; color:<%- params.tabs[page].colors.fg %>'-->
	<div class="parallax">
        <div class="plx-group">
            <div class=" plx-layer plx-base">

                <div class="jumbotron container-fluid">
                    <h1 class="title"><span class="wrap">Oliver Richardson</span></h1>
                </div>

                <div id="" class="clearfix sticky-anchor">
                    <nav id="navigation" class="navbar navbar-default sticky">
						<!-- style="opacity: 0.9;background-color: <%- params.tabs[page].colors.nav %>; border-color: <%- params.tabs[page].colors.border %>" -->
                        <div class="container-fluid">
                            <ul class="nav navbar-nav" id="nav-icon-list">
                                <%foreach ($tab in params.tabs) { %>
                                    <li id="nav-<%- tab %>" class="nav-item"><a href="#">
                                        <span class="glyphicon glyphicon-<%=params.tabs[tab].glyph%>"></span>
                                        <span class="hidden-xs text-capitalize"> <%= tab %> </span>
                                    </a></li>
                                <% } %>
                            </ul>
                          <ul class="nav navbar-nav navbar-right"  style="margin-left:0px !important;">
                            <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                            <li><a href="#"><span class="glyphicon glyphicon-equalizer"></span></a></li>
                          </ul>
                      </div>
                    </nav>
                </div>

                <div id="everything" class="container-fluid">
                    <%- include('./'+ page + '.ejs', this) %>
                </div>
            </div>

        </div>

        <!---->
        <div class="plx-group">
            <div  class="plx-layer plx-deep" style="">
                <div id="background-wrapper"style="margin:0px!important;" >
                    <canvas id="background" resize="true"></canvas>
                </div>
            <!----></div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.4/paper-full.js"></script>
    <!--<script type="text/paperscript" src="js/vines.paper.js" canvas="background"></script>-->
    <script type="text/javascript" src="js/gen/vines-wind.js"></script>

    <!--<div style="height:1500px;"> </div>-->






</body>
</html>
