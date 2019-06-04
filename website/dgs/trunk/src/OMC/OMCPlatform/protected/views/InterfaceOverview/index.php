<div class="title"><h3>OMC北向接口数据核查 > 接口核查概况</h3></div>
<div class="search">
    <form id="form_search" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>

        <div class="list-4">
            <span>周期</span>
            <select name="cycle" id="">
                <option value="1">日</option>
                <option value="2">月</option>
            </select>
        </div>
        <div class="list-4">
            <span>查询时间</span>
            <input type="text" name="begin_time" id="begin_time" value="<?= date('Y-m-d', strtotime('-1 month')); ?>"
                   readonly="readonly">
        </div>
        <div class="list-4">
            <span>属性类型</span>
            <select name="property" id="">
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div class="list-4">
            <input type="submit" value="查询">
        </div>
        <div class="list-4">
            <span>专业</span>
            <select name="specialty" id="">
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-4">
            <span>网元类型</span>
            <select name="network" id="network">
                <option value="CSCF">CSCF</option>
                <option value="NMF">NMF</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-4">
            <span>厂商</span>
            <select name="firm" id="firm">
                <option value="全部">全部</option>
                <option value="华为">华为</option>
                <option value="中兴">中兴</option>
                <option value="烽火">烽火</option>
                <option value="爱立信">爱立信</option>
                <option value="诺西">诺西</option>
            </select>
        </div>
    </form>
</div>
<div id="main11" class="echarts" style="width:650px;height:400px;left: 200px;"></div>


<div class="search">
    <form id="form_search2" method="post" action="">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <div class="list-5">
            <span>周期</span>
            <select name="cycle" id="">
                <option value="1">日</option>
                <option value="2">月</option>
            </select>
        </div>
        <div class="list-5">
            <span>开始时间</span>
            <input type="text" name="begin_time" id="begin_time2"
                   value="<?= date('Y-m-d', strtotime('-1 month')); ?>" readonly="readonly">
        </div>
        <div class="list-5">
            <span>结束时间</span>
            <input type="text" name='end_time' id="end_tiem2" value="<?= date('Y-m-d', time()); ?>"
                   readonly="readonly">
        </div>
        <div class="list-5"></div>
        <div class="list-5">
            <input type="submit" class="search2" value="查询">
        </div>
        <div class="list-5">
            <span>专业</span>
            <select name="specialty">
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-5">
            <span>网元类型</span>
            <select name="network">
                <option value="CSCF">CSCF</option>
                <option value="NMF">NMF</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-5">
            <span>厂商</span>
            <select name="firm">
                <option value="全部">全部</option>
                <option value="华为">华为</option>
                <option value="中兴">中兴</option>
                <option value="烽火">烽火</option>
                <option value="爱立信">爱立信</option>
                <option value="诺西">诺西</option>
            </select>
        </div>
        <div class="list-5">
            <span>属性类型</span>
            <select name="property" id="">
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div class="list-5">
            <input type="hidden" name="export" value="no">
            <input type="submit" id="btn_export" value="导出">
        </div>
    </form>
</div>

<div id="main-table">
    <table border="1" cellspacing="0">
        <tr>
            <td></td>
            <td>日期</td>
            <td>专业</td>
            <td>网元类型</td>
            <td>厂商</td>
            <td>属性类型</td>
            <td>总项数</td>
            <td>A类支持率</td>
            <td>B类支持率</td>
            <td>B类支持率</td>
            <td>CA类支持率</td>
            <td>CB类支持率</td>
            <td>CC类支持率</td>
            <td>总支持率</td>
        </tr>
        <tr>
            <td>1</td>
            <td>20180225</td>
            <td>无限网</td>
            <td>ENB</td>
            <td>华为</td>
            <td>属性资源</td>
            <td>261</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>78.10%</td>
            <td>92.80%</td>
            <td>88.10%</td>
        </tr>
        <tr>
            <td>1</td>
            <td>20180225</td>
            <td>无限网</td>
            <td>ENB</td>
            <td>华为</td>
            <td>属性资源</td>
            <td>261</td>
            <td class="un-qualified">98%</td>
            <td class="un-qualified">89%</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>78.10%</td>
            <td>92.80%</td>
            <td>88.10%</td>
        </tr>
        <tr>
            <td>1</td>
            <td>20180225</td>
            <td>无限网</td>
            <td>ENB</td>
            <td>华为</td>
            <td>属性资源</td>
            <td>261</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>78.10%</td>
            <td>92.80%</td>
            <td>88.10%</td>
        </tr>
        <tr>
            <td>1</td>
            <td>20180225</td>
            <td>无限网</td>
            <td>ENB</td>
            <td>华为</td>
            <td>属性资源</td>
            <td>261</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>100%</td>
            <td>92.80%</td>
            <td>78.10%</td>
            <td>92.80%</td>
            <td>88.10%</td>
        </tr>
    </table>
