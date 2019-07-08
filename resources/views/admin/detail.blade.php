@extends('layout')

@section('styles')
<link rel="stylesheet" href="/css/admin/detail.css">
@endsection

@section('content')
<div class="container">
    <div class="row">

        <!-- ユーザー名 -->
        <div class="col-sm-12 text-center">{{ $user->name }}さんの情報</div>

        <div class="border col-md-12">
            <p class="title-graph">評価グラフ</p>
        </div>
        <!-- スキルグラフ -->
        <div class="charts col-xs-12 col-sm-12 col-md-12 skill-charts">
            <div class="col-xs-12 col-sm-8 col-md-7">
                <canvas id="myChart2"></canvas>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-5">
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <!-- 所属グループ -->
        <div class="border col-md-12">
            <p class="title-depts">所属</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 groups">
            @foreach($groups as $group)
            <a href="{{ route('admin.detail',[
                    'user' => $user->id,
                    'group' => $group->id,
                    'skill' => $group->skills()->first()->id,
                ]) }}">
                <button type="button"
                class="col-md-3 btn btn-default {{ $current_group->id === $group->id ? 'active' : '' }}">
                {{ $group->name }}
                </button>
            </a>
            @endforeach
        </div>

        <div class="border col-md-12">
            <p class="title-depts">評価項目</p>
        </div>
        <!-- スキルセット -->
        <div class="col-xs-12 col-sm-12 col-md-4 mt-5 skills">
            <nav class="panel panel-default">
                <div class="panel-heading">スキル</div>
                <div class="panel-body">
                    <div class="list-group">
                        @foreach($skills as $skill)
                        <a href="{{ route('admin.detail',[
                                'group' => $current_group->id,
                                'skill'=> $skill->id,
                                'user' => $user->id
                            ])}}"
                            class="list-group-item {{ $current_skill->id === $skill->id ? 'active' : '' }}">
                            {{ $skill->name }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </nav>
        </div>

        <!-- サブスキルセット -->
        <div class="col-xs-12 col-sm-12 col-md-8 mt-5 subskills">
            <div class="panel panel-default">
                <div class="panel-heading">詳細</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>サブスキル名</th>
                                <th>評価</th>
                                <th>更新日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subskills as $subskill)
                            <tr>
                                <td>{{ $subskill->name }}</td>
                                <td>
                                    <span>
                                        @for($i = 0; $i < $subskill->evaluation; $i++)
                                            ★
                                        @endfor
                                    </span>
                                </td>
                                <td>{{ $subskill->formatted_updated_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script>
    // 色の設定
    var colorSet = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        blue: 'rgb(54, 162, 235)',
        purple: 'rgb(153, 102, 255)',
        grey: 'rgb(201, 203, 207)'
    };

    // 色のRGB変換
    var color = Chart.helpers.color;

    /*
     * チャートの初期設定
     */
    var config = {
        type: 'radar',
        data: {
            labels: [
                @foreach($subskills as $subskill)
                    '{{ $subskill->name }}',
                @endforeach
            ],
            datasets: [{
                label: '{{ $current_skill->name }}',
                backgroundColor: color(colorSet.green).alpha(0.5).rgbString(),
                borderColor: colorSet.green,
                pointBackgroundColor: colorSet.green,
                data: [
                    @foreach($subskills as $subskill)
                        {{$subskill->evaluation}},
                    @endforeach
                ]
            }]
        },
        options: {
            showTooltips: false,
            legend: {
                position: 'bottom'
            },
            title: {
                display: true,
                fontSize: 12,
                fontColor: '#666',
                text: '{{ $current_skill->name }}'
            },
            scale: {
                display: true,
                pointLabels: {
                    fontSize: 8,
                    fontColor: 'rgb(67,74, 84)'
                },
                ticks: {
                    display: true,
                    fontSize: 8,
                    fontColor: colorSet.green,
                    min: 0,
                    max: 5,
                stepSize: 1,
                    beginAtZero: true
                },
                gridLines: {
                    display: true,
                    color: colorSet.grey
                }
            }
        }
    };
    var config2 = {
        type: 'line',
        data: {
            labels: ["Item1", "Item2", "Item3", "Item4", "Item5", "Item6", "Item7"],
            datasets: [
                {
                label: "Chart-1",
                borderColor: colorSet.green,
                data: [20, 26, 12, 43, 33, 21, 29],
                },
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom'//ラベルの位置
            },
            title: {
                display: true,
                fontSize: 12,
                fontColor: '#666',
                text: '成長度'
            },
            elements:{
                line: {
                    tension: 0.2, //ベジェ曲線のレベル
                }
            },
        }
    };

    /*
     * チャートの作成
     */
    var myRadar = new Chart(document.getElementById('myChart'), config);
    var myRadar2 = new Chart(document.getElementById('myChart2'),config2)
    var colorNames = Object.keys(colorSet);
</script>
@endsection
