app.controller('ProductController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'tbProduct').then(function (response) {//index api
		$scope.products = response.data;

	});
	
});

