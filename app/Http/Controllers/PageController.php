<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Cart;
use App\Product;
class PageController extends Controller
{
	public function getGiohang()
	{
		$contentCart=Cart::content();
		$total=Cart::total();
		return view('user.page.cart',['cartContent'=>$contentCart,'total'=>$total]);
	}
	public function getAddproduct($slug)
	{
		$product=Product::findBySlug($slug);
		Cart::add(array('id'=>$product->id,'tax'=>0,'name'=>$product->name,'qty'=>1,'price'=>$product->price,'options'=>array('image'=>$product->image,'description'=>$product->description)));
		return redirect('gio-hang');
	}
	public function getXoagiohang($id)
	{
		Cart::remove($id);
		return redirect('gio-hang');
	}
	public function postSuagiohang(Request $request)
	{
		if($request->ajax())
		{
			Cart::update($request->id, $request->soluong);
		}
		
	}
	public function getLienhe()
	{
		return view('user.page.lienhe');
	}
	public function postLienhe(Request $request)
	{
		$this->validate($request,
			[
			'name'=>'required|min:2|max:50', 
			'email'=>'required|email',
			'content'=>'required',
			],
			[
			'name.required'=>'Vui  lòng nhập tên họ tên',
			'name.min'=>'Họ tên tối thiểu 2 ký tự',
			'name.max'=>'Tên quá dài',
			'email.required'=>'Vui lòng nhập email',
			'email.email'=>'Email không đúng định dạng',
			'content.required'=>'Vui lòng nhập nội dung'
			]);
		$data=[
			'name'=>$request->name,
			'email'=>$request->email,
			'title'=>$request->title,
			'content'=>$request->content
		];
		Mail::send('user.page.mail',$data,function($msg){
			$msg->from('huynhphihung0401@gmail.com','Website bán hàng');
			$msg->to('huynhphihung1995@gmail.com')->subject('Bạn nhận được một email phản hồi từ website của bạn');
		});
		echo "<script>
			alert('Cảm ơn email góp ý của bạn,chúng tôi sẽ phản hồi sớm nhất có thể!');
			window.location='".url('/')."'
		</script>";
	}
}
