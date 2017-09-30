app.controller('CategoryController' ,function ($scope,$http,API) {

	//hiển thị danh sách
	$http.get(API + 'tbCategory').then(function (response) {//index api
		$scope.categories = response.data;
		console.log($scope.categories);
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
			$http.get(API + 'tbCategory/' + id).then(function (response) {//show api
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
			var url = API + 'tbCategory';//store api
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
				
				location.reload();
			})
			
		}
		//var url = API + 'admin/menu/tbMenu/create'; (get) create api
		//var url = API + 'admin/menu/tbMenu/' + id + '/edit'; (get) edit api
		if (state == "edit") {
			var url = API + 'tbCategory/' + id;//update api
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
				console.log(response.data);
				$scope.thongbao=response.data;
				location.reload();
			})
		}
	}

	//xác nhận xoa
	$scope.confirmDelete = function (idd) {
		
		$http.delete(API + 'tbCategory/' + idd)//destroy api
		.then(function (response) {
			location.reload();
		})

	}

	$scope.sort = function(keyname){
                            $scope.sortKey = keyname;   //set the sortKey to the param passed
                            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
                    }
});