</div>
<div class="page">
    <a href="javaScript:;" class="item" data-page="1">第一页</a>
    <a href="javaScript:;" class="item" data-page="1">上一页</a>
    <a href="javaScript:;" class="item active" data-page="1">1</a>
    <a href="javaScript:;" class="item" data-page="1">1</a>
    <a href="javaScript:;" class="item" data-page="2">2</a>
    <a href="javaScript:;" class="item" data-page="3">3</a>
    <a href="javaScript:;" class="item" data-page="4">4</a>
    <a href="javaScript:;" class="item" data-page="5">5</a>
    <a href="javaScript:;" class="item" data-page="6">6</a>
    <a href="javaScript:;" class="item" data-page="7">7</a>
    <a href="javaScript:;" class="item" data-page="8">8</a>
    <a href="javaScript:;" class="item" data-page="9">9</a>
    <a href="javaScript:;" class="item" data-page="9">9</a>
    <a href="javaScript:;" class="item" data-page="10">10</a>
    <a href="javaScript:;" class="item" data-page="11">12</a>
    <a href="javaScript:;" class="item" data-page="12">12</a>
    <a href="javaScript:;" class="item" data-page="1">下一页</a>
    <a href="javaScript:;" class="item" data-page="1">最后一页</a>
    <span>
        每页显示
        <select name="limmit">
            <option value="5">5</option>
            <option value="10" selected="selected">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        条记录
    </span>
</div>

<!-- 时间插件 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/laydate/laydate.js"></script>
<!-- 图形化插件 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/echars/echarts.min.js"></script>
<script>
    $(document).ready(function () {
        //日期插件
        var options = {elem: '', event: 'focus', festival: true, elem: '#begin_time'};
        laydate(options);
        var options2 = {elem: '', event: 'focus', festival: true, elem: '#begin_time2'};
        laydate(options2);
        var options3 = {elem: '', event: 'focus', festival: true, elem: '#end_tiem2'};
        laydate(options3);


        var myChart = echarts.init(document.getElementById('main11'));
        var option = {
            title: {
                text: '华为厂商CSCF网元支持率',
                left: '48%',
                top: '2%',
                textAlign: 'center'
            },
            legend: {
                data: ['直接访问']//与seriesname一致
            },
            tooltip: {
                trigger: 'item',
                formatter: '{c}%'
            },
            xAxis: {
                data: ['A类', 'B类', 'C类', 'CA类', 'CB类', 'CC类', '总支持率']
            },
            yAxis: [
                {
                    type: 'value',
                    axisLabel: {
                        formatter: '{value} %',
                    },
                    axisLine: {
                        show: true  //y轴是否隐藏
                    },
                    axisTick: {
                        show: false
                    },
                    splitLine: {
                        show: true,
                        lineStyle: {
                            type: "dotted",
                        }
                    }
                }
            ],
            series: [{
                name: '华为厂商CSCF网元支持率',    //柱状图的名称
                type: 'bar',    //实现柱状图
                data: ['100','98','23','23','78','89','90'],
                itemStyle: {
                    normal: {
                        // 定制显示（按顺序）
                        color: function (params) {
                            var colorList = ['#3580b7', '#d74844', '#93bc58', '#856299', '#00adc3', '#ff8e3d', '#214d6d'];
                            return colorList[params.dataIndex]
                        },
                        label: {
                            show: true,
                            position: 'top',
                            formatter: '{c}%'//百分比显示
                        }
                    },
                },
            }]
        };
        myChart.setOption(option);

    });
</script>
