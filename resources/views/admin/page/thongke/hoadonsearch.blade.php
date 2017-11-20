
<table class="table table-hover display table-bordered">
	<thead>
		<tr>
			<th><i class="fa fa-bookmark"></i>ID</th>
			<th ><i class=" fa fa-user"></i>EMAIL</th>    
			<th ><i class=" fa fa-user"></i>PHONE</th>   
			<th><i class=" fa fa-user"></i>PRICE</th> 
		</tr>
	</thead>
	<tbody>
		<sample-text></sample-text>
		<div orientable></div>

		@foreach($hoadonsearch as $hd)
		<tr>
			<td class="text-center"><span>{{$hd->Mahoadon}}</span></td>
			<td class="text-center"><span>{{$hd->email}}</span></td>
			<td class="text-center"><span>{{$hd->phone}}</span></td>
			<td class="text-center"><span>{{$hd->price}}</span></td>
		</tr>
		@endforeach
	</tbody>
</table>
<div style="float: right;color: green;font-weight: bold;font-size: 20px">Tổng thu nhập: {{number_format($tongtien)}} VND</div>