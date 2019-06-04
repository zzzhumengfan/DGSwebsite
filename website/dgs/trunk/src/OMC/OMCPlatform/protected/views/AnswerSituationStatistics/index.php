<style>
    #main-table table a{
        margin: 0px;
        padding: 0px;
        width:140px;
        height: 25px;
        display: inline-block;
        line-height: 25px;
    }
</style>
<div class="title"><h3>OMC北向接口数据核查> 接口核查应答 > 上传应答结果</h3></div>
<div class="search">
    <form id="form_search" action="fileQualityCheck" method="post">
        <input type="hidden" value="<?php echo Yii::app()->getRequest()->getCsrfToken(); ?>"
               name="YII_CSRF_TOKEN"/>
        <input type="hidden" name="pageno" value="<?= isset($pageno) ? $pageno : 1 ?>">
        <div class="list-4">
            <span>专业</span>
            <select name="specialty">
                <option value="无线网">无线网</option>
                <option value="核心网">核心网</option>
                <option value="传输网">传输网</option>
                <option value="IP网">IP网</option>
            </select>
        </div>
        <div class="list-4">
            <span>网元类型</span>
            <select name="network">
                <option value="CSCF">CSCF</option>
                <option value="NMF">NMF</option>
                <option value="PGW">PGW</option>
            </select>
        </div>
        <div class="list-4"></div>
        <div class="list-4"></div>
        <div class="list-4">
            <span>属性类型</span>
            <select name="property" id="">
                <option value="资源属性">资源属性</option>
                <option value="性能属性">性能属性</option>
            </select>
        </div>
        <div class="list-4">
            <span>规范版本</span>
            <select name="edition" id="">
                <option value="2.1.0">2.1.0</option>
                <option value="3.1.4">3.1.4</option>
            </select>
        </div>
        <div class="list-4">
            <input type="submit" class="search2" value="查询">
        </div>
    </form>
</div>
<div id="main-table">
    <table border="1" cellspacing="0">
        <tr>
            <td></td>
            <td>专业</td>
            <td>网元类型</td>
            <td>属性类型</td>
            <td>规范版本</td>
            <td>规范下载</td>
            <td>上传应答结果</td>
        </tr>
        <tr>
            <td>1</td>
            <td>核心网</td>
            <td>CSCF</td>
            <td>资源属性</td>
            <td>2.1.0</td>
            <td><a href="/assets/file/CSCF-NRM.xlsx">下载</a></td>
            <td><a href="<?php echo Yii::app()->request->baseUrl; ?>/AnswerSituationStatistics/add">上传应答结果</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>


