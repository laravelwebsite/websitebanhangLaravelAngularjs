app.controller('User_MenuController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'admin/UserMenu/tbUserMenu').then(function (response) {//index api
		$scope.usermenus = response.data;
		console.log(response.data);
	});
	
	/*$scope.init = function () {
	    jQuery('#role_id option:first').remove();
	    
	}*/
	//sự kiện hiển thị model tùy theo add hay edit
	$scope.modal = function (state,id) {
		$scope.alert=false;
		$scope.state = state;
		$http.get(API + 'admin/UserMenu/get-User-admin').then(function (response) {//show api
				$scope.users = response.data;
				$scope.user_id=$scope.users[0];

			});
		$http.get(API + 'admin/menu/tbMenu').then(function (response) {//show api
				$scope.menus = response.data;
				$scope.menu_id=$scope.menus[0];

			});
		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm Menu cho Người dùng";
			$scope.add=true;
			
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Menu cho Người dùng";
			$scope.add=false;
			$scope.id = id;
			$http.get(API + 'admin/UserMenu/tbUserMenu/' + id).then(function (response) {//show api
				$scope.usermenubyId = response.data;
				$scope.user_id=$scope.usermenubyId.user;
				$scope.menu_id=$scope.usermenubyId.menu;
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
			var url = API + 'admin/UserMenu/tbUserMenu';//store api
			$http({
				method : 'POST',
				url : url,
				params : {
					'user_id':$scope.user_id.id,
					'menu_id':$scope.menu_id.id
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
			var url = API + 'admin/UserMenu/tbUserMenu/' + id;//update api
			$http({
				method : 'PUT',
				url : url,
				params : {
					'user_id':$scope.user_id.id,
					'menu_id':$scope.menu_id.id			
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
		
		$http.delete(API + 'admin/UserMenu/tbUserMenu/' + idd)//destroy api
		.then(function (response) {
			location.reload();
		})

	}

	$scope.sort = function(keyname){
                            $scope.sortKey = keyname;   //set the sortKey to the param passed
                            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
                    }
});

