@extends('frontend.master')
@section('title','Danh muc san pham')
@section('main')
	<link rel="stylesheet" href="css/category.css">
	

					<div id="wrap-inner">
						<div class="products">
							<h3>{{$catename->cate_name}}</h3>
							@foreach($items as $item)
								<div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-3 text-center post " style="float: left">
									
									<a href="#" ><img  height="150px" src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$item->prod_name}}</a></p>
									<p class="price">{{number_format($item->prod_price,0,',','.')}}</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach 
								            	                	
						</div>


						
					</div>

@stop				
				