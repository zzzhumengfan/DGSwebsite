package cmcc.cmri.dgs.process;

import java.text.ParseException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.activiti.engine.ProcessEngine;
import org.activiti.engine.ProcessEngineConfiguration;
import org.activiti.engine.RepositoryService;
import org.activiti.engine.RuntimeService;

public class StatisticalDataManagementProcess {

  public static void main(String[] args) throws ParseException {
    // 引擎配置
    ProcessEngine processEngine = ProcessEngineConfiguration.createProcessEngineConfigurationFromResourceDefault()
        .buildProcessEngine();
    
    RepositoryService repositoryService = processEngine.getRepositoryService();
    repositoryService.createDeployment().name("统计报表数据下线流程").addClasspathResource("diagrams/13_DataOffline.bpmn").deploy();

    RuntimeService runtimeService = processEngine.getRuntimeService();
    Map<String, Object> params1 = new HashMap<String, Object>();
    List<String> groupListRq = new ArrayList<String>();
    groupListRq.add("HQ_Shichangbu");
    groupListRq.add("HQ_Jihuabu");
    groupListRq.add("BR_Beijing");
    groupListRq.add("BR_Tianjin");
    params1.put("groupListRq", groupListRq);
    
    params1.clear();
    List<String> groupListSys = new ArrayList<String>();
    groupListSys.add("HQ_Yewuzhichengbu");
    groupListSys.add("HQ_Wangluobu");
    params1.put("groupListSys", groupListSys);
    
    //runtimeService.startProcessInstanceByKey("draftAndPublish_RPT", params1).getId();
    runtimeService.startProcessInstanceByMessage("管理部门发起");

  }
}