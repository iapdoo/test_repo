@if(count($bu )> 0)



            @foreach($bu as $key=>$b)
                @if($key %3 == 0 && $key != 0 )
                    <div class="clearfix ">

                    </div>
                @endif
            <div class="col-md-4 pull-right">
                <div class="productbox">
                    <img src="http://lorempixel.com/460/250/" class="img-responsive">
                    <div class="producttitle">{{$b->bu_name}}</div>
                    <p class="text-justify">{{str_limit($b->bu_small_dis ,30)}}</p>
                    <div class="productprice"><div class="pull-left">
                            <a href="#" class="btn btn-primary btm-sm" role="button">
                                اظهر التفاصيل  <i class="fa fa-plus" style="color: whitesmoke;">

                                </i></a></div><div class="pricetext">{{$b->bu_price}}</div></div>
                </div>
            </div>

    @endforeach


    @else
        <div class="alert alert-danger">
لا يوجد اي عقار
        </div>
@endif
