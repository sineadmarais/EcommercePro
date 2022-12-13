<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    <!-- Required meta tags  CSS-->
    @include('admin.css')
    <!-- Required meta tags  CSS end-->

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px
        }
        .font_size {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color {
            color: #000;
            padding-bottom: 20px;
        }
        label {
            display: inline-block;
            width: 200px;
            font-size: 13px;
        }
        .div_design {
            padding-bottom: 15px;
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


            <div class="div_center">

                <h1 class="font_size">Update Product</h1>

                <form action="{{url('/update_product_confirm',$product->id)}}" method="post" enctype="multipart/form-data">

                <div class="div_design">

                @csrf
                    <label>Product Title</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                </div>
                <div class="div_design">
                    <label>Product Description</label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="" value="{{$product->description}}">
                </div>
                <div class="div_design">
                    <label>Product Price</label>
                    <input class="text_color" type="number" name="price" placeholder="Write a price" required="" value="{{$product->price}}">
                </div>
                <div class="div_design">
                    <label>Discount Price</label>
                    <input class="text_color" type="number" name="discount_price" placeholder="Discount if applicable" value="{{$product->discount_price}}">
                </div>
                <div class="div_design">
                    <label>Product Quantity</label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="" value="{{$product->quantity}}">
                </div>
                <div class="div_design">
                    <label>Product Category</label>
                    <select class="text_color" name="category" required="">
                        <option value="{{$product->category}}" selected="">{{$product->quantity}}</option>

                        @foreach($category as $category)

                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                        @endforeach

                    </select>
                </div>

                <div class="div_design">
                    <label>Current Product Image:</label>
                    <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}">
                </div>



                <div class="div_design">
                    <label>Change Product Image:</label>
                    <input type="file" name="image">
                </div>

                <div class="div_design">
                    <input type="submit" value="Update Product" class="btn btn-primary">
                </div>
                </form>

            </div>


            </div>
        </div>


    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>