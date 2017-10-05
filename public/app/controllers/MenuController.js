app.controller('UserController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'admin/menu/tbMenu').then(function (response) {//index api
		$scope.menus = response.data;
		console.log(response.data);
	});
	
	/*$scope.init = function () {
	    jQuery('#role_id option:first').remove();
	    
	}*/
	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		$scope.state = state;
		$scope.alert=false;
		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm Menu";
			$scope.add=true;
			$scope.menubyId={};
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Menu";
			$scope.add=false;
			$scope.id = id;
			$http.get(API + 'admin/menu/tbMenu/' + id).then(function (response) {//show api
				$scope.menubyId = response.data;

			});
			
			break;
			default :
			$scope.frmTitle = "Không Biết";
			break;
		}
	$("#myModal").modal('show');
		
	}

	// sự kiện xóa
	$scope.delete=function(idd){
		$scope.idd=idd;
		$("#recordDel").modal("show");
	}
	$scope.close=function()
	{
		$("#myModal").modal('hide');
		location.reload();
	}
	//sự kiện click nút lưu khi thêm,sửa
	$scope.save = function (state,id) {
		console.log($scope.menubyId.name);
		if (state == "add") {
			var url = API + 'admin/menu/tbMenu';//store api
			$http({
				method : 'POST',
				url : url,
				params : {
					'name':$scope.menubyId.name,
					'src':$scope.menubyId.src
				},
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {
				$scope.alert=true;
				$scope.thongbao=response.data;
			})
			
		}
		//var url = API + 'admin/menu/tbMenu/create'; (get) create api
		//var url = API + 'admin/menu/tbMenu/' + id + '/edit'; (get) edit api
		if (state == "edit") {
			var url = API + 'admin/menu/tbMenu/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'name':$scope.menubyId.name,
					'src':$scope.menubyId.src				
				},
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {
				$scope.alert=true;
				$scope.thongbao=response.data;
			})
		}
	}

	//xác nhận xoa
	$scope.confirmDelete = function (idd) {
		
		$http.delete(API + 'admin/menu/tbMenu/' + idd)//destroy api
		.then(function (response) {
			location.reload();
		})

	}

	$scope.sort = function(keyname){
                            $scope.sortKey = keyname;   //set the sortKey to the param passed
                            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
                    }
});

app.directive('nameExist', function($http, $q,API) {
	return {
		restrict:'AE',
		require: 'ngModel',
		link: function(scope, element, attrs, ngModel) {
			ngModel.$asyncValidators.nameExist = function(modelValue, viewValue) {
				return $http.post(API + 'admin/menu/checknamemenu', {name: viewValue})
				.then(
					function(response) {
						console.log(response.data);
						if (response.data==0 )
						{
							
							ngModel.$setValidity("nametaken",false); 
						}
						if (response.data==1)
						{
							ngModel.$setValidity("nametaken",true); 
						}
					}
					);
			};
		}
	};
});
app.directive('srcExist', function($http, $q,API) {
	return {
		restrict:'AE',
		require: 'ngModel',
		link: function(scope, element, attrs, ngModel) {
			ngModel.$asyncValidators.srcExist = function(modelValue, viewValue) {
				return $http.post(API + 'admin/menu/checksrcmenu', {src: viewValue})
				.then(
					function(response) {
						console.log(response.data);
						if (response.data==0 )
						{
							
							ngModel.$setValidity("srctaken",false); 
						}
						if (response.data==1)
						{
							ngModel.$setValidity("srctaken",true); 
						}
					}
					);
			};
		}
	};
});

