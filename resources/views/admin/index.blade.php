@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/admin/index.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="search-box col-xs-7 col-sm-6 col-md-6">
            <i class="fas fa-search"></i>
            <input class="searchbox form-control" type="text" placeholder="氏名で検索">
            <select class="depts-select-box form-control" name="depts">
                <option value="all">すべての部署</option>
                @foreach($groups as $group)
                <option value="{{$group->name}}">{{$group->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="table-box col-md-12 col-lg-12">
            <table class="table table-striped user_table col-lg-12">
                <thead class="thead-dark">
                    <tr>
                        <th class="number" scope="col" class="col-xs-1 col-sm-1 col-md-2 col-lg-2">#</th>
                        <th class="name" scope="col" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">氏名</th>
                        <th class="runk" scope="col" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">種別</th>
                        <th class="dept" scope="dept" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">所属</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>

                        <td class="number" scope="row">{{ $user->id }}</th>
                        <td class="name" data-label="氏名">
                            <a href="{{ route('admin.detail',[
                                        'user' => $user->id,
                                        'group' => $user->groups()->first()->id,
                                        'skill' => $user->groups()->first()->skills()->first()->id,
                                    ]) }}">
                                    {{ $user->name }}
                            </a>
                        </td>
                        <td class="runk" data-label="種別">{{ $user->user_status }}</td>
                        <td class="dept" data-label="所属">
                            @foreach($user->groups()->get() as $group)
                            {{ $group->name }}</br>
                            @endforeach
                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
