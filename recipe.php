<?php
$recipe_file_name = $_REQUEST['recipe_name'];
?>
<!DOCTYPE html>
<!-- saved from url=(0077)https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html -->
<html lang="en" ng-app="secretrecipeApp">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head
         content must come *after* these tags -->

    <title>Secret Recipe</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap-social.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->


</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-home-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo-xs"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-home-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li>
                <li><a href="about.html"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;About</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Appetizers</a></li>
                        <li><a href="#">Main Course</a></li>
                        <li><a href="#">Desserts</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Chef's Special</a></li>

                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


    <div class="container">
        <div class="row">
            <div class="col-xs-12" ng-controller="menuController as menuCtrl">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" ng-class="{active : menuCtrl.isSelect(1)}">
                        <a
                            aria-controls="all menu"
                            role="tab" ng-click="menuCtrl.select(1)"
                            >The Menu</a></li>
                    <li role="presentation" ng-class="{active : menuCtrl.isSelect(2)}">
                        <a
                            aria-controls="appetizers"
                            role="tab" ng-click="menuCtrl.select(2)"
                            >Appetizers</a></li>
                    <li role="presentation" ng-class="{active : menuCtrl.isSelect(3)}">
                        <a
                            aria-controls="mains"
                            role="tab" ng-click="menuCtrl.select(3)"
                            >Mains</a></li>
                    <li role="presentation" ng-class="{active : menuCtrl.isSelect(4)}">
                        <a
                            aria-controls="desserts"
                            role="tab" ng-click="menuCtrl.select(4)"
                            >Desserts</a></li>
                </ul>
                <ul class="media-list">
                    <li class="media" ng-repeat="dish in menuCtrl.dishes | filter:menuCtrl.filterText">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object img-thumbnail" ng-src="images/{{dish.image}}" alt="{{dish.name}}">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{dish.name}} <span class="label label-danger label-xs">Hot</span></h4>
                            <p>{{dish.description}}</p>
                            <p>Comment: {{dish.comment}}</p>
                            <p>Type Your Comment: <input type="text" ng-model="dish.comment" /></p>
                            <p><a class="btn btn-primary btn-xs" href="{{dish.link}}">More &raquo;</a></p>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--<div class="container">-->
        <!--<div  ng-controller="menuController as menuCtrl">-->
                <!--<div class="row" ng-repeat="dish in menuCtrl.dishes">-->
                    <!--<div class="col-xs-12 col-sm-3 thumbnail">-->
                        <!--&lt;!&ndash;<p style="padding:20px;"></p>&ndash;&gt;-->
                        <!--&lt;!&ndash;<h3 align="center">{{dish.title}}</h3>&ndash;&gt;-->
                         <!--&lt;!&ndash;<div style="background:url('images/{{dish.image}}') no-repeat center center; width:150px; height:150px;float:left;"></div>&ndash;&gt;-->
                        <!--<img src="images/{{dish.image}}" class="menu-image" />-->
                    <!--</div>-->
                    <!--<div class="col-xs-12 col-sm-9">-->
                        <!--<h2>{{dish.name}}</h2>-->
                        <!--<p>{{dish.description}}</p>-->
                        <!--<p><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">More »</a></p>-->
                    <!--</div>-->
                <!--</div>-->

        <!--</div>-->


        <!--&lt;!&ndash;<div class="row">&ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xs-12 col-sm-3">&ndash;&gt;-->
                <!--&lt;!&ndash;<p style="padding:20px;"></p>&ndash;&gt;-->
                <!--&lt;!&ndash;<h3 align="center">This Month's Promotions</h3>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xs-12 col-sm-9">&ndash;&gt;-->
                <!--&lt;!&ndash;<h2>Weekend Grand Buffet</h2>&ndash;&gt;-->
                <!--&lt;!&ndash;<p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>&ndash;&gt;-->
                <!--&lt;!&ndash;<p><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">More »</a></p>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
        <!--&lt;!&ndash;</div>&ndash;&gt;-->

        <!--&lt;!&ndash;<div class="row row-content">&ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xs-12 col-sm-3">&ndash;&gt;-->
                <!--&lt;!&ndash;<p style="padding:20px;"></p>&ndash;&gt;-->
                <!--&lt;!&ndash;<h3 align="center">Meet our Culinary Specialists</h3>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
            <!--&lt;!&ndash;<div class="col-xs-12 col-sm-9">&ndash;&gt;-->
                <!--&lt;!&ndash;<h2>Alberto Somayya</h2>&ndash;&gt;-->
                <!--&lt;!&ndash;<h4>Executive Chef</h4>&ndash;&gt;-->
                <!--&lt;!&ndash;<p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>&ndash;&gt;-->
                <!--&lt;!&ndash;<p><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">More »</a></p>&ndash;&gt;-->
            <!--&lt;!&ndash;</div>&ndash;&gt;-->
        <!--&lt;!&ndash;</div>&ndash;&gt;-->

        <!--&lt;!&ndash;<div class="row">&ndash;&gt;-->
          <!--&lt;!&ndash;<ul ng-controller="menuController as menuCtr">&ndash;&gt;-->
              <!--&lt;!&ndash;<li ng-repeat="dish in menuCtr.dishes">&ndash;&gt;-->
                  <!--&lt;!&ndash;Name: {{dish.name}} ; Description {{dish.description}}&ndash;&gt;-->
              <!--&lt;!&ndash;</li>&ndash;&gt;-->
          <!--&lt;!&ndash;</ul>&ndash;&gt;-->
        <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--</div>-->

    <footer class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">Home</a></li>
                        <li><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">About</a></li>
                        <li><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">Menu</a></li>
                        <li><a href="https://d396qusza40orc.cloudfront.net/phoenixassets/web-frameworks/index.html#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-1">
                    <h5>Our Address</h5>
                    <address>
		              117 Albion Street<br>
		              Brunswick<br>
		              VIC<br>
                        Australia<br>
		              <i class="fa fa-phone"></i>&nbsp;Tel.: +61 403169716<br>
		              <i class="fa fa-fax"></i>&nbsp;Fax: +61 99999999<br>
		              <i class="fa fa-envelope"></i>&nbsp;Email: <a href="mailto:connyyang097@gmail.com">connyyang097@gmail.com</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:connyyang097@gmail.com"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align="center">Â© Copyright 2016 Secret Recipe</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://use.fontawesome.com/e9f320bb07.js"></script>
    <script src="js/myjs.js"></script>

    <script>
        var app = angular.module("secretrecipeApp",[]);

        app.controller('menuController',function(){
            this.tab = 1;
            this.filterText = "";
            var dishes=[
                {
                    title:"Our Lipsmacking Culinary Creations",
                    name:"Crispy roast potatoes",
                    file_name:"crispy-roast-potatoes",
                    description:"Brushing the potatoes with a mixture of olive oil and melted butter gives them a golden crust. Sprinkle them with flaked sea salt to enhance their flavour.",
                    image:"crispy-roast-potatoes-13760_l.jpeg",
                    category:"appetizer",
                    link:"#"
                },
                {
                    title:"This Month's Promotions",
                    name:"Slow-cooked lamb and chunky vegetable stew",
                    file_name:"slow-cooked-lamb-and-chunky-vegetable-stew",
                    description:"Using forequarter chops makes this slow-cooked lamb and vegetable stew budget-friendly!",
                    image:"slowcooked-lamb-and-chunky-vegetable-stew-22354_l.jpeg",
                    catetory:"main",
                    link:"#"
                }
            ];
            this.dishes = dishes;

            //var para_filename = "crispy-roast-potatoes";
            var para_filename = 'crispy-roast-potatoes';

//            function check_request_filename(request_filename)
//            {
//                return request_filename == para_filename;
//            }
//            var current_dish = dishes.filter(check_request_filename);
            var current_dish=[
                {
                    title:"Our Lipsmacking Culinary Creations",
                    name:"Crispy roast potatoes",
                    file_name:"crispy-roast-potatoes",
                    description:"Brushing the potatoes with a mixture of olive oil and melted butter gives them a golden crust. Sprinkle them with flaked sea salt to enhance their flavour.",
                    image:"crispy-roast-potatoes-13760_l.jpeg",
                    link:"#"
                },

            ];
            this.current_dish = current_dish;

            this.select = function(setTab){
                this.tab = setTab;

                if(setTab === 2)
                {
                    this.filterText = 'appetizer';
                }
                else if(setTab === 3)
                {
                    this.filterText = 'main';
                }
                else if(setTab === 4)
                {
                    this.filterText = 'dessert'
                }
                else
                {
                    this.filterText = '';
                }

            };

            this.isSelect = function(checkTab){
                console.log("isselect: "+checkTab+" "+this.tab);
                return(this.tab === checkTab);
            }
        });


    </script>
</body></html>
