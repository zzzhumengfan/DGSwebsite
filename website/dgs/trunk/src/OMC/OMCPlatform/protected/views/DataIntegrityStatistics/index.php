<div class="title"><h3>OMC北向接口数据核查 > 数据完整性统计</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>

        <div class="list-5">
            <span>业务类型</span>
            <select name="" id="">
                <option value="全部">全部</option>
                <option value="Volte">Volte</option>
            </select>
        </div>
        <div class="list-5">
            <span>厂商</span>
            <select name="" id="">
                <option value="全部">全部</option>
                <option value="华为">华为</option>
                <option value="烽火">烽火</option>
                <option value="中兴">中兴</option>
                <option value="爱立信">爱立信</option>
                <option value="诺西">诺西</option>
                <option value="其他">其他</option>
            </select>
        </div>
        <div class="list-5">
            <input type="submit" value="查询">
            <input type="submit" value="导出">
        </div>
    </form>
</div>
<input type="radio" name="sildeInput" value="0" id="Input11" checked="" hidden="">
<input type="radio" name="sildeInput" value="1" id="Input21" hidden="">
<label class="label label1" for="Input11">全网最高支持率统计</label><label class="label label2" for="Input21">分省支持率统计</label>
<div id="main-table">
    <div class="sildeInput-1">
        <table border="1" cellspacing="0">
            <thead>
            <tr>
                <td>网元类型</td>
                <td colspan="2">CSCF</td>
                <td colspan="2">IMSHSS</td>
                <td colspan="2">IMSMGW</td>
                <td colspan="2">MGCF</td>
                <td colspan="2">TAS</td>
                <td colspan="2">VOLTESBC</td>
            </tr>
            </thead>
            <thody>
                <tr>
                    <td>属性类型</td>
                    <td>NRM</td>
                    <td>PM</td>
                    <td>NRM</td>
                    <td>PM</td>
                    <td>NRM</td>
                    <td>PM</td>
                    <td>NRM</td>
                    <td>PM</td>
                    <td>NRM</td>
                    <td>PM</td>
                    <td>NRM</td>
                    <td>PM</td>
                </tr>
                <tr>
                    <td>A类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>A类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>B类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>C类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>CA类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>CB类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>CC类支持率</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                    <td>100%</td>
                </tr>
                <tr>
                    <td>综合支持率</td>
                    <td colspan="2">98.90%</td>
                    <td colspan="2">98.90%</td>
                    <td colspan="2">98.90%</td>
                    <td colspan="2">98.90%</td>
                    <td colspan="2">98.90%</td>
                    <td colspan="2">98.90%</td>
                </tr>
            </thody>
        </table>
    </div>

    <div class="sildeInput-2">
        <table border="1" cellspacing="0">
            <tr>
                <td></td>
                <td>网元类型</td>
                <td>CSCF <span></span></td>
                <td>IMSHSS <span></span></td>
                <td>IMSMGW <span></span></td>
                <td>MGCF <span></span></td>
                <td>TAS <span></span></td>
                <td>VOLTESBC <span></span></td>
                <td>操作</td>
            </tr>
            <tr class="un-qualified">
                <td>1</td>
                <td>最好值</td>
                <td>98.81%</td>
                <td>98.81%</td>
                <td>98.81%</td>
                <td>98.81%</td>
                <td>98.81%</td>
                <td>98.81%</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>安徽</td>
                <td>90.34%</td>
                <td>34.45%</td>
                <td>23.45%</td>
                <td>98%</td>
                <td>67.23%</td>
                <td>34%</td>
                <td><a href="javaScript:;">明细</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>甘肃</td>
                <td>86.61%</td>
                <td>29.33%</td>
                <td>93.38%</td>
                <td>90.39%</td>
                <td>91.98%</td>
                <td>71.65%</td>
                <td><a href="javaScript:;">明细</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>福建</td>
                <td>86.61%</td>
                <td>29.33%</td>
                <td>93.38%</td>
                <td>90.39%</td>
                <td>91.98%</td>
                <td>71.65%</td>
                <td><a href="<?= Yii::app()->createUrl('DataIntegrityStatistics/details') ?>">明细</a></td>
            </tr>

            <tr class="table_color_1">
                <td></td>
                <td>平均值</td>
                <td>86.61%</td>
                <td>29.33%</td>
                <td>93.38%</td>
                <td>90.39%</td>
                <td>91.98%</td>
                <td>71.65%</td>
                <td></td>
            </tr>
        </table>
    </div>

