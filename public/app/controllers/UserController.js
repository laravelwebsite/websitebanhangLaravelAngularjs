app.controller('UserController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'admin/user/tbUser').then(function (response) {
		$scope.users = response.data;

	});
	
	/*$scope.init = function () {
	    jQuery('#role_id option:first').remove();
	    
	}*/
	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		$scope.state = state;
		$scope.alert=false;
		$http.get(API+ 'admin/user/tbRole').then(function(response){

			$scope.role=response.data;
			$scope.role_id=$scope.role[0];
			$scope.p={};
			$scope.UserByid={};

		});

		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm User";
			$scope.passtitle="Đặt mật khẩu";

			$scope.add=true;



			break;
			case "edit" :
			$scope.frmTitle = "Sửa User";
			$scope.passtitle="Check vào để đổi mật khẩu";
			$scope.id = id;
			$scope.add=false;
			$http.get(API + 'admin/user/tbUser/' + id).then(function (response) {
				$scope.UserByid = response.data;
				$scope.role_id = $scope.UserByid.role;

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

			var url = API + 'admin/user/tbUser';
			$http({
				method : 'POST',
				url : url,
				params : {
					'name':$scope.UserByid.name,
					'email':$scope.UserByid.email,
					'role_id':$scope.role_id.id,
					'password':$scope.p.password,
					
				},
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {
				$scope.alert=true;
				$scope.thongbao=response.data;
			})
			
		}

		if (state == "edit") {
			var url = API + 'admin/user/tbUser/' + id;
			var data = $.param($scope.UserByid);
			console.log($scope.UserByid.role_id);
			$http({
				method : 'PUT',
				url : url,
				params : {
					'name':$scope.UserByid.name,
					'email':$scope.UserByid.email,
					'role_id':$scope.role_id.id,
					
				},
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {
				$scope.alert=true;
				console.log(response.data);
				$scope.thongbao=response.data;
			})
		}
	}

	//xác nhận xoa
	$scope.confirmDelete = function (idd) {
		
		$http.delete(API + 'admin/user/tbUser/' + idd)
		.then(function (response) {
			location.reload();
		})

	}

	$scope.sort = function(keyname){
                            $scope.sortKey = keyname;   //set the sortKey to the param passed
                            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
                    }
});

app.directive('userExist', function($http, $q,API) {
	return {
		restrict:'AE',
		require: 'ngModel',
		link: function(scope, element, attrs, ngModel) {
			ngModel.$asyncValidators.userExist = function(modelValue, viewValue) {
				return $http.post(API + 'admin/user/checkemail', {email: viewValue})
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

