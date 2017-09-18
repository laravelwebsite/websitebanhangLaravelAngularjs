var app = angular.module('my-app',['angularUtils.directives.dirPagination']).constant('API', 'http://cv.dev/');
 app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  });
