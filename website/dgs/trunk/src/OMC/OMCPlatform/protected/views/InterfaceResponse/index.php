<input type="radio" name="sildeInput" value="0" id="Input11" checked="" hidden="">
<input type="radio" name="sildeInput" value="1" id="Input21" hidden="">
<div class="title"><h3>OMC北向接口数据核查> 接口核查应答 > 应答情况统计</h3></div>
<div class="sildeInput-1">
    <div class="search">
        <form id="form_search" metdod="post">
            <input type="hidden" value="<?php /*echo Yii::app()->getRequest()->getCsrfToken(); */ ?>"
                   name="YII_CSRF_TOKEN"/>

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
                <span>属性类型</span>
                <select name="property" id="">
                    <option value="全部">全部</option>
                    <option value="资源属性">资源属性</option>
                    <option value="性能属性">性能属性</option>
                </select>
            </div>
            <div class="list-5">
                <input type="submit" value="查询" onclick="$('input[name=pageno]').val(1);">
            </div>
            <div class="list-5"></div>
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
                <span>规范版本</span>
                <select name="" id="">
                    <option value="3.1.4">3.1.4</option>
                </select>
            </div>
            <div class="list-5">
                <span>设备版本</span>
                <select name="" id="">
                    <option value="全部">全部</option>
                </select>
            </div>
            <div class="list-5">
                <input type="submit" value="导出">
            </div>
        </form>
    </div>
    <div class="content min">
        <table border="1" cellspacing="0" width="100%" style="text-align: center;">
            <tr>
                <td colspan="2px" style="background-color:#fdfd98;height: 47px;width:1147px;">
                    CSCF-NRM(V3.1.4)应答情况汇总表
                </td>
            </tr>
            <tr>
                <td>设备厂家名称</td>
                <td>华为公司</td>
            </tr>
            <tr>
                <td>省公司</td>
                <td>北京</td>
            </tr>
            <tr>
                <td>应答日期</td>
                <td>2018-07-28</td>
            </tr>
            <tr>
                <td>本应答文档适用的设备版本(及要求)</td>
                <td>VersionXX(patchXX)</td>
            </tr>
            <tr>
                <td>对OMC的版本(及补丁)要求</td>
                <td>OMC版本需要升级到Vxxxx(或/并 加载补丁YYYY)</td>
            </tr>
        </table>
    </div>

</div>
<div class="sildeInput-2">
    <div class="search">
        <form id="form_search2" metdod="post">
            <input type="hidden" value="<?php /*echo Yii::app()->getRequest()->getCsrfToken(); */ ?>"
                   name="YII_CSRF_TOKEN"/>

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
                <span>属性类型</span>
                <select name="property" id="">
                    <option value="全部">全部</option>
                    <option value="资源属性">资源属性</option>
                    <option value="性能属性">性能属性</option>
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
            <div class="list-5">
                <span>省公司</span>
                <select name="" id="">
                    <option value="全部">全部</option>
                    <option value="北京">北京</option>
                </select>
            </div>
            <div class="list-5">
                <span>规范版本</span>
                <select name="" id="">
                    <option value="3.1.4">3.1.4</option>
                </select>
            </div>
            <div class="list-5">
                <span>设备版本</span>
                <select name="" id="">
                    <option value="全部">全部</option>
                </select>
            </div>
            <div class="list-5">
            </div>
            <div class="list-5">
                <input type="submit" value="导出">
            </div>
        </form>
    </div>
    <div class="content min">
        <table border="1" cellspacing="0" width="100%" style="text-align: center;">
            <tr>
                <td colspan="2px" style="background-color:#fdfd98;height: 47px;width:1147px;">
                    CSCF-NRM(V3.1.4)应答情况汇总表
                </td>
            </tr>
            <tr>
                <td>设备厂家名称</td>
                <td>华为公司</td>
            </tr>
            <tr>
                <td>省公司</td>
                <td>北京</td>
            </tr>
            <tr>
                <td>应答日期</td>
                <td>2018-07-28</td>
            </tr>
            <tr>
                <td>本应答文档适用的设备版本(及要求)</td>
                <td>VersionXX(patchXX)</td>
            </tr>
            <tr>
                <td>对OMC的版本(及补丁)要求</td>
                <td>OMC版本需要升级到Vxxxx(或/并 加载补丁YYYY)</td>
            </tr>
        </table>
    </div>
</div>

<label class="label label1" for="Input11">汇总统计</label><label class="label label2" for="Input21">明细统计</label>
<div id="main-table">
    <div class="sildeInput-1">
        <table border="1" cellspacing="0">
            <tr>
                <th>属性类型</th>
                <th>规范定义数量</th>
                <th>不适用数量</th>
                <th>当前支持数量</th>
                <th>当前+1Q支持数量</th>
                <th>当前+2Q支持数量</th>
                <th>当前+3Q支持数量</th>
                <th>当前+4Q支持数量</th>
                <th>当前支持率</th>
                <th>综合支持率</th>
                <th>最终支持率</th>
            </tr>
            <tr>
                <td>A类</td>
                <td>1</td>
                <td>NA</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>B类</td>
                <td>1</td>
                <td>NA</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>C类</td>
                <td>1</td>
                <td>NA</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>CA类</td>
                <td>1</td>
                <td>NA</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>CB类</td>
                <td>1</td>
                <td>NA</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>CC类</td>
                <td>1</td>
                <td>NA</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
            </tr>
        </table>
    </div>
    <div class="sildeInput-2">
        <table border="1" cellspacing="0">
            <tr>
                <th></th>
                <th>索引</th>
                <th>管理对象类</th>
                <th>备注</th>
                <th>包含上级关系类</th>
                <th>A类指标总数</th>
                <th>B类指标总数</th>
                <th>C类指标总数</th>
                <th>CA类指标总数</th>
                <th>CB类指标总数</th>
                <th>CC类指标总数</th>
                <th>小计</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>AA</td>
                <td>ManagedElement</td>
                <td></td>
                <td>SubNetwork</td>
                <td>1</td>
                <td>16</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td class="table_color_1">17</td>
                <td><a href="<?php echo Yii::app()->request->baseUrl; ?>/InterfaceResponse/menu">分类</a>&nbsp;<a href="<?php echo Yii::app()->request->baseUrl; ?>/InterfaceResponse/detail">明细</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>AB</td>
                <td>PcscfFunction</td>
                <td>仅适用于VoBB</td>
                <td>ManagedElement</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>8</td>
                <td>0</td>
                <td class="table_color_1">8</td>
                <td><a href="javaScript:;">分类</a>&nbsp;<a href="javaScript:;">明细</a></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="table_color_1"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="table_color_1"></td>
                <td></td>
            </tr>
            <tr class="table_color_1">
                <td></td>
                <td>合计</td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>60</td>
                <td>0</td>
                <td>0</td>
                <td>60</td>
                <td>28</td>
                <td>149</td>
                <td></td>
            </tr>
        </table>
    </div>


</div>
