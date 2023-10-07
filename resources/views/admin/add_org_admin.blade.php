<!DOCTYPE html>


<html lang="en">
  <head>
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
                <form action="{{url('create_org_admin')}}" method="POST" ectype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label>Name</label>
                        <input type="text" name="name" style="color:black" placeholder="Merchant name here"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>Email</label>
                        <input type="email" name="email" style="color:black" placeholder="Email here"></input>
                    </div>
                    <div style="padding: 15px">
                        <label>NIC</label>
                        <input type="text" name="nic" style="color:black" placeholder="NIC ID here"></input>
                    </div>

                    <div style="padding: 15px">
                        <label>Password</label>
                        <input type="password" name="password" style="color:black" placeholder="Password here"></input>
                    </div>

                    <div style="padding: 15px">
                        <label>Organization Code</label>
                        <input type="text" name="org_code" style="color:black" placeholder="org code here"></input>
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