/**
 * Created by connyyang on 23/04/2017.
 */

var app = angular.module("secretrecipeApp",[]);

app.controller('menuController',function(){
    var dishes=[
        {
            title:"Our Lipsmacking Culinary Creations",
            name:"Crispy roast potatoes",
            description:"Brushing the potatoes with a mixture of olive oil and melted butter gives them a golden crust. Sprinkle them with flaked sea salt to enhance their flavour.",
            image:"crispy-roast-potatoes-13760_l.jpeg",
            link:"#"
        },
        {
            title:"This Month's Promotions",
            name:"Slow-cooked lamb and chunky vegetable stew",
            description:"Using forequarter chops makes this slow-cooked lamb and vegetable stew budget-friendly!",
            image:"slowcooked-lamb-and-chunky-vegetable-stew-22354_l.jpeg",
            link:"#"
        }
    ];
    this.dishes = dishes;
});

app.controller('bannerController',function($scope,$http){
   // var banners;
    var name = "sssss";
   // console.log("banner controller");
    //alert("test");
    // $http({
    //     method:"GET",
    //     url:"file:///Users/connyyang/Documents/angularjs/cuisine/banner.json"
    // }).then(function mySuccess(response){
    //     banners = response.data[banners];
    //     console.log(response.data);
    // }, function myError(response){
    //     var error = response.statusText;
    //     console.log(error);
    // });

    // $http({
    //     method : "GET",
    //     url : "file:///Users/connyyang/Documents/angularjs/cuisine/banner.json"
    // }).then(function mySucces(response) {
    //     var banners = response.data.banners;
    //     console.log(banners);
    //     $scope.banners = banners;
    //     for(x in banners){
    //         //console.log(banners[x]);
    //     }
    // }, function myError(response) {
    //     console.log(response.statusText);
    // });
    var banners = [
        {
            image:"rack_of_lamb_with_peas.jpg",
            caption_name:"SECRET RECIPE",
            caption_description:"We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!",

        },
        {
            image:"Scallop_and_Zuccini_Spaghettini.jpg",
            caption_name:"SECRET RECIPE",
            caption_description:"We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!",

        },
        {
            image:"Mussels_with_Tomato_and_Parsley.jpg",
            caption_name:"SECRET RECIPE",
            caption_description:"We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!",

        }
    ];

    var person = {};
    $scope.banners = banners;
    $scope.person = person;
    person.name = name;
;
    //console.log("name: "+name);
});