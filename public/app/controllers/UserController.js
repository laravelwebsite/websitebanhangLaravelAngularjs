app.controller('UserController' ,function ($scope,$http,API) {

	$http.post(API + 'admin/user/list').then(function (response) {
		$scope.users = response.data;

	});
	
	/*$scope.init = function () {
	    jQuery('#role_id option:first').remove();
	    
	}*/
	
	$scope.modal = function (state,id) {
		$scope.state = state;
		
		$http.post(API+ 'admin/user/getRolename').then(function(response){

			$scope.role=response.data;
			$scope.role_id=$scope.role[1];
			$scope.p={};


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
			$http.get(API + 'admin/user/edit/' + id).then(function (response) {
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

	$scope.delete=function(idd){
		$scope.idd=idd;
		$("#recordDel").modal("show");
	}
	var checkEmail=function($event){
		console.log($event.target.value);
		
	}
	$scope.save = function (state,id) {
		if (state == "add") {

			var url = API + 'admin/user/add';
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
				
				location.reload();
			})
			
		}

		if (state == "edit") {
			var url = API + 'admin/user/edit/' + id;
			var data = $.param($scope.UserByid);
			console.log(data);
			$http({
				method : 'POST',
				url : url,
				data : data,
				headers : {'Content-Type':'application/x-www-form-urlencoded'}
			})
			.then(function (response) {
				console.log(response);
				location.reload();
			})
			.then(function (response) {
				
				alert('Xảy ra lỗi vui lòng kiểm tra log');
			});
		}
	}

	$scope.confirmDelete = function (idd) {
		
		$http.get(API + 'admin/user/delete/' + idd)
		.then(function (response) {
			console.log(response);
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

