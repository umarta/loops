@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <span>Guest List</span>

                        </div>
                        @if(!empty($successMsg))
                            <div class="alert alert-success"> {{ $successMsg }}</div>
                        @endif


                    </div>

                    <div class="card-body table-responsive table-striped">
                        <table id="post" class="table" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>PostID</th>
                                <th>Comment</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->post_id}}</td>
                                    <td>{{$user->comment}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        var content;
        var save_method = 'add';
        $(document).ready(function () {
            $('#form_laporan').submit(function (e) {
                e.preventDefault();
                var start = $('#start_date').val();
                var end = $('#end_date').val();

                window.open("{{url('laporan/rekap?start=')}}" + start + "&end=" + end, "_blank");
            })
        });

    </script>
@endsection
