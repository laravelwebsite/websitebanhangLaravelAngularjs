app.controller('HoadonController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'admin/hoadon/tbHoadon').then(function (response) {//index api
		$scope.hoadons = response.data;
		console.log($scope.hoadons);
	});


	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		$scope.state = state;
		$scope.alert=false;

		switch (state) {
			case "status" :
			$scope.frmTitle = "Xác nhận trạng thái hóa đơn";
			$http.get(API + 'admin/hoadon/tbHoadon/' + id).then(function (response) {//show api
				$scope.hoadonbyId = response.data;
			});
			$scope.id = id;
			$("#myModal3").modal('show');
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Hóa đơn";
			$scope.add=false;
			$scope.id = id;
			$http.get(API + 'admin/hoadon/tbHoadon/' + id).then(function (response) {//show api
				$scope.hoadonbyId = response.data;
			});
			$("#myModal").modal('show');
			break;
			default :
			$scope.frmTitle = "Không Biết";
			break;
		}
		
		
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
	$scope.getVal=function()
	{
		$scope.tus=$scope.status;
		console.log($scope.tus);
	}
	//sự kiện click nút lưu khi thêm,sửa
	$scope.save = function (state,id) {
		if (state == "status") {
			var url = API + 'admin/hoadon/tbHoadon/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'status':$scope.tus,			
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
			var url = API + 'admin/hoadon/tbHoadon/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'email':$scope.hoadonbyId.email,
					'phone':$scope.hoadonbyId.phone,
					'address':$scope.hoadonbyId.address,				
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
		
		$http.delete(API + 'admin/hoadon/tbHoadon/' + idd)//destroy api
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
				return $http.post(API + 'admin/category/checknamecategory', {name: viewValue})
				.then(
					function(response) {
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

app.directive('updateHd', function($http, $q,API) {
	return {
		restrict:'AE',
		require: 'ngModel',
		scope: true,
		link: function(scope, element, attrs, ngModel) {
			scope.getProductid = function getProductid(idproduct){
				scope.getIdproduct=idproduct;

			}
			ngModel.$asyncValidators.updateHd = function(modelValue, viewValue) {
				
				return $http.post(API + 'admin/hoadon/update-bill', {idProduct:scope.getIdproduct,Mahoadon:Mahoadon.value,qty: viewValue})
				.then(
					function(response) {
						if(response.data==0)
						{
							return 0;
						}
						else
						{
							$http.get(API + 'admin/hoadon/tbHoadon/' + response.data.id).then(function (response) {//show api
								scope.hoadonbyId = response.data;
							});
						}
					}
					);
			};
		}
	};
});

