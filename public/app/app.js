var app = angular.module('my-app',['ngFileUpload','angularUtils.directives.dirPagination']).constant('API', 'http://cv.vn/');
app.config(function($interpolateProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
});
/*app.config(function($stateProvider, $urlRouterProvider) {

   

    $stateProvider

        .state('/', { // Định ngĩa 1 state product
            url: '/', // khai báo Url hiển thị
            templateUrl: '/', //đường dẫn view
            controller: '' //// Khai báo 1 controller cho state product
        })
});*/