</div>
<div id="main11" class="echarts" style="width:1100px;height:500px;"></div>

<!-- 图形化插件 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/echars/echarts.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/styles.js"></script>
<script>

    initData();
    function initData() {
        var bgColorList = ['#3580b7', '#d74844', '#93bc58', '#856299', '#00adc3', '#ff8e3d', '#214d6d'];
        var axisLabel = ['最好值', '安徽', '安徽', '安徽', '安徽', '安徽', '安徽', '安徽', '安徽', '安徽', '安徽', '安徽', '福建', '甘肃', '广东', '广西', '贵州', '海南', '河北', '河南', '黑龙江', '湖南', '吉林', '江苏', '辽宁', '江西', '青海', '山东', '山西', '陕西', '上海', '天津', '云南', '浙江'];
        var legendData = ['CSCF', 'IMSHSS', 'IMSMGW', 'MGCF', 'TAS', 'VOLTESBC'];
        var seriesValue = [];

        for (var i = 0; i < legendData.length; i++) {
            var arrData = [];
            var seriesDataVal = null;
            for (var j = 0; j < axisLabel.length; j++) {
                arrData.push(Math.floor(Math.random() * 100));
            }
            seriesDataVal = {
                barWidth: 3,//柱状条宽度
                name: legendData[i],
                type: 'bar',
                itemStyle: {
                    normal: {
                        show: true,//鼠标悬停时显示label数据
                        barBorderRadius: [10, 10, 10, 10],//柱形图圆角，初始化效果
                        color: bgColorList[i]
                    }
                },
                label: {
                    normal: {
                        show: false, //显示数据
                        position: 'top'//显示数据位置 'top/right/left/insideLeft/insideRight/insideTop/insideBottom'
                    }
                },
                data: arrData
            };
            seriesValue.push(seriesDataVal);
        }

        buildChart(legendData, axisLabel, seriesValue);

    }


    //生成Echarts图形
    function buildChart(legendData, axisLabel, seriesValue, classId = 'main11') {
        var chart = document.getElementById(classId);
        //console.log(chart);
        //return false;
        //var chart = document.getElementById('barsDemo');
        var echart = echarts.init(chart);
        var option = {
            title: {
                text: "设备数据完整性",//正标题
                x: "center", //标题水平方向位置
                y: "0", //标题竖直方向位置,
                top: '10',
                textStyle: {
                    fontSize: 18,
                    fontWeight: 'normal',
                    color: '#666'
                }
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'//阴影，若需要为直线，则值为'line'
                }
            },
            toolbox: {
                show: true,
                feature: {
                    saveAsImage: {show: true}
                }
            },
            legend: {
                data: legendData,
                y: 'bottom',

            },
            grid: {
                left: '2%',
                right: '2%',
                bottom: '10%',
                top: '10%',
                containLabel: true
            },
            xAxis: [{
                min: 0,
                type: 'category', //纵向柱状图，若需要为横向，则此处值为'value'， 下面 yAxis 的type值为'category'
                data: axisLabel,
                axisLabel: {
                    interval: 0,
                    rotate: 40
                }
            }],
            yAxis: [{
                min: 0,
                type: 'value',
                splitArea: {show: false}
            }],
            label: {
                normal: { //显示bar数据
                    show: true,
                    position: 'top'
                }
            },
            series: seriesValue
        };

        echart.setOption(option);
    }


</script>
