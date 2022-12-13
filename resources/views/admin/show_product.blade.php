<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags  CSS-->
    @include('admin.css')
    <!-- Required meta tags  CSS end-->


    <style type="text/css">
        .center{
            margin: auto;
            width:50%;
            border: 2px solid #ffffff;
            text-align: center;
            margin-top:10px;
        }
        .div_center {
            text-align: center;
            padding-top: 40px
        }
        .font_size {
            font-size: 40px;
            padding-bottom: 40px;
            text-align: center;
        }
        .image_size {
            width: 100%;
            height: 100%;
        }
        .th_colour {
            background: skyblue;
        }
        .th_design {
            padding: 30px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- end partial -->
  
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- end partial -->

        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

            <div class="alert alert-success"> 
                
            <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{session()->get('message')}}

            </div>

          @endif
        
            <h2 class="font_size">All Products</h2>

            <table class="center">
                <tr  class="th_colour">
                    <th class="th_design">Product Title</th>
                    <th class="th_design">Description</th>
                    <th class="th_design">Quantity</th>
                    <th class="th_design">Category</th>
                    <th class="th_design">Price</th>
                    <th class="th_design">Discount Price</th>
                    <th class="th_design">Product Image</th>
                    <th class="th_design">Delete</th>
                    <th class="th_design">Edit</th>
                </tr>
            @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}0</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                    <img class="image_size" src="/product/{{$product->image}}">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="{{url('delete_product',$product->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                    </td>
                </tr>

                @endforeach
            </table>

        </div>
    </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>