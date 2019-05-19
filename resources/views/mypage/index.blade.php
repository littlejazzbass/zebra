<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZEBRA</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">ZEBRA</a>
        </nav>
    </header>
    <div class="col-md-12">
        <canvas id="myChart"></canvas>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">スキル</div>
                        <div class="panel-body">
                            <div class="list-group">
                                @foreach($skills as $skill)
                                <a href="{{ route('home')}}?skill_id={{ $skill->id }}" class="list-group-item  {{ $current_skill_id == $skill->id ? 'active' : '' }}">
                                    {{ $skill->title }}
                                </a>
                                @endforeach
                            </div>
                        </div>

                    </nav>
                </div>
                <div class="column col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">詳細</div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>スキル名</th>
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
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
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

        // 乱数生成(0～100)
        var rnd100 = function() {
            return Math.round(Math.random() * 100);
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
                    label: "運動量",
                    backgroundColor: color(colorSet.red).alpha(0.5).rgbString(),
                    borderColor: colorSet.red,
                    pointBackgroundColor: colorSet.red,
                    data: [40, 50, 60, 70, 80]
                }]
            },
            options: {
                animation: false,
                showTooltips: false,
                legend: {
                    position: 'bottom'
                },
                title: {
                    display: true,
                    fontSize: 20,
                    fontColor: '#666',
                    text: '一週間チャート'
                },
                scale: {
                    display: true,
                    pointLabels: {
                        fontSize: 15,
                        fontColor: colorSet.yellow
                    },
                    ticks: {
                        display: true,
                        fontSize: 12,
                        fontColor: colorSet.green,
                        min: 0,
                        max: 100,
                        beginAtZero: true
                    },
                    gridLines: {
                        display: true,
                        color: colorSet.yellow
                    }
                }
            }
        };

        /*
         * チャートの作成
         */
        var myRadar = new Chart($("#myChart"), config);

        var colorNames = Object.keys(colorSet);


    </script>
</body>

</html>
