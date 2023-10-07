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
                <form action="{{url('update_org_admin', $admin->id)}}" method="POST" ectype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label>Name</label>
                        <input type="text" name="name" style="color:black" placeholder="{{$admin->name}}"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>Email</label>
                        <input type="email" name="email" style="color:black" placeholder="{{$admin->email}}"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>NIC</label>
                        <input type="text" name="nic" style="color:black" placeholder="{{$admin->nic}}"></input>
                    </div>

                    <div style="padding: 15px">
                        <label>Organization Code</label>
                        <input type="text" name="org_code" style="color:black" placeholder="{{$admin->org_code}}"></input>
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