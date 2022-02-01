<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Applicants</title>
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
        <style>
            @page {
                margin: 0px;
            }
            body {
                margin: 0px;
                
            }
            * {
                font-family: Verdana, Arial, sans-serif;
                font-size: 10px;
            }
            .page-break {
                page-break-after: always;
            }
            .table{
                margin-top:80px
            }
          
        </style>
    </head>
    <body>
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="p-3 text-center">
                        <img src="{{base_path(). '/public/frontend/assets/img/logo/jonaLogo.png'}}" alt="logo" width="200" height="200" class="img-fluid rounded-circle" >
                        <br>
                        <span>
                            <strong><h2 style="text-transform: uppercase;border-bottom:5px solid #1f3c6b;padding:5px">Subscribers</h2></strong>
                        </span>
                    </div>
                    <div class="col-lg-12" >
                        <div class="card card-outline card-success applicant">
                            <div class="text-center card-header"></div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped" style="padding-top: 20px">
                                    <thead class="text-white bg-success">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subscribed on</th>
                                            <th>Updated on</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($showAll['downloadSubscribers'] as $count => $subscriber)
                                            <tr>                     
                                                <td >{{ ++$count }}</td>
                                                <td >{{ $subscriber->name }}</td>
                                                <td >{{ $subscriber->email }}</td>
                                                <td >{{ $subscriber->created_at }} , <small>{{ $subscriber->created_at->diffForHumans() }}</small></td>
                                                <td >{{ $subscriber->updated_at }}</td>
                                                
                                            </tr>
                                        @empty
                                          <span class="text-center text-danger">No subscriber registered in our database.</span>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-sm text-center text-white panel-header" style="border-radius: 0 120px 0 120px;background-color: #1f3c6b">
            <strong>Copyright @jmueke</strong>
            <small>
                <center>
                    <strong>Data Downloaded by {{ Auth::user()->name }} </strong><span>On <small class="text-white">( {{ $showAll['currentDate']->toDateTimeString() }} )</small></span>
                </center>
             </small>
        </div>

        <script src="vendor/jquery/jquery.min.js" ></script>
        <script src="vendor/popper/popper.min.js" ></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" ></script>
    </body>
</html>
