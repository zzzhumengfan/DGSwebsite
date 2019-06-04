<div class="title"><h3>OMC北向接口数据核查> 数据核查配置 > 网元数据配置</h3></div>
<div class="search">
    <form action="index.php" method="post" id="form_search">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <input type="hidden" name="limit" value="10">

        <div class="list-3">
            <span>规范版本</span>
            <select name="edition" id="">
                <option value="2.1.0">2.1.0</option>
                <option value="3.1.4">3.1.4</option>
            </select>
        </div>
        <div class="list-3">
            <span>&nbsp;&nbsp;&nbsp;专业&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <select name="specialty" id="">
                <option value="全部">全部</option>
                <option value="无线网">无限网</option>
                <option value="传输网">传输网</option>
                <option value="核心网">核心网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-3">
            <input type="submit" value="查询">
        </div>
        <div class="list-3">
            <span>网元类型</span>
            <select name="network" id="">
                <option value="全部">全部</option>
                <option value="MME">MME</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-3">
            <span>属性类型</span>
            <select name="property" id="">
                <option value="全部">全部</option>
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div class="list-3">
            <input type="submit" value="导出">
        </div>
    </form>
    <div class="list-3">
        <span></span>
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/NetworkConfig/add">添加</a>
        <a href="javaScript:;" onclick="$('#data_move').submit();">删除</a>
    </div>
    <div class="list-3">
        <span>文件导入</span>
        <input type="text" name="" value="">
        <button>浏览文件</button>
        <button>提交</button>
        <button>下载模板</button>
    </div>
</div>
<div id="main-table">
    <form action="/networkConfig/Delete" method="post" id="data_move">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table border="1" cellspacing="0" width="100%">
            <tbody>
            <tr>
                <td class="table_checkbox"><input type="checkbox" onclick="checkboxAll();"></td>
                <td>规范版本</td>
                <td>专业</td>
                <td>网元类型</td>
                <td>属性类型</td>
                <td>索引</td>
                <td>管理对象</td>
                <td>备注</td>
                <td>适用范围</td>
                <td>操作</td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="mongId[]" value="5c06451c483092ac6b00003f"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td>添加备注</td>
                <td>PNF,VNF</td>
                <td><a href="<?php echo Yii::app()->request->baseUrl; ?>/networkConfig/details/id/5c06451c483092ac6b00003f">明细</a></td>
            </tr>
            <tr>
                <td class="table_checkbox"><input type="checkbox" name="mongId[]" value="5c064517483092ac6b00003e"></td>
                <td>2.1.0</td>
                <td>无线网</td>
                <td>CSCF</td>
                <td>资源属性</td>
                <td>Ab</td>
                <td>object</td>
                <td>添加备注</td>
                <td>PNF,VNF</td>
                <td><a href="<?php echo Yii::app()->request->baseUrl; ?>/networkConfig/details/id/5c064517483092ac6b00003e">明细</a></td>
            </tr>
            </tbody>
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

<script>
    $("document").ready(function () {
        //数据查询
        search();

    });

    $("#form_search").submit(function () {
        search();
        return false;
    });

    var search = function () {
        var data = $("#form_search").serialize();
        var url = '/networkConfig/AjaxFind';

        $.ajax({
            type: 'post',
            url: url,
            data: data,
            success: function (data) {
                var datas = $.parseJSON(data);

                console.log(datas);
                var htmlStr = '<tr><td class="table_checkbox"><input type="checkbox" onclick="checkboxAll();"></td><td>规范版本</td><td>专业</td><td>网元类型</td><td>属性类型</td><td>索引</td><td>管理对象</td><td>备注</td><td>适用范围</td><td>操作</td></tr>';

                if (datas.code == 200) {
                    if (datas.data.length > 0) {
                        for (var i in datas.data) {
                            //console.log(datas.data[i]['_id']['$id']);
                            htmlStr += '<tr>';
                            htmlStr += ' <td class="table_checkbox"><input type="checkbox" name="mongId[]" value="' + datas.data[i]['_id']['$id'] + '"/></td>';
                            htmlStr += ' <td>' + datas.data[i]['edition'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['specialty'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['network'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['property'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['indexes'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['object'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['remarks'] + '</td>';
                            htmlStr += ' <td>' + datas.data[i]['range'] + '</td>';
                            htmlStr += ' <td><a href="<?= $this->createUrl('details');?>/id/' + datas.data[i]['_id']['$id'] + '">明细</a></td>';
                            htmlStr += '</tr>';
                        }
                    } else {
                        htmlStr += '<tr><td style="color: red;background-color: #fdfdfe;height: 30px;" colspan="10">数据为空</td></tr>';
                    }
                    $("#main-table table > tbody").html(htmlStr);
                    $(".page").html(datas.pageHtml);
                    return false;
                }
                htmlStr += '<tr><td style="color: red;background-color: #fdfdfe;height: 30px;" colspan="10">数据为空</td></tr>';

                $("#main-table table > tbody").html(htmlStr);
                $(".page").html('<div style="width:100%;height:30px;color: red;text-align: center;line-height: 30px;background-color: #fdfdfe;"><p>数据为空</p></div>');
            },
        });
        return false;
    }

    //分页功能
    $('.page').on('change', 'select', function () {
        $("input[name=limit]").val($(this).val());
        search();
    });
    $(".page").on('click', 'a', function () {
        $('input[name=pageno]').val($(this).attr('data-page'));
        search();
    });


    //列表全选,全不选,反选
    var checkboxAll = function () {
        //全选
        $('#table_main').find(':checkbox').each(function () {
            $(this).prop('checked', $(this).is(':checked') ? false : true);
        });
    }


</script>