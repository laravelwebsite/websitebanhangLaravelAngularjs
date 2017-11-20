<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Cart;
use View;
use App\Product;
use App\HoaDon;
use App\HoaDonSanPham;
use DB;
use App\Category;
use App\User;
use App\DetailAccount;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
	public function getGiohang()
	{
		$contentCart=Cart::content();
		$total=Cart::total();
		$count=Cart::count();
		if(Auth::check())
		{
			$user=Auth::user();
			$detailAc=DetailAccount::where('user_id',$user->id)->first();
			return view('user.page.cart',['cartContent'=>$contentCart,'total'=>$total,'count'=>$count,'userLogin'=>$user,'detailAc'=>$detailAc]);
		}
		else
		{

			return view('user.page.cart',['cartContent'=>$contentCart,'total'=>$total,'count'=>$count]);
		}
		
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

	public function getHoaDon(Request $request)
	{
		$this->validate($request,
			[
			'name'=>'required|min:2|max:50', 
			'email'=>'required|email',
			'phone'=>'required|numeric',
			'address'=>'required'
			],
			[
			'name.required'=>'Vui  lòng nhập tên họ tên',
			'name.min'=>'Họ tên tối thiểu 2 ký tự',
			'name.max'=>'Tên quá dài',
			'email.required'=>'Vui lòng nhập email',
			'email.email'=>'Email không đúng định dạng',
			'phone.numeric'=>'Số điện thoại không đúng',
			'address.required'=>'Vui lòng nhập địa chỉ'
			]);
		$cart=Cart::content();
		$total=Cart::total();
		$hoadon=new HoaDon;
		$mahoadon=str_random(10);
		$checkmahoadon=HoaDon::where('Mahoadon',$mahoadon)->get();
		while($checkmahoadon->count()>0)
		{
			$mahoadon=str_random(10);
			$checkmahoadon=HoaDon::where('Mahoadon',$mahoadon)->get();
		}
		$hoadon->Mahoadon=$mahoadon;
		$hoadon->name=$request->name;
		$hoadon->email=$request->email;
		$hoadon->phone=$request->phone;
		$hoadon->address=$request->address;
		$hoadon->status=1;
		$price=Cart::total();
		$hoadon->price=str_replace(',','',$price);
		$hoadon->save();
		
		
		foreach($cart as $c)
		{
			$hoadonsanpham=new HoaDonSanPham;
			$hoadonsanpham->mahoadon=$hoadon->Mahoadon;
			$hoadonsanpham->product_id=$c->id;
			$hoadonsanpham->price=$c->price;
			$hoadonsanpham->qty=(int)$c->qty;
			$hoadonsanpham->subtotal=$c->subtotal;
			$hoadonsanpham->save();
		}
		$data=[
		'name'=>$request->name,
		'email'=>$request->email,
		'address'=>$request->address,
		'phone'=>$request->phone,
		'total'=>Cart::total(),
		'cart'=>Cart::content()
		];
		try
		{
			Mail::send('user.page.mailthanks',['data'=>$data],function($msg) use ($data){
			$msg->from('huynhphihung0401@gmail.com','Website bán hàng');
			$msg->to($data["email"])->subject('Thông tin hóa đơn');
			});
		}
		catch
		{
			return route("errorMail");
		}
		
		Cart::destroy();
		echo "<script>
		alert('Cảm ơn bạn đã mua hàng,chúng tôi sẽ liên hệ để xác nhận đơn hàng sớm nhất!! Vui lòng kiểm tra email để theo dõi tình trạng đơn hàng');
		window.location='".url('/')."'
	</script>";

}
public function errorMail()
{
	return view("errorMail");
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
	try
	{
		Mail::send('user.page.mail',$data,function($msg){
			$msg->from('huynhphihung0401@gmail.com','Website bán hàng');
			$msg->to('huynhphihung1995@gmail.com')->subject('Bạn nhận được một email phản hồi từ website của bạn');
		});
	}
	catch
	{
		return route("errorMail");
	}

	echo "<script>
	alert('Cảm ơn email góp ý của bạn,chúng tôi sẽ phản hồi sớm nhất có thể!');
	window.location='".url('/')."'
	</script>";
}

public function getSearch(Request $request)
{
	$tukhoa=$request->tukhoa;
	$productsearch=Product::where('name','like','%'.$tukhoa.'%')->orWhere('price','like','%'.$tukhoa.'%')->orWhere('slug','like','%'.$tukhoa.'%')->orWhere('title','like','%'.$tukhoa.'%')->paginate(15);
	return view('user.page.searchproduct',['searchproduct'=>$productsearch]);
}
public function getProductSearch(Request $request)
{
	if($request->ajax())
	{
		$tukhoa=$request->tukhoa;

		$productsearch=Product::where('name','like','%'.$tukhoa.'%')->orWhere('price','like','%'.$tukhoa.'%')->orWhere('slug','like','%'.$tukhoa.'%')->orWhere('title','like','%'.$tukhoa.'%')->paginate(15);
		return View::make('user.page.searchproductrender',['productsearch'=>$productsearch]);
	}
}
public function getLocproduct(Request $request)
{
	if($request->ajax())
	{
		$tbproduct=DB::table('categories')
		->join('sub_categories','categories.id','=','sub_categories.categories_id')
		->join('detail_sub_categories','sub_categories.id','=','detail_sub_categories.sub_categories_id')
		->join('products','detail_sub_categories.id','=','products.detail_sub_categories_id');
		$val=$request->val;
		$cate_id=[];
		foreach($val as $v)
		{

			$cate=Category::findBySlug($v);
			array_push($cate_id, $cate->id);
		}
		$productsearch=$tbproduct->whereIn('categories_id',$cate_id)->paginate(10);
		//$productsearch=Product::where('name','like','%'.$tukhoa.'%')->orWhere('price','like','%'.$tukhoa.'%')->orWhere('slug','like','%'.$tukhoa.'%')->orWhere('title','like','%'.$tukhoa.'%')->paginate(15);
		return View::make('user.page.searchproductrender',['productsearch'=>$productsearch]);
	}
}

}
