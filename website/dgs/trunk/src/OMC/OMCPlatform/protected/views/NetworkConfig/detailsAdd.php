<div class="title">
    <h3>OMC北向接口数据核查>数据核查配置 > 网元数据配置 >明细配置 >配置添加</h3>
</div>
<div class="form-action">
    <form action="/NetworkConfig/AddDetails" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <table>
            <tr>
                <td>属性编码</td>
                <td>
                    <input type="text" name="code" required="required">
                </td>
            </tr>
            <tr>
                <td>重要度</td>
                <td>
                    <select name="importance_degree">
                        <option value="A">A类属性</option>
                        <option value="B">B类属性</option>
                        <option value="C">C类属性</option>
                        <option value="CA">CA类属性</option>
                        <option value="CB">CB类属性</option>
                        <option value="CC">CC类属性</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>英文名称</td>
                <td>
                    <input type="text" name="english_name" required="required">
                </td>
            </tr>
            <tr>
                <td>中文名称</td>
                <td>
                    <input type="text" name="chinese_name" required="required">
                </td>
            </tr>
            <tr>
                <td>定义</td>
                <td>
                    <input type="text" name="definition" value="" required="required">
                </td>
            </tr>
            <tr>
                <td>数据类型</td>
                <td>
                    <input type="text" name="data_type" value="" required="required">
                </td>
            </tr>
            <tr>
                <td>单位</td>
                <td>
                    <input type="text" name="company" value="">
                </td>
            </tr>
            <tr>
                <td>备注</td>
                <td>
                    <input type="text" name="remarks" value="">
                </td>
            </tr>
            <tr>
                <td>使用范围</td>
                <td>
                    <input type="checkbox" name="range[]" id="range1" value="PNF"><label for="range1">PNF</label>&nbsp;&nbsp;
                    <input type="checkbox" name="range[]" id="range2" value="VNF"><label for="range2">VNF</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="确定">
                </td>
                <td>
                    <input type="submit" value="返回" class="previous-page">
                </td>
            </tr>
        </table>
    </form>
</div>
<script>
    $('.previous-page').click(function(){
        history.back(-1);
        return false;
    });
</script>


