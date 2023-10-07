<!DOCTYPE html>


<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    <!-- Required meta tags -->
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div class="container" align="center" style="padding-top: 100px">
                <form action="{{url('update_merchant', $merchant->id)}}" method="POST" ectype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label>Merchant Name</label>
                        <input type="text" name="name" style="color:black" placeholder="{{$merchant->name}}"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>business ID</label>
                        <input type="text" name="business_id" style="color:black" placeholder="{{$merchant->business_id}}"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>license ID</label>
                        <input type="text" name="license_id" style="color:black" placeholder="{{$merchant->license_id}}"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>Organization Code</label>
                        <input type="text" name="org_code" style="color:black" placeholder="{{$merchant->org_code}}"></input>
                    </div>
                    <div style="padding: 15px">
                        
                        <input type="submit" class="btn btn-success" ></input>
                    </div>
                </form>
            </div>
            
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.scripts')
  </body>
</html>