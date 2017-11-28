app.controller('SubcategoryController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'admin/subcategory/tbSubcategory').then(function (response) {//index api
		$scope.subcategories = response.data;
	});
	$http.get(API+ 'admin/category/tbCategory').then(function(response){

		$scope.cate=response.data;
		$scope.catename=$scope.cate[0];

	});
	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		
		$scope.state = state;
		$scope.alert=false;
		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm Sub Category";
			$scope.add=true;
			
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Sub Category";
			$scope.add=false;
			$scope.id = id;
			$http.get(API + 'admin/subcategory/tbSubcategory/' + id).then(function (response) {//show api
				$scope.subcategorybyId = response.data;

				$scope.catename=$scope.subcategorybyId.category;
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
			var url = API + 'admin/subcategory/tbSubcategory';//store api
			$http({
				method : 'POST',
				url : url,
				params : {
					'name':$scope.subcategorybyId.name,
					'categories_id':$scope.catename.id
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
			var url = API + 'admin/subcategory/tbSubcategory/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'name':$scope.subcategorybyId.name,
					'categories_id':$scope.catename.id			
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
		
		$http.delete(API + 'admin/subcategory/tbSubcategory/' + idd)//destroy api
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
				return $http.post(API + 'admin/subcategory/checknamesubcategory', {name: viewValue})
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

