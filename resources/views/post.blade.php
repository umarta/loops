@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <span>Post</span>

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
                                <th>Title</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Author Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->content}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->user->email}}</td>
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
