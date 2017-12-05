<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>UVA F&Fs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav id="navbar">
            <h1><a href="index.php" >UVA Free and For Sale</a></h1><div class="wrap">
               <div class="search">
                    <label for = "search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?"><button type="submit" class="searchButton" style="height: 32px">
                        <a href="./search.php"><i class="fa fa-search"></i></a>
                        </button>
                    </label>
               </div>
            </div><div id="navbuttons">
            </div>
        </nav>
        <aside class="left-container">
            <div class="btn-group">
                <button>All Items</button>
                <button>Books</button>
                <button>Furniture</button>
                <button>Clothing</button>
                <button>Miscellaneous</button>
                <button>Contact Us</button>
            </div>
        </aside><section class="right-container">
		<body ng-app="myapp" ng-controller="ListController">     
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form ng-submit="addNew()">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" ng-model="selectedAll" ng-click="checkAll()" /></th>
                                        <th>Class Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="bookDetail in bookDetails">
                                        <td>
                                            <input type="checkbox" ng-model="bookDetail.selected"/></td>
                                        <td>
                                            <input type="text" class="form-control" ng-model="bookDetail.book_name" required/></td>
<!--                                         <td> -->
<!--                                             <input type="number" class="form-control" ng-model="bookDetail.price" required/></td> -->
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-group">
                                <input ng-hide="!bookDetails.length" type="button" class="btn btn-danger pull-right" ng-click="remove()" value="Remove">
                                <input type="submit" class="btn btn-primary addnew pull-right" value="Add New">
                                <input type="submit" class="btn btn-primary addnew pull-right" value="Estimate Total Price" ng-click="estimate()">
                            </div>
                        </form>
                    </div>
                    {{ sum_message }}
                </div>
            </div>
        </div>
    </div>

    <br/><br/><br/>


<script>

var app = angular.module("myapp", []);
app.controller("ListController", ['$scope', function($scope) {

    $scope.bookDetails = [
        {
            'book_name':'ECON 2010',
            price: 120,
        },
        {
            'book_name':'ECON 2020',
            price: 85,
        },
        {
            'book_name':'CS 4640',
            price: 20,
        }];
    
        $scope.addNew = function(bookDetails){
            $scope.bookDetails.push({ 
                'book_name': "", 
                'price': "",
            });
        };

    
        $scope.remove = function(){
            var newDataList=[];
            $scope.selectedAll = false;
            angular.forEach($scope.bookDetails, function(selected){
                if(!selected.selected){
                    newDataList.push(selected);
                }
            }); 
            $scope.bookDetails = newDataList;
        };

        $scope.estimate = function(){
            var sum = 0;
        	angular.forEach($scope.bookDetails, function(selected){
                sum = sum + selected.price;
            });
        	$scope.sum_message = "Your estimated price is $" + sum; 
        };
    
    $scope.checkAll = function () {
        if (!$scope.selectedAll) {
            $scope.selectedAll = true;
        } else {
            $scope.selectedAll = false;
        }
        angular.forEach($scope.bookDetails, function(bookDetails) {
            bookDetails.selected = $scope.selectedAll;
        });
    };


}]);

</script>
		
               
        
        </section>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
