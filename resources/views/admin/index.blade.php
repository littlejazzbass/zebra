@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex align-items-center col-xs-7 col-sm-3">
            <input class="searchbox form-control col-xs-4" type="text" placeholder="検索名">
        </div>
        <div class="col-md-12 col-lg-12">
            <table class="table table-striped sticky_table user_table col-lg-12">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="col-xs-1 col-sm-1 col-md-2 col-lg-2">#</th>
                        <th scope="col" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">氏名</th>
                        <th scope="col" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">種別</th>
                        <th scope="col" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">会社</th>
                        <th scope="col" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">所属</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="" scope="row">{{ $user->id }}</th>
                        <td data-label="氏名">{{ $user->name }}</td>
                        <td data-label="種別">{{ $user->user_status }}</td>
                        <td data-label="会社">{{ $user->company }}</td>
                        <td data-label="所属">{{ $user->group }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
