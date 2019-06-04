<div class="title"><h3>OMC北向接口数据核查 > 数据质量核查</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <div class="list-6">
            <span>周期</span>
            <select name="">
                <option value="日">日</option>
                <option value="月">月</option>
            </select>
        </div>
        <div class="list-6">
            <span>开始时间</span><input type="text" value="<?= date('Y-m-d', strtotime('-1 month', time())) ?>">
        </div>
        <div class="list-6">
            <span>结束时间</span>
            <input type="text" value="<?= date('Y-m-d', time()) ?>">
        </div>
        <div class="list-6">
            <span>专业</span>
            <select name="specialty">
                <option value="全部">全部</option>
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-6">
            <span>网元类型</span>
            <select name="network">
                <option value="全部">全部</option>
                <option value="MME">MME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-6">
            <input type="submit" value="查询">
        </div>
        <div class="list-6">
            <span>厂商</span>
            <select name="" id="">
                <option value="">全部</option>
                <option value="">华为</option>
                <option value="">中兴</option>
                <option value="">烽火</option>
                <option value="">爱立信</option>
                <option value="">诺西</option>
            </select>
        </div>
        <div class="list-6">
            <span>规范版本</span><select name="" id="">
                <option value="">全部</option>
            </select>
        </div>
        <div class="list-6">
            <span>设备版本</span>
            <select name="" id="">
                <option value="全部">全部</option>
            </select>
        </div>
        <div class="list-6">
            <span>属性类型</span>
            <select name="property">
                <option value="全部">全部</option>
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>

        <div class="list-6"></div>
        <div class="list-6">
            <input type="submit" value="导出">
        </div>
    </form>

</div>
<div id="main-table">
    <table border="1" cellspacing="0" width="100%">
        <tr>
            <td></td>
            <td>日期</td>
            <td>专业</td>
            <td>网元类型</td>
            <td>厂商</td>
            <td>规范版本</td>
            <td>设备版本</td>
            <td>属性类型</td>
            <td>总项数</td>
            <td>总支持率</td>
            <td>总异常项数</td>
            <td>总不适用项数</td>
            <td>操作</td>
        </tr>
        <tr>
            <td>1</td>
            <td>20180724</td>
            <td>核心网</td>
            <td>CSCF</td>
            <td>华为</td>
            <td>3.1.4</td>
            <td>CSCF_V100R010C55SPH102</td>
            <td>性能属性</td>
            <td>324</td>
            <td>95.23%</td>
            <td>15</td>
            <td>2</td>
            <td>
                <a href="<?= $this->createUrl('support'); ?>">支持率</a>&nbsp;&nbsp;&nbsp;
                <a href="<?= $this->createUrl('detail'); ?>">明细</a>
            </td>
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/styles.js"></script>
<script>

    function fun() {
        return false;
        //获取form数据
        var data = $('#form_search').serialize();

        $.ajax({
            type: 'post',
            url: '/networkDataConfig/AjaxFind',
            data: data,
            success: function (data) {
                var datas = $.parseJSON(data);
                //console.log(datas);
                if (datas.code == 200) {
                    var htmlStr = '';
                    for (var i in datas.data) {
                        //console.log(datas.data[i]['_id']['$id']);
                        htmlStr += '<tr>';
                        htmlStr += ' </td><input type="checkbox" name="mongId[]" value="' + datas.data[i]['_id']['$id'] + '" onclick="swapCheck2();"/></td>';
                        htmlStr += ' <td>' + datas.data[i]['edition'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['specialty'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['network'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['property'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['indexes'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['object'] + '</td>';
                        htmlStr += ' <td class="demo">' + datas.data[i]['remarks'] + '</td>';
                        htmlStr += ' <td>' + datas.data[i]['range'] + '</td>';
                        htmlStr += ' <td><input type="submit" value="明细"></td>';
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
            var objec = form_move('#form_search2', '/networkDataConfig/move');
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
