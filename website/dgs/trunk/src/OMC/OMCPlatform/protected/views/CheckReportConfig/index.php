<div class="title"><h3>OMC北向接口数据核查 > 数据核查配置 > 核查报告配置</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
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
            <select name="network" id="">
                <option value="全部">全部</option>
                <option value="CSCF">CSCF</option>
                <option value="NME">NME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-5">
            <span>厂商</span>
            <select name="firm" id="">
                <option value="全部">全部</option>
                <option value="华为">华为</option>
                <option value="中兴">中兴</option>
                <option value="烽火">烽火</option>
                <option value="爱立信">爱立信</option>
                <option value="诺西">诺西</option>
                <option value="其他">其他</option>
            </select>
        </div>
        <div class="list-5">
            <input type="submit" value="查询" onclick="$('input[name=pageno]').val(1);">
        </div>
        <div class="list-4">
            <span></span>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/CheckReportConfig/add">添加</a>
            <a href="javaScript:;" onclick="move();">删除</a>
        </div>
    </form>

</div>
<div id="main-table">
    <form action="" id="form_search2">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td style="width: 20px;"><input type="checkbox" id="checkBox" onclick="swapCheck()"/></td>
                <td>专业</td>
                <td>网元类型</td>
                <td>厂商</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf52c88483092b858000037" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf52c5a483092b858000036" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>诺西</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf52c5a483092b858000035" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>爱立信</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf52c5a483092b858000034" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>大唐</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf52c5a483092b858000033" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>中华</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="mongId[]" value="5bf52c5a483092b858000032" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>烽火</td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="mongId[]" value="5bf52c5a483092b858000031" onclick="swapCheck2();">
                </td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>华为</td>
            </tr>
        </table>
    </form>
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/styles.js"></script>
<script>

    function fun() {
        //获取form数据
        var data = $('#form_search').serialize();

        console.log($('input[name=pageno]').val());

        $.ajax({
            type: 'post',
            url: '/CheckReportConfig/ajaxFind',
            data: data,
            success: function (data) {
                var datas = $.parseJSON(data);
                //console.log(datas);
                if (datas.code == 200) {
                    var htmlStr = '';
                    for (var i in datas.data) {
                        //console.log(datas.data[i]['_id']['$id']);
                        htmlStr += '<tr>';
                        htmlStr += ' <th><input type="checkbox" name="mongId[]" value="' + datas.data[i]['_id']['$id'] + '" onclick="swapCheck2();"/></th>';
                        htmlStr += ' <td>' + datas.data[i]['specialty'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['network'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['firm'] + '</td>';
                        htmlStr += '</tr>';
                    }
                    $("#page").html(datas.page);
                    $("#tableStr").html(htmlStr);
                    //$("#tableStr").append(htmlStr);
                }
            },
        });
        return false;
    }

    function move() {
        var bools = false;
        $("input[type='checkbox']").each(function () {
            if ($(this).attr('checked')) {
                bools = true;
            }
        });
        if (bools) {
            var objec = form_move('#form_search2', '/CheckReportConfig/move');
            swapCheck2();
            fun();
        } else {
            alert('请选择删除数据');
            return false;
        }
    }

    var isCheckAll = false;
    function swapCheck() {
        if (isCheckAll) {
            $("input[type='checkbox']").each(function () {
                this.checked = false;
            });
            isCheckAll = false;
        } else {
            $("input[type='checkbox']").each(function () {
                this.checked = true;
            });
            isCheckAll = true;
        }
    }
    function swapCheck2() {
        isCheckAll = false;
        $('#checkBox').attr('checked', false)
    }

    // 使用刚指定的配置项和数据显示图表。
    //myChart.setOption(option);
    $("#form_search").submit(function () {
        fun();
        return false;
    });

    $(document).ready(function () {
        fun();

        $('#page').on('click', 'a', function () {
            $('input[name=pageno]').val($(this).attr('data-page'));
            fun();
        })
    });


</script>
