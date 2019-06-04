<div class="title">OMC北向接口数据核查 > 接口核查报告</div>
<div class="search">
    <form id="form_search2" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <div class="list-5">
            <span>核查时间</span>
            <input type="text" name="begin_time" id="begin_time" value="<?= date('Y-m', time()) ?>"
                   readonly="readonly">
        </div>
        <div class="list-5">
            <span>属性类型</span>
            <select name="property" id="">
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div>
            <span>取值类型</span>
            <select name="sum" id="">
                <option value="max">最大值</option>
                <option value="avg">平均值</option>
            </select>
        </div>
        <div class="list-5">
            <span></span>
            <input type="submit" value="查询">
            <input type="submit" value="导出">
        </div>
    </form>
</div>

<div class="main-table">
    <div style="padding: 10px;">
        <h1 style="text-align: center;">山西公司 OMC北向接口数据质量（资源属性）核查报告</h1>
        <h2 style="text-align: center;">2018年6月份</h2>
        <div>
            <h4>1.质量核查结论</h4>
            <p>&nbsp;&nbsp;山西公司2018年6月份OMC北向数据质量总体支持率基本满足集团数据质量核查的要求，共核查CSCF、IMSHSS、IMSMGW、IMGCF 5个网元类型，具体核查结果如下：</p>

            <div id="tableList">
            </div>
        </div>
        <div >
            <h4>2. 异常数据分布论</h4>
            <ul>
                <p><b>· </b>山西公司2018年6月，CSCF网元数据缺失1天，2018年6月28日未上传XXXX资源属性数据文件，设备版本号为XXXX；</p>
                <p><b>· </b></p>
                <p><b>· </b></p>
            </ul>
        </div>
    </div>

</div>

<!-- 时间插件 -->
<script src="/assets/js/laydate/laydate.js"></script>
<!-- 图形化插件 -->
<script src="/assets/js/echars/echarts.min.js"></script>
<script>
    $(document).ready(function () {
        //日期插件
        var options = {elem: '', event: 'focus', festival: true, elem: '#begin_time', isdata: true, format: 'YYYY-MM'};
        laydate(options);


        var network = ['CSCF','IMSHSS'];
        var htmlStr = '';
        for(var i in network){

            htmlStr += '< '+ i +' > '+ network[i] +'网元类型(支持率最大值)';
            htmlStr += '<table border="1" cellspacing="0" width="700"><tr><th>厂商</th><th>A类支持率</th><th>B类支持率</th><th>C类支持率</th><th>CA类支持率</th><th>CB类支持率</th><th>CC类支持率</th><th>总支持率</th></tr>';
            var firm = ['华为','中兴','全部厂商'];
            for(var j in firm){
                var tableStr = '<td>'+firm[i]+'</td>';
                var tableStr = '<td>100%</td>';
                var tableStr = '<td>90%</td>';
                var tableStr = '<td>80%</td>';
                var tableStr = '<td>70%</td>';
                var tableStr = '<td>60%</td>';
                var tableStr = '<td>50%</td>';
                var tableStr = '<td>60%</td>';
                htmlStr += '<tr>'+ tableStr +'</tr>';
            }

            console.log(i);
            console.log(firm[i]);
        }

    });
