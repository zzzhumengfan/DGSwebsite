<div class="title"><h3>OMC北向接口数据核查 > 接口核查概况</h3></div>
<div class="search">
    <form id="form_search" method="post" action="/interfaceAlarmMonitor/index">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>

        <div class="list-5">
            <span>查询时间</span>
            <input type="text" name="begin_time" id="begin_time" value="<?= date('Y-m-d',time()) ?>" readonly="readonly">
        </div>
        <div class="list-4">
            <span><input type="submit" value="查询"></span>
            <span><input type="submit" value="发送短信"></span>
            <span><input type="submit" value="发送邮件"></span>

        </div>
    </form>

</div>
<div id="main-table">
    <div style="font-size: 18px;border: 1px solid;background-color: #ccccff;padding: 5px 5px 0px 5px;">
        <b> • 监控告警结论</b>

        <p>山西公司2018年7月25日OMC北向接口核查，文件未按时上传或大小为零4个，A类属性支持率低于100%网元类型3个，B类属性支持率低于90%网元类型2个。</p>
    </div>

    <div class="interface-check-survey">
        <div>
            <p>文件未按时上传或大小为零：</p>
            <table border="1" cellspacing="0" width="100%">
                <tr>
                    <td></td>
                    <td>文件日期</td>
                    <td>文件周期</td>
                    <td>专业</td>
                    <td>网元类型</td>
                    <td>厂商</td>
                    <td>属性类型</td>
                    <td>文件名称</td>
                    <td>文件路径</td>
                    <td>文件大小(M)</td>
                    <td>文件异常原因</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2018-12-20</td>
                    <td>12小时</td>
                    <td>传输网</td>
                    <td>NME</td>
                    <td>华为</td>
                    <td>性能属性</td>
                    <td>2018-12-20_wang_da_lin.txt</td>
                    <td>./www/sdskdfvalkvma/ceshi/2018-12-20_wang.txt</td>
                    <td>10.50</td>
                    <td>文件大小为0</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>2018-12-20</td>
                    <td>12小时</td>
                    <td>核心网</td>
                    <td>CSCF</td>
                    <td>爱立信</td>
                    <td>性能属性</td>
                    <td>2018-12-20_wang_da_lin.txt</td>
                    <td>./www/sdskdfvalkvma/ceshi/2018-12-20_wang.txt</td>
                    <td>5.83</td>
                    <td>文件大小为0</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>2018-12-20</td>
                    <td>12小时</td>
                    <td>核心网</td>
                    <td>CSCF</td>
                    <td>爱立信</td>
                    <td>性能属性</td>
                    <td>2018-12-20_wang_da_lin.txt</td>
                    <td>./www/sdskdfvalkvma/ceshi/2018-12-20_wang.txt</td>
                    <td>8.32</td>
                    <td>文件大小为0</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>2018-12-20</td>
                    <td>24小时</td>
                    <td>核心网</td>
                    <td>NME</td>
                    <td>华为</td>
                    <td>性能属性</td>
                    <td>2018-12-20_wang_da_lin.txt</td>
                    <td>./www/sdskdfvalkvma/ceshi/2018-12-20_wang.txt</td>
                    <td>15.51</td>
                    <td>文件未上传</td>
                </tr>
            </table>
        </div>

        <div>
            <p>A类属性支持率低于100%：</p>
            <table border="1" cellspacing="0" width="100%">
                <tr>
                    <td></td>
                    <td>日期</td>
                    <td>专业</td>
                    <td>网元类型</td>
                    <td>厂商</td>
                    <td>属性数目</td>
                    <td>支持率</td>
                    <td>A类属数目</td>
                    <td>A类属性支持率</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2018-12-20</td>
                    <td>传输网</td>
                    <td>NME</td>
                    <td>华为</td>
                    <td>134</td>
                    <td>88.2%</td>
                    <td>15</td>
                    <td>98.3%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2018-12-20</td>
                    <td>核心网</td>
                    <td>CSCF</td>
                    <td>爱立信</td>
                    <td>253</td>
                    <td>86.8%</td>
                    <td>18</td>
                    <td>97.5%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2018-12-20</td>
                    <td>核心网</td>
                    <td>CSCF</td>
                    <td>爱立信</td>
                    <td>186</td>
                    <td>85.9%</td>
                    <td>32</td>
                    <td>96.7%</td>
                </tr>
            </table>
        </div>

        <div>
            <p>B类属性支持率低于90%：</p>
            <table border="1" cellspacing="0" width="100%">
                <tr>
                    <td></td>
                    <td>日期</td>
                    <td>专业</td>
                    <td>网元类型</td>
                    <td>厂商</td>
                    <td>属性数目</td>
                    <td>支持率</td>
                    <td>B类属数目</td>
                    <td>B类属性支持率</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2018-12-20</td>
                    <td>传输网</td>
                    <td>NME</td>
                    <td>华为</td>
                    <td>134</td>
                    <td>86.2%</td>
                    <td>78</td>
                    <td>87.6%</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>2018-12-20</td>
                    <td>核心网</td>
                    <td>CSCF</td>
                    <td>爱立信</td>
                    <td>253</td>
                    <td>86.4%</td>
                    <td>85</td>
                    <td>89.5%</td>
                </tr>
            </table>
        </div>
    </div>

</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/laydate/laydate.js"></script>
<script>
    $(document).ready(function () {
        //日期插件
        var options = {elem: '', event: 'focus', festival: true, elem: '#begin_time'};
        laydate(options);

        //fun();
        //fun2();
    });
</script>
