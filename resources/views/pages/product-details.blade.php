@extends('welcome')
@section('content')

<div class="col-sm-9 padding-right">
<h1 class="text-center">Product Details</h1>
            <div class="row" id="gradient">
                <div class="col-md-4">
                    <img src="{{url('images/'.$all_details->product_image)}}" class="img-responsive">
                </div>
                <div class="col-md-8" id="overview">
                   <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="success">Product Name: </td>
                                    <td>{{$all_details->product_name}}</td>
                                </tr>
                                <tr>
                                    <td class="success">Product Price: </td>
                                    <td>{{$all_details->product_price}}</td>
                                </tr>
                                <tr>
                                    <td class="success">Product Size: </td>
                                    <td>{{$all_details->product_size}} inc</td>
                                </tr>
                                <tr>
                                    <td class="success">Product Short Description: </td>
                                    <td>{{$all_details->product_short_description}}</td>
                                </tr>
                                <tr>
                                    <td class="success">Product Color: </td>
                                    <td>{{$all_details->product_color}}</td>
                                </tr>
                                <form action="{{ route('add-to-cart',$all_details->product_id) }}" method="post">
                                @csrf
                                <tr>
                                    <td class="success">Product Quantity</td>
                                    <td><input type="number" name="product_qty" value="1"></td>
                                    <td><input type="hidden" value="{{$all_details->product_id}}" name="product_id"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                           <input type="submit" value="Add to card" class="btn btn-primary">
                        </div>
                        </form>
                        
                        
             </div>
            </div>
            </div>



<style>
    .pb-product-details-ul {
        list-style-type: none;
        padding-left: 0;
        color: black;
    }

        .pb-product-details-ul > li {
            padding-bottom: 5px;
            font-size: 15px;
        }

    #gradient {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#feffff+0,ddf1f9+31,a0d8ef+62 */
        background: #feffff; /* Old browsers */
        background: -moz-linear-gradient(left, #feffff 0%, #ddf1f9 31%, #a0d8ef 62%); /* FF3.6-15 */
        background: -webkit-linear-gradient(left, #feffff 0%,#ddf1f9 31%,#a0d8ef 62%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right, #feffff 0%,#ddf1f9 31%,#a0d8ef 62%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#a0d8ef',GradientType=1 ); /* IE6-9 */
        border: 1px solid #f2f2f2;
        padding: 20px;
    }

    #hits {
        border-right: 1px solid white;
        border-left: 1px solid white;
        vertical-align: middle;
        padding-top: 15px;
        font-size: 17px;
        color: white;
    }

    #fan {
        vertical-align: middle;
        padding-top: 15px;
        font-size: 17px;
        color: white;
    }

    .pb-product-details-fa > span {
        padding-top: 20px;
    }
</style>
  
@endsection
