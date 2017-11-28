app.controller('ProductController' ,['$scope','Upload','$http','API','$timeout',function ($scope,Upload,$http,API,$timeout) {

	
	$http.get(API + 'tbProduct').then(function (response) {//index api
		$scope.productt = response.data;
	});
	$http.get(API + 'admin/product/tbProduct').then(function (response) {//index api
		$scope.products = response.data;
		
	});

	$http.get(API+ 'admin/category/tbCategory').then(function(response){

		$scope.cate=response.data;
		$scope.catename=$scope.cate[0];
		$http.get(API+ 'admin/subcategory/getSubByCate/'+$scope.catename.id).then(function(response){
			$scope.subcate=response.data;
			$scope.subcatename=$scope.subcate[0];
			$http.get(API+ 'admin/detailsubcategory/getDeSubBySub/'+$scope.subcatename.id).then(function(response){
				$scope.desubcate=response.data;
				$scope.desubcatename=$scope.desubcate[0];

			})
		})

	});

	$scope.getSubcate=function()
	{
		$scope.idcate=$scope.catename.id;
		$http.get(API+ 'admin/subcategory/getSubByCate/'+$scope.idcate).then(function(response){
			$scope.subcate=response.data;
			$scope.subcatename=$scope.subcate[0];
			$http.get(API+ 'admin/detailsubcategory/getDeSubBySub/'+$scope.subcatename.id).then(function(response){
				$scope.desubcate=response.data;
				$scope.desubcatename=$scope.desubcate[0];

			})

		})
	}
	$scope.getDeSubcate=function()
	{
		$http.get(API+ 'admin/detailsubcategory/getDeSubBySub/'+$scope.subcatename.id).then(function(response){
			$scope.desubcate=response.data;
			$scope.desubcatename=$scope.desubcate[0];

		})
	}
	
	$scope.modal = function (state,id) {
		
		$scope.state = state;
		$scope.chuoi=[];
		$scope.alert=false;
		$scope.check=false;
		$scope.file={};
		$scope.files={};
		switch (state) {
			case "add" :
			$scope.frmTitle = "Thêm Product";
			$scope.add=true;
			$("#myModal").modal('show');
			break;
			case "edit" :
			$scope.frmTitle = "Sửa Product";
			$scope.add=false;
			$scope.id = id;
			$http.get(API+ 'admin/product/tbProduct/'+$scope.id).then(function(response){
				$scope.product=response.data;
				$scope.split = $scope.product.album.split('|');
				$scope.chuoi =$scope.split;
				$scope.catename=$scope.product.detailsubcategory.subcategory.category;
				$http.get(API+ 'admin/subcategory/getSubByCate/'+$scope.catename.id).then(function(response){
					$scope.subcate=response.data;
					$scope.subcatename=$scope.product.detailsubcategory.subcategory;
					$http.get(API+ 'admin/detailsubcategory/getDeSubBySub/'+$scope.subcatename.id).then(function(response){
						$scope.desubcate=response.data;
						$scope.desubcatename=$scope.product.detailsubcategory;

					})
				})
			})
			$("#myModal").modal('show');
			break;
			case "album" :
			$scope.frmTitle = "Sửa Album ảnh";
			$scope.album=true;
			$scope.iddd = id;
			$http.get(API+ 'admin/product/tbProduct/'+$scope.iddd).then(function(response){
				$scope.product=response.data;
				$scope.split = $scope.product.album.split('|');
				$scope.chuoi =$scope.split;
			})
			$("#myModal2").modal('show');
			break;
			default :
			$scope.frmTitle = "Không Biết";
			break;
		}
		

	}
	
	$scope.checked=function()
	{
		$scope.check=true;
	}
	
	$scope.delete=function(idd){
		$scope.idd=idd;
		$("#recordDel").modal("show");
	}
	$scope.deleteAlbum=function(stop,idd){
		$http.post(API + 'admin/product/deleteAlbum/' + $scope.iddd+'/'+stop)//destroy api
		.then(function (response) {
			$http.get(API+ 'admin/product/tbProduct/'+$scope.iddd).then(function(response){
				$scope.productc=response.data;
				$scope.split = $scope.productc.album.split('|');
				$scope.chuoi =$scope.split;
			})
		})
	}
	$scope.close=function()
	{
		$("#myModal").modal('hide');
		location.reload();
	}
	
	$scope.save = function (state,id,file) {
		if(file==null)
		{
			file={};
		}
		if (state == "add") {
			var url = API + 'admin/product/tbProduct';//store api
			file.upload = Upload.upload({
				url: url,
				method : 'POST',
				data: {detail_sub_categories_id: $scope.desubcatename.id, 
					name:$scope.product.name,
					title:$scope.product.title,
					description:$scope.product.description,
					price:$scope.product.price,
					key:$scope.product.key,
					file: file
				},
			});
			file.upload.then(function (response) {
				$timeout(function () {
					location.reload();
				});
			}, function (response) {
				if (response.status > 0)
					$scope.errorMsg = response.status + ': ' + response.data;
			});
			
		}
		
		if (state == "edit") {

			var url = API + 'admin/product/tbProduct/' + id;//update api
			file.upload = Upload.upload({
				url: url,
				method : 'POST',
				data: {
					_method: 'PUT',
					detail_sub_categories_id: $scope.desubcatename.id, 
					name:$scope.product.name,
					title:$scope.product.title,
					description:$scope.product.description,
					price:$scope.product.price,
					key:$scope.product.key,
					file: file
				},

			});
			file.upload.then(function (response) {
				$timeout(function () {
					location.reload();
				});
			}, function (response) {
				if (response.status > 0)
					$scope.errorMsg = response.status + ': ' + response.data;
			});
		}
	}

	
	$scope.confirmDelete = function (idd) {
		
		$http.delete(API + 'admin/product/tbProduct/' + idd)//destroy api
		.then(function (response) {
			location.reload();
		})
		

	}
	$scope.sort = function(keyname){
                            $scope.sortKey = keyname;   //set the sortKey to the param passed
                            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
                        }
                        $scope.uploadFiles = function(files, errFiles,iddd) {
                        	$scope.files = files;
                        	$scope.url='admin/product/album/'+iddd;
                   
                        	$scope.errFiles = errFiles;
                        	angular.forEach(files, function(file) {
                        		file.upload = Upload.upload({
                        			url: $scope.url,
                        			method : 'POST',
                        			data: {
                        				file: file
                        			}
                        		});

                        		file.upload.then(function (response) {
                        			$timeout(function () {
                        				$http.get(API+ 'admin/product/tbProduct/'+$scope.iddd).then(function(response){
                        					$scope.productc=response.data;
                        					$scope.split = $scope.productc.album.split('|');
                        					$scope.chuoi =$scope.split;
                        				})
                        				file.result = response.data;
                        			});
                        		}, function (response) {
                        			if (response.status > 0)
                        				$scope.errorMsg = response.status + ': ' + response.data;
                        		}, function (evt) {
                        			file.progress = Math.min(100, parseInt(100.0 * 
                        				evt.loaded / evt.total));
                        		});
                        	});
}
}]);
