app.controller('CategoryController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'tbCategory').then(function (response) {//index api
		$scope.category = response.data;
	});
	$http.get(API + 'admin/category/tbCategory').then(function (response) {//index api
		$scope.categories = response.data;
	});
	
	$scope.loadCompleted = function(){
		$(".megamenu").megamenu();
	}
	/*$scope.init = function () {
	    jQuery('#role_id option:first').remove();
	    
	}*/
	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		$scope.state = state;
		$scope.alert=false;
		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm Category";
			$scope.add=true;
			$scope.categorybyId={};
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Category";
			$scope.add=false;
			$scope.id = id;
			$http.get(API + 'admin/category/tbCategory/' + id).then(function (response) {//show api
				$scope.categorybyId = response.data;

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
		if (state == "add") {
			var url = API + 'admin/category/tbCategory';//store api
			$http({
				method : 'POST',
				url : url,
				params : {
					'name':$scope.categorybyId.name
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
			var url = API + 'admin/category/tbCategory/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'name':$scope.categorybyId.name				
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
		
		$http.delete(API + 'admin/category/tbCategory/' + idd)//destroy api
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

