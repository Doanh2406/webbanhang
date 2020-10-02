@extends('frontend.master')
@section('title','Danh mục sản phẩm')
@section('main')

<div id="wrap-inner">
						<div class="products">
							<h3>sản phẩm nổi bật</h3>
							<div class="product-list row">
								@foreach($featured as $item)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$item->prod_name}}</a></p>
									<p class="price">{{number_format($item->prod_price,0,',','.')}}</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach
							</div>                	                	
						</div>

						<div class="products">
							<h3>sản phẩm mới</h3>
							<div class="product-list row">
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-1.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-2.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-3.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="#">Xem chi tiết</a>
									</div>                      	                        
								</div>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="img/home/product-4.png" class="img-thumbnail"></a>
									<p><a href="#">iPhone 6S Plus 64G</a></p>
									<p class="price">10.000.000</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'/.html')}}">Xem chi tiết</a>
									</div>                      	                      
								</div> 
							</div>    
						</div>
</div>
@stop
					
					