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
                <table>
                    <tr style="background-color:black">
                        <th style="padding:10px">Name</th>
                        <th style="padding:10px">Business ID</th>
                        <th style="padding:10px">License ID</th>
                        <th style="padding:10px">org code</th>
                        <th style="padding:10px">Update</th>
                        <th style="padding:10px">Delete</th>
                    </tr>

                    @foreach ($merchants as $merchant) 
                    <tr style="background-color:black">
                        <td style="padding:10px">{{$merchant->name}}</td>
                        <td style="padding:10px">{{$merchant->business_id}}</td>
                        <td style="padding:10px">{{$merchant->license_id}}</td>
                        <td style="padding:10px">{{$merchant->org_code}}</td>

                        <td><a href="{{url('delete_merchant', $merchant->id)}}" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{url('update_merchant')}}" class="btn btn-primary">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.scripts')
  </body>
</html>