app.controller('DetailSubcategoryController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'admin/detailsubcategory/tbDetailSubcategory').then(function (response) {//index api
		$scope.desubcategories = response.data;
	});
	$http.get(API+ 'admin/category/tbCategory').then(function(response){

		$scope.cate=response.data;
		$scope.catename=$scope.cate[0];
		$http.get(API+ 'admin/subcategory/getSubByCate/'+$scope.catename.id).then(function(response){
			$scope.subcate=response.data;
			$scope.subcatename=$scope.subcate[0];

		})

	});
	//change category
	$scope.getSubcate=function()
	{
		$scope.idcate=$scope.catename.id;
		$http.get(API+ 'admin/subcategory/getSubByCate/'+$scope.idcate).then(function(response){
			$scope.subcate=response.data;
			$scope.subcatename=$scope.subcate[0];

		})
	}
	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		
		$scope.state = state;
		$scope.alert=false;
		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm Detail Sub Category";
			$scope.add=true;
			
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Detail Sub Category";
			$scope.add=false;
			$scope.id = id;
			$http.get(API + 'admin/detailsubcategory/tbDetailSubcategory/' + id).then(function (response) {//show api
				$scope.detailsubcategorybyId = response.data;
				$scope.catename=$scope.detailsubcategorybyId.subcategory.category;
				$http.get(API+ 'admin/subcategory/getSubByCate/'+$scope.catename.id).then(function(response){
					$scope.subcate=response.data;
					$scope.subcatename=$scope.detailsubcategorybyId.subcategory;

				})
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
			var url = API + 'admin/detailsubcategory/tbDetailSubcategory';//store api
			$http({
				method : 'POST',
				url : url,
				params : {
					'name':$scope.detailsubcategorybyId.name,
					'sub_categories_id':$scope.subcatename.id
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
			var url = API + 'admin/detailsubcategory/tbDetailSubcategory/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'name':$scope.detailsubcategorybyId.name,
					'sub_categories_id':$scope.subcatename.id			
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
		
		$http.delete(API + 'admin/detailsubcategory/tbDetailSubcategory/' + idd)//destroy api
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
				return $http.post(API + 'admin/detailsubcategory/checknamedetailsubcategory', {name: viewValue})
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

