<div class="title"><h3>OMC北向接口数据核查 > 数据质量核查 > 属性支持情况明细</h3></div>
<div class="search">
    <form id="form_search" metdod="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="1">
        <div class="list-5">
            <span>支持情况</span>
            <select name="">
                <option value="全部">全部</option>
                <option value="支持">支持</option>
                <option value="不支持">不支持</option>
            </select>
        </div>
        <div class="list-5">
            <span>
                <input type="submit" value="查询">
            </span>
            <input type="submit" onclick="javascript :history.back(-1);" value="返回">
        </div>
    </form>
</div>
<div id="main-table">
        <table border="1" cellspacing="0" width="100%">
            <tr>
                <td></td>
                <td>索引</td>
                <td>管理对象类</td>
                <td>备注</td>
                <td>包含上级关系类</td>
                <td>A类属性数</td>
                <td>B类属性数</td>
                <td>C类属性数</td>
                <td>CA类属性数</td>
                <td>CB类属性数</td>
                <td>CC类属性数</td>
                <td>总属性数</td>
                <td>不支持属性数</td>
                <td>操作</td>
            </tr>
                <tr>
                    <td>1</td>
                    <td>AA</td>
                    <td>核心网</td>
                    <td>ManagedElement</td>
                    <td></td>
                    <td>SubNetwork</td>
                    <td>1</td>
                    <td>0</td>
                    <td>16</td>
                    <td>0</td>
                    <td>1</td>
                    <td>18</td>
                    <td>2</td>
                    <td><a>明细</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>AB</td>
                    <td>核心网</td>
                    <td>ManagedElement</td>
                    <td></td>
                    <td>SubNetwork</td>
                    <td>1</td>
                    <td>0</td>
                    <td>16</td>
                    <td>0</td>
                    <td>1</td>
                    <td>18</td>
                    <td>2</td>
                    <td><a href="<?= $this->createUrl('detail_index');?>">明细</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>AC</td>
                    <td>核心网</td>
                    <td>ManagedElement</td>
                    <td></td>
                    <td>SubNetwork</td>
                    <td>1</td>
                    <td>0</td>
                    <td>16</td>
                    <td>0</td>
                    <td>1</td>
                    <td>18</td>
                    <td>2</td>
                    <td><a>明细</a></td>
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

<script src="/js/styles.js"></script>
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
                        htmlStr += ' <th><input type="checkbox" name="mongId[]" value="' + datas.data[i]['_id']['$id'] + '" onclick="swapCheck2();"/></th>';
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
        if(bools){
            var objec = form_move('#form_search2', '/networkDataConfig/move');
            swapCheck2();
            fun();
        }else{
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
