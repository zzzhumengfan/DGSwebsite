<div class="title"><h3>OMC北向接口数据核查 > 文件质量核查</h3></div>
<div class="search">
    <form id="form_search" action="fileQualityCheck/index" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="<?= isset($pageno) ? $pageno : 1 ?>">

        <div class="list-5">
            <span>开始时间</span>
            <input type="text" name="begin_time" id="begin_time2"
                   value="<?= date('Y-m-d', strtotime("-3 month", time())) ?>" readonly="readonly">
        </div>
        <div class="list-5">
            <span>结束时间</span>
            <input type="text" name='end_time' id="end_tiem2" value="<?= date('Y-m-d', time()) ?>"
                   readonly="readonly">
        </div>
        <div class="list-5">
            <span>专业</span>
            <select name="specialty">
                <option value="全部">全部</option>
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-5">
            <span>网元类型</span>
            <select name="network">
                <option value="全部">全部</option>
                <option value="NME">NME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-5">
            <input type="submit" class="search2" value="查询">
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
            <select name="property">
                <option value="全部">全部</option>
                <option selected="" value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div class="list-5">
            <span>文件状态</span>
            <select name="file_state">
                <option value="全部">全部</option>
                <option value="正常">正常</option>
                <option value="异常">异常</option>
            </select>
        </div>
        <div class="list-5">
            <span>异常原因</span>
            <select name="abnormal_cause">
                <option selected="" value="全部">全部</option>
                <option value="文件未上传">文件未上传</option>
                <option value="文件损坏">文件损坏</option>
                <option value="文件大小为0">文件大小为0</option>
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
            <td>采集周期</td>
            <td>专业</td>
            <td>网元类型</td>
            <td>厂商</td>
            <td>属性类型</td>
            <td>文件名称</td>
            <td>文件路径</td>
            <td>文件大小(M)</td>
            <td>文件状态</td>
            <td>异常原因</td>
        </tr>
        <tr class="un-qualified">
            <td>1</td>
            <td>20180721</td>
            <td>12小时</td>
            <td>无线网</td>
            <td>ENB</td>
            <td>华为</td>
            <td>属性资源</td>
            <td></td>
            <td>/ftproot/SX/WX/HW/GZ_OMC2/CM/20180601/</td>
            <td></td>
            <td>异常</td>
            <td>文件未上传</td>
        </tr>
        <tr>
            <td>2</td>
            <td>20180321</td>
            <td>12小时</td>
            <td>无线网</td>
            <td>ENB</td>
            <td>中心</td>
            <td>属性资源</td>
            <td>CM-MME-EUTRANCELLTDD-A1-V1.1.0-20180602000000-001.xml.zip</td>
            <td>/ftproot/SX/WX/ZX/GZ_OMC2/CM/20180601/</td>
            <td>100</td>
            <td>文件正常</td>
            <td></td>
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
<div>
    <div id="echarts" class="echarts" style=""></div>
</div>

<!-- 时间插件 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/laydate/laydate.js"></script>
<!-- 图形化插件 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/echars/echarts.min.js"></script>
<script>
    $(document).ready(function () {
        //日期插件
        var options2 = {elem: '', event: 'focus', festival: true, elem: '#begin_time2'};
        laydate(options2);
        var options3 = {elem: '', event: 'focus', festival: true, elem: '#end_tiem2'};
        laydate(options3);


        var myChart = echarts.init(document.getElementById('echarts'));
        var app = {};
        option = null;
        app.title = '笛卡尔坐标系上的热力图';


        option = {
            animation: false,
            calculable: true,

            tooltip: {  //提示组件
                trigger: 'item',
                position: 'top',
                formatter: function (params) {
                    return "文件异常";
                },
            },
            grid: {/*left: '50%',*/y: '10%'},
            xAxis: {
                type: 'category',
                data: ['12a', '1a', '2a', '3a', '4a', '5a', '6a',
                    '7a', '8a', '9a', '10a', '11a',
                    '12p', '1p', '2p', '3p', '4p', '5p',
                    '6p', '7p', '8p', '9p', '10p', '11p'],
                splitArea: {
                    show: true
                }
            },
            yAxis: {
                type: 'category',
                data: [
                    '2018-09-18',
                    '2018-09-19',
                    '2018-09-20',
                    '2018-09-21',
                    '2018-09-22',
                    '2018-09-23',
                    '2018-09-24'
                ],
                splitArea: {
                    show: true
                }
            },
            visualMap: {    //视觉映射组件
                min: 0,
                max: 10,
                calculable: true,
                orient: 'horizontal',
                left: 'center',
                bottom: '15%',
                show: false,
            },
            dataZoom: [
                {
                    show: true,
                    type: 'slider',
                    start: 0,
                    end: 30,
                    orient: 'vertical',
                    right:'4%',
                }, {
                    type: 'inside',
                    filterMode: 'empty',
                    disabled: false,            //是否停止组件的功能。
                    start: 30,          //数据窗口范围的起始百分比,表示30%
                    end: 70,            //数据窗口范围的结束百分比,表示70%
                    startValue: 10,         //数据窗口范围的起始数值
                    endValue: 100,          //数据窗口范围的结束数值。
                    orient: "vertical",           //布局方式是横还是竖。不仅是布局方式，对于直角坐标系而言，也决定了，缺省情况控制横向数轴还是纵向数轴。'horizontal'：水平。'vertical'：竖直。
                    zoomLock: true,            //是否锁定选择区域（或叫做数据窗口）的大小。如果设置为 true 则锁定选择区域的大小，也就是说，只能平移，不能缩放。
                    zoomOnMouseWheel: true,//如何触发缩放。可选值为：true：表示不按任何功能键，鼠标滚轮能触发缩放。false：表示鼠标滚轮不能触发缩放。'shift'：表示按住 shift 和鼠标滚轮能触发缩放。'ctrl'：表示按住 ctrl 和鼠标滚轮能触发缩放。'alt'：表示按住 alt 和鼠标滚轮能触发缩放。
                    moveOnMouseMove: true,//如何触发数据窗口平移。true：表示不按任何功能键，鼠标移动能触发数据窗口平移。false：表示鼠标滚轮不能触发缩放。'shift'：表示按住 shift 和鼠标移动能触发数据窗口平移。'ctrl'：表示按住 ctrl 和鼠标移动能触发数据窗口平移。'alt'：表示按住 alt 和鼠标移动能触发数据窗口平移。
                }
            ],
            series: [
                {
                    name: '文件状态',
                    type: 'heatmap',
                    data: [
                        /* [ 'x轴坐标','y轴坐标','值' ]*/
                        [0, 0, 1],
                        [1, 2, 1],
                        [13, '2018-09-22', 2]
                    ],
                    label: {
                        normal: {
                            show: false,    //是否显示value
                        }
                    },
                    itemStyle: {        //样式设置
                        emphasis: {
                            shadowBlur: 1,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };

        if (option && typeof option === "object") {
            myChart.setOption(option, true);
        }


    });


</script>