</script>
<script>
    function fun2() {

        //获取form数据
        var data = $('#form_search2').serialize();
        var tableStr = '<table border="1" cellspacing="0" width="700"><tr><th>厂商</th><th>A类支持率</th><th>B类支持率</th><th>C类支持率</th><th>CA类支持率</th><th>CB类支持率</th><th>CC类支持率</th><th>总支持率</th></tr>';
        $.ajax({
            type: 'post',
            url: 'interfaceReport/search',
            data: data,
            //dataType:dataType,
            success: function (data) {
                var datas = $.parseJSON(data);
                $("#tableList").html('');
                if (datas.code == '200' && datas.data.length) {
                    var legendData = [];
                    var arrData = [];
                    var product = ['A类支持率', 'B类支持率', 'C类支持率', 'CA类支持率', 'CB类支持率', 'CC类支持率', '总支持率'];
                    var bgColorList = ['#3580b7', '#d74844', '#93bc58', '#856299', '#00adc3', '#ff8e3d', '#214d6d'];
                    var txt = $("select[name=sum] option:selected").text();
                    for (var i = 0; i < datas.network.length; i++) {
                        var seriesValue = [];
                        var htmlStr = '<div>（' + (i + 1) + '）' + datas.network[i] + '网元类型（支持率 ' + txt + '）' + tableStr;
                        var echarts_id = 'echarts_'+ i;
                        var seriesDataVal = null;
                        for (var j = 0; j < datas.firm.length; j++) {


                            htmlStr += '<tr>';
                            htmlStr += '<th>' + datas.firm[j] + '</th>';
                            htmlStr += '<td>' + datas.data[i][j]['0'] + '%</td>';
                            htmlStr += '<td>' + datas.data[i][j]['1'] + '%</td>';
                            htmlStr += '<td>' + datas.data[i][j]['2'] + '%</td>';
                            htmlStr += '<td>' + datas.data[i][j]['3'] + '%</td>';
                            htmlStr += '<td>' + datas.data[i][j]['4'] + '%</td>';
                            htmlStr += '<td>' + datas.data[i][j]['5'] + '%</td>';
                            htmlStr += '<td>' + datas.data[i][j]['count'] + '%</td>';
                            htmlStr += '</tr>';

                        }
                        htmlStr += '</table><div id="'+ echarts_id +'" style="width:800px;height: 500px;"></div></div>';
                        $("#tableList").append(htmlStr);


                        for(var s = 0; s < product.length;s++){
                            var arrData = [];
                            var seriesDataVal = null;
                            for (var j = 0; j < datas.firm.length; j++) {
                                if(s == 6){
                                    s = 'count';
                                }
                                //var str = datas.data[i][j][s];
                                //arrData.push(str.substr(0,str.length -1));
                                arrData.push(datas.data[i][j][s]);

                            }
                            if(s == 'count'){
                                product[s] = '总支持率';
                            }
                            //格式化数据
                            seriesDataVal = {
                                barWidth: 20,//柱状条宽度
                                name: product[s],
                                type: 'bar',
                                itemStyle: {
                                    normal: {
                                        show: true,//鼠标悬停时显示label数据
                                        barBorderRadius: [10, 10, 10, 10],//柱形图圆角，初始化效果
                                        color: bgColorList[s]
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
                        buildChart(product, datas.firm, seriesValue,echarts_id);
                    }

                }else{
                    $("#tableList").append('<div style="text-align:center;color: red;width:100%;height:100px;background-color:#ccc;line-height: 100px;">数据为空</div>');
                }
                return false;
            },
        });
        return false;
    }

    /* 数据导出功能 */
    $('#btn_export').click(function () {
        $("input[name=export]").val('ok');
    });

    $("#form_search2").submit(function () {
        var exports = $("input[name=export]").val();
        if (exports == 'ok') {
            return true;    //数据导出
        }
        fun2();             //数据查询
        return false;
    });

    $(document).ready(function(){
        fun2();
    });

    //生成Echarts图形
    function buildChart(legendData, axisLabel, seriesValue, classId = 'barsDemo') {
        var chart = document.getElementById(classId);
        //console.log(chart);
        //return false;
        //var chart = document.getElementById('barsDemo');
        var echart = echarts.init(chart);
        var option = {
            title: {
                text: "支持率统计",//正标题
                x: "center", //标题水平方向位置
                y: "0", //标题竖直方向位置
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
                y: 'bottom'//图例说明文字设置

            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '10%',
                top: '10%',
                containLabel: true
            },
            xAxis: [{
                min: 0,
                type: 'category', //纵向柱状图，若需要为横向，则此处值为'value'， 下面 yAxis 的type值为'category'
                data: axisLabel
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
