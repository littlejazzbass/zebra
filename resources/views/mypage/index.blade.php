@extends('layout')

@section('content')
<div class="container">
    <div class="row">

        <!-- ユーザー名 -->
        <div class="col-sm-12 text-center">{{ $user->name }}さんのスキル情報</div>

        <!-- スキルグラフ -->
        <div class="charts col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-8 col-md-7">
                <canvas id="myChart2"></canvas>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-5">
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <!-- 所属グループ -->
        <div class="col-md-12">
            @foreach($groups as $group)
            <button type="button" onclick="{{ route('home') }}?group_id={{ $group->id }}" class="col-md-3 btn btn-default">
                {{ $group->name }}
            </button>
            @endforeach
        </div>

        <!-- スキルセット -->
        <div class="col-xs-12 col-sm-12 col-md-4">
            <nav class="panel panel-default">
                <div class="panel-heading">スキル</div>
                <div class="panel-body">
                    <div class="list-group">
                        @foreach($skills as $skill)
                        <a href="{{ route('home')}}?skill_id={{ $skill->id }}" class="list-group-item ">
                            {{ $skill->name }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </nav>
        </div>

        <!-- サブスキルセット -->
        <div class="col-xs-12 col-sm-12 col-md-8">
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
                                <td>{{ $subskill->title }}</td>
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
                    '{{ $subskill->title }}',
                @endforeach
            ],
            datasets: [{
                label: '{{ $current_skill->title }}',
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
                text: '{{ $current_skill->title }}'
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
