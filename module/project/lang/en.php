<?php
/**
 * The project module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: en.php 5094 2013-07-10 08:46:15Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
/* Fields. */
$lang->project->common        = $lang->projectCommon;
$lang->project->allProjects   = 'All';
$lang->project->type          = 'Type';
$lang->project->name          = 'Name';
$lang->project->code          = 'Alias';
$lang->project->begin         = 'Begin';
$lang->project->end           = 'End';
$lang->project->dateRange     = 'Duration';
$lang->project->to            = 'To';
<<<<<<< HEAD
<<<<<<< HEAD
$lang->project->days          = 'Man-Day';
$lang->project->day           = 'day';
$lang->project->workHour      = 'Hours';
=======
$lang->project->days          = 'Man Day';
=======
$lang->project->days          = 'Man-Day';
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454
$lang->project->day           = ' days';
$lang->project->workHour      = ' hours';
>>>>>>> d3fa148cb3d0ea19eb92b37374b0ec4e2a64ec6f
$lang->project->totalHours    = 'Work Hours';
$lang->project->totalDays     = 'Work Days';
$lang->project->status        = 'Status';
$lang->project->desc          = 'Description';
$lang->project->owner         = 'Owner';
$lang->project->PO            = 'PO';
$lang->project->PM            = 'PM';
$lang->project->QD            = 'QA Manager';
$lang->project->RD            = 'Release Manager';
$lang->project->qa            = 'QA';
$lang->project->release       = 'Release';
$lang->project->acl           = 'Access Control';
$lang->project->teamname      = 'Team Name';
$lang->project->order         = "Sort {$lang->projectCommon}";
$lang->project->products      = "Link {$lang->productCommon}";
$lang->project->whitelist     = 'Whitelist';
$lang->project->totalEstimate = 'Estimates';
$lang->project->totalConsumed = 'Cost';
$lang->project->totalLeft     = 'Left';
$lang->project->progress      = 'Progress';
$lang->project->hours         = '%s Estimates, %s Cost, %s Left.';
$lang->project->viewBug       = 'Bugs';
$lang->project->noProduct     = "No {$lang->productCommon}";
$lang->project->createStory   = "Create Story";
$lang->project->all           = 'All';
$lang->project->undone        = 'Uncompleted';
$lang->project->unclosed      = 'Unclosed';
<<<<<<< HEAD
<<<<<<< HEAD
$lang->project->typeDesc      = 'No story, bug, build, test task or Burndown is allowed in OPS';
$lang->project->mine          = 'My: ';
=======
$lang->project->typeDesc      = 'No story, bug, build, test task or burndown is allowed in OPS';
=======
$lang->project->typeDesc      = 'No story, bug, build, test or burndown is allowed in OPS';
<<<<<<< HEAD
$lang->project->mine          = 'My: ';
=======
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454
$lang->project->mine          = 'Mine: ';
>>>>>>> d3fa148cb3d0ea19eb92b37374b0ec4e2a64ec6f
>>>>>>> 1f8899a84819dad5ffe811c8eb667fd33e01136f
$lang->project->other         = 'Other:';
$lang->project->deleted       = 'Deleted';
$lang->project->delayed       = 'Delayed';
$lang->project->product       = $lang->project->products;
<<<<<<< HEAD
$lang->project->readjustTime  = 'Change project duration';
$lang->project->readjustTask  = 'Change task duration';
=======
$lang->project->readjustTime  = "Adjust {$lang->projectCommon} begin and end time";
$lang->project->readjustTask  = 'Adjust task start date and deadline';
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454
$lang->project->effort        = 'Effort';
$lang->project->relatedMember = 'Team Member';

$lang->project->start    = 'Start';
$lang->project->activate = 'Activate';
$lang->project->putoff   = 'Delay';
$lang->project->suspend  = 'Suspend';
$lang->project->close    = 'Close';
$lang->project->export   = 'Export';

$lang->project->typeList['sprint']    = 'Sprint';
$lang->project->typeList['waterfall'] = 'Waterfall';
$lang->project->typeList['ops']       = 'OPS';

$lang->project->endList[7]   = '1 Week';
$lang->project->endList[14]  = '2 Weeks';
$lang->project->endList[31]  = '1 Month';
$lang->project->endList[62]  = '2 Months';
$lang->project->endList[93]  = '3 Months';
$lang->project->endList[186] = '6 Months';
$lang->project->endList[365] = '1 Year';

$lang->team = new stdclass();
$lang->team->account    = 'Username';
$lang->team->role       = 'Role';
$lang->team->join       = 'Joined';
$lang->team->hours      = 'Hour/Day';
$lang->team->days       = 'Work Days';
$lang->team->totalHours = 'Total Hours';

$lang->team->limited            = 'limited user';
$lang->team->limitedList['no']  = 'No';
$lang->team->limitedList['yes'] = 'Yes';

$lang->project->basicInfo = 'Basic Info';
$lang->project->otherInfo = 'Other Info';

/* 字段取值列表。*/
$lang->project->statusList['wait']      = 'Pending';
$lang->project->statusList['doing']     = 'Doing';
$lang->project->statusList['suspended'] = 'Suspend';
$lang->project->statusList['closed']    = 'Closed';

$lang->project->aclList['open']    = "Default (Users who can visit {$lang->projectCommon} have access to it.)";
$lang->project->aclList['private'] = 'Private (For team members only.)';
$lang->project->aclList['custom']  = 'Whitelist (Team members and the whitelist members have access to it.)';

/* 方法列表。*/
$lang->project->index             = "Home";
<<<<<<< HEAD
$lang->project->task              = 'Tasks';
<<<<<<< HEAD
$lang->project->groupTask         = 'View by Group';
=======
=======
$lang->project->task              = 'Task';
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454
$lang->project->groupTask         = 'Group View';
>>>>>>> d3fa148cb3d0ea19eb92b37374b0ec4e2a64ec6f
$lang->project->story             = 'Story';
$lang->project->bug               = 'Bug';
$lang->project->dynamic           = 'Dynamic';
$lang->project->latestDynamic     = 'Latest Dynamic';
$lang->project->build             = 'Build';
<<<<<<< HEAD
<<<<<<< HEAD
$lang->project->testtask          = 'Test';
=======
$lang->project->testtask          = 'Test Task';
>>>>>>> d3fa148cb3d0ea19eb92b37374b0ec4e2a64ec6f
=======
$lang->project->testtask          = 'Test';
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454
$lang->project->burn              = 'Burndown';
$lang->project->computeBurn       = 'Update';
$lang->project->burnData          = 'Burndown Data';
$lang->project->fixFirst          = 'Edit estimates of 1st Day';
$lang->project->team              = 'Team Member';
$lang->project->doc               = 'Doc';
$lang->project->doclib            = 'Doc Library';
$lang->project->manageProducts    = 'Link ' . $lang->productCommon;
$lang->project->linkStory         = 'Link Story';
$lang->project->linkStoryByPlan   = 'Link Story From Plan';
$lang->project->linkPlan          = 'Link Plan';
$lang->project->unlinkStoryTasks  = 'Unlink';
$lang->project->linkedProducts    = 'Linked Product';
$lang->project->unlinkedProducts  = 'Unlinked Product';
$lang->project->view              = "Overview";
$lang->project->create            = "Create {$lang->projectCommon}";
$lang->project->copy              = "Copy {$lang->projectCommon}";
$lang->project->delete            = "Delete";
$lang->project->browse            = "Browse";
$lang->project->edit              = "Edit";
$lang->project->batchEdit         = "Batch Edit";
<<<<<<< HEAD
$lang->project->manageMembers     = 'Manange Team';
=======
$lang->project->manageMembers     = 'Manage Team';
>>>>>>> d3fa148cb3d0ea19eb92b37374b0ec4e2a64ec6f
$lang->project->unlinkMember      = 'Unlink Member';
$lang->project->unlinkStory       = 'Unlink Story';
$lang->project->batchUnlinkStory  = 'Batch Unlink Story';
$lang->project->importTask        = 'Import Task';
$lang->project->importPlanStories = 'Link Story From Plan';
$lang->project->importBug         = 'Import Bug';
$lang->project->updateOrder       = 'Sort';
$lang->project->tree              = 'Tree';
$lang->project->treeTask          = 'Show Task';
$lang->project->treeStory         = 'Show Story';
$lang->project->treeOnlyTask      = 'Tree View Show Task';
$lang->project->treeOnlyStory     = 'Tree View Show Story';
$lang->project->storyKanban       = 'Story Kanban';
$lang->project->storySort         = 'Sort Story';
$lang->project->importPlanStory   = '' . $lang->projectCommon . ' is created!\nDo you want to import stories linked to the plan?';
$lang->project->iteration         = 'Iteration';
$lang->project->iterationInfo     = '%s Iterations';
$lang->project->viewAll           = 'View All';

/* 分组浏览。*/
$lang->project->allTasks     = 'All';
$lang->project->assignedToMe = 'My';
$lang->project->myInvolved   = 'Involved';

$lang->project->statusSelects['']             = 'More';
$lang->project->statusSelects['wait']         = 'Pending';
$lang->project->statusSelects['doing']        = 'Doing';
$lang->project->statusSelects['finishedbyme'] = 'FinishedByMe';
$lang->project->statusSelects['done']         = 'Done';
$lang->project->statusSelects['closed']       = 'Closed';
$lang->project->statusSelects['cancel']    :   = 'Canceled';

$lang->project->groups['']           = 'Group';
$lang->project->groups['story']      = 'By Story';
$lang->project->groups['status']     = 'By Status';
$lang->project->groups['pri']        = 'By Priority';
$lang->project->groups['assignedTo'] = 'By AssignTo';
$lang->project->groups['finishedBy'] = 'By FinishBy';
$lang->project->groups['closedBy']   = 'By ClosedBy';
$lang->project->groups['type']       = 'By Type';

$lang->project->groupFilter['story']['all']         = $lang->project->all;
$lang->project->groupFilter['story']['linked']      = 'LinkedtoStory Task';
$lang->project->groupFilter['pri']['all']           = $lang->project->all;
$lang->project->groupFilter['pri']['noset']         = 'Not set';
$lang->project->groupFilter['assignedTo']['undone'] = 'Uncompleted';
$lang->project->groupFilter['assignedTo']['all']    = $lang->project->all;

$lang->project->byQuery = 'Search';

/* 查询条件列表。*/
$lang->project->allProject      = "All {$lang->projectCommon}";
$lang->project->aboveAllProduct = "All the above {$lang->productCommon}";
$lang->project->aboveAllProject = "All the above {$lang->projectCommon}";

/* 页面提示。*/
<<<<<<< HEAD
<<<<<<< HEAD
$lang->project->selectProject   = "Select {$lang->projectCommon}";
$lang->project->beginAndEnd     = 'Duration';
$lang->project->begin           = 'Begin';
$lang->project->end             = 'End';
$lang->project->lblStats        = 'Man-Hour Summary(h) : ';
$lang->project->stats           = '<strong>%s</strong> Available, <strong>%s</strong> Total Estimates, <strong>%s</strong> Cost, <strong>%s</strong> Left.';
$lang->project->taskSummary     = "Tasks on this page : <strong>%s</strong> Total, <strong>%s</strong> Wait, <strong>%s</strong> Doing;  &nbsp;&nbsp;&nbsp;  Hours : <strong>%s</strong> Est., <strong>%s</strong> Cost, <strong>%s</strong> Left.";
$lang->project->checkedSummary  = " <strong>%total%</strong> Checked, <strong>%wait%</strong> Wait, <strong>%doing%</strong> Doing;    Hours: <strong>%estimate%</strong>  Est., <strong>%consumed%</strong> Cost, <strong>%left%</strong> Left.";
$lang->project->memberHoursAB   = "%s has <strong>%s</strong> Hours";
$lang->project->memberHours     = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Working Hours</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->countSummary    = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tasks</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Doing</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Wait</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->project->timeSummary     = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Est.</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Cost</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Left</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->groupSummaryAB  = "<div>Tasks <strong>%s ：</strong><span class='text-muted'>Wait</span> %s &nbsp; <span class='text-muted'>Doing</span> %s</div><div>Est. <strong>%s ：</strong><span class='text-muted'>Cost</span> %s &nbsp; <span class='text-muted'>Left</span> %s</div>";
$lang->project->wbs             = "Work Breakdown";
$lang->project->batchWBS        = "Batch Work Breakdown";
$lang->project->howToUpdateBurn = "<a href='https://www.zentao.pm/book/zentaomanual/free-open-source-project-management-software-updateburndowncharts-98.html' target='_blank' title='How to Update the Burndown Chart?' class='btn btn-link'>Help <i class='icon icon-help'></i></a>";
$lang->project->whyNoStories    = "No Story can be linked. Please check whether there is Story in {$lang->projectCommon} linked {$lang->productCommon} and make sure it has been reviewed.";
$lang->project->productStories  = "{$lang->projectCommon} linked  story is the subeset of {$lang->productCommon}, which can only be linked after review. Please <a href='%s'> Link Story</a>。";
$lang->project->haveDraft       = "There are %s draft stories that cannot be linked.";
$lang->project->doneProjects    = 'Done';
$lang->project->selectDept      = 'Select Department';
$lang->project->selectDeptTitle = 'Select Department';
$lang->project->copyTeam        = 'Copy Team';
$lang->project->copyFromTeam    = "Copy from {$lang->projectCommon} Team: <strong>%s</strong>";
$lang->project->noMatched       = "No $lang->projectCommon including '%s'can be found.";
$lang->project->copyTitle       = "Choose a {$lang->projectCommon} to copy.";
$lang->project->copyTeamTitle   = "Choose {$lang->projectCommon}Team to copy.";
$lang->project->copyNoProject   = "No {$lang->projectCommon} can be copied.";
$lang->project->copyFromProject = "Copy from {$lang->projectCommon} <strong>%s</strong>";
$lang->project->cancelCopy      = 'Cancel Copy';
$lang->project->byPeriod        = 'By Time';
$lang->project->byUser          = 'By User';
$lang->project->noProject       = 'No projects. ';
$lang->project->noMembers       = 'No members. ';
=======
$lang->project->linkStoryByPlanTips = 'It will link all stories in this plan to the project.';
=======
$lang->project->linkStoryByPlanTips = "It will link all stories in this plan to the {$lang->projectCommon}.";
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454
$lang->project->selectProject       = "Select {$lang->projectCommon}";
$lang->project->beginAndEnd         = 'Duration';
$lang->project->begin               = 'Begin';
$lang->project->end                 = 'End';
$lang->project->lblStats            = 'Total Effort(h) : ';
$lang->project->stats               = '<strong>%s</strong> Available, <strong>%s</strong> Total Estimates, <strong>%s</strong> Cost, <strong>%s</strong> Left.';
$lang->project->taskSummary         = "Tasks on this page : <strong>%s</strong> Total, <strong>%s</strong> Wait, <strong>%s</strong> Doing;  &nbsp;&nbsp;&nbsp;  Hours : <strong>%s</strong> Est., <strong>%s</strong> Cost, <strong>%s</strong> Left.";
$lang->project->checkedSummary      = " <strong>%total%</strong> Checked, <strong>%wait%</strong> Wait, <strong>%doing%</strong> Doing;    Hours: <strong>%estimate%</strong>  Est., <strong>%consumed%</strong> Cost, <strong>%left%</strong> Left.";
$lang->project->memberHoursAB       = "%s has <strong>%s</strong> Hours";
$lang->project->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Working Hours</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tasks</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Doing</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Wait</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->project->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Est.</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Cost</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Left</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->groupSummaryAB      = "<div>Tasks <strong>%s ：</strong><span class='text-muted'>Wait</span> %s &nbsp; <span class='text-muted'>Doing</span> %s</div><div>Est. <strong>%s ：</strong><span class='text-muted'>Cost</span> %s &nbsp; <span class='text-muted'>Left</span> %s</div>";
$lang->project->wbs                 = "Decompose Task";
$lang->project->batchWBS            = "Batch Decompose";
$lang->project->howToUpdateBurn     = "<a href='https://api.zentao.pm/goto.php?item=burndown' target='_blank' title='How to Update the Burndown Chart?' class='btn btn-link'>Help <i class='icon icon-help'></i></a>";
$lang->project->whyNoStories        = "No Story can be linked. Please check whether there is Story in {$lang->projectCommon} linked {$lang->productCommon} and make sure it has been reviewed.";
$lang->project->productStories      = "{$lang->projectCommon} linked  story is the subeset of {$lang->productCommon}, which can only be linked after review. Please <a href='%s'> Link Story</a>。";
$lang->project->haveDraft           = "There are %s draft stories can't be linked.";
$lang->project->doneProjects        = 'Done';
$lang->project->selectDept          = 'Department';
$lang->project->selectDeptTitle     = 'Department';
$lang->project->copyTeam            = 'Copy Team';
$lang->project->copyFromTeam        = "Copy from {$lang->projectCommon} Team: <strong>%s</strong>";
$lang->project->noMatched           = "No $lang->projectCommon including '%s'can be found.";
$lang->project->copyTitle           = "Choose a {$lang->projectCommon} to copy.";
$lang->project->copyTeamTitle       = "Choose {$lang->projectCommon}Team to copy.";
$lang->project->copyNoProject       = "No {$lang->projectCommon} can be copied.";
$lang->project->copyFromProject     = "Copy from {$lang->projectCommon} <strong>%s</strong>";
$lang->project->cancelCopy          = 'Cancel Copy';
$lang->project->byPeriod            = 'By Time';
$lang->project->byUser              = 'By User';
$lang->project->noProject           = "No {$lang->projectCommon}. ";
$lang->project->noMembers           = 'No members. ';
>>>>>>> d3fa148cb3d0ea19eb92b37374b0ec4e2a64ec6f

/* 交互提示。*/
$lang->project->confirmDelete         = "Do you want to delete {$lang->projectCommon}[%s]?";
$lang->project->confirmUnlinkMember   = "Do you want to unlink this User from {$lang->projectCommon}?";
$lang->project->confirmUnlinkStory    = "Do you want to unlink this Story from {$lang->projectCommon}?";
$lang->project->errorNoLinkedProducts = "No linked {$lang->productCommon} found in {$lang->projectCommon}. You will be directed to {$lang->productCommon}linked page.";
$lang->project->errorSameProducts     = "{$lang->projectCommon} cannot be linked with multiple identical {$lang->productCommon}。";
$lang->project->accessDenied          = "Your access to {$lang->projectCommon} is denied!";
$lang->project->tips                  = 'Note';
$lang->project->afterInfo             = "{$lang->projectCommon} is created. Next you can ";
$lang->project->setTeam               = 'Set Team';
$lang->project->linkStory             = 'Link Story';
$lang->project->createTask            = 'Create Task';
$lang->project->goback                = "Go Back";
$lang->project->noweekend             = 'excl. Weekend';
$lang->project->withweekend           = 'incl. Weekend';
$lang->project->interval              = 'Intervals';
$lang->project->fixFirstWithLeft      = 'Modify the left';

$lang->project->action = new stdclass();
$lang->project->action->opened  = '$date, created by <strong>$actor</strong> .' . "\n";
$lang->project->action->managed = '$date, managed by <strong>$actor</strong> .' . "\n";
$lang->project->action->extra   = 'The linked products are %s.';

/* 统计。*/
$lang->project->charts = new stdclass();
$lang->project->charts->burn = new stdclass();
$lang->project->charts->burn->graph = new stdclass();
$lang->project->charts->burn->graph->caption      = "Burndown";
$lang->project->charts->burn->graph->xAxisName    = "Date";
$lang->project->charts->burn->graph->yAxisName    = "Hour";
$lang->project->charts->burn->graph->baseFontSize = 12;
$lang->project->charts->burn->graph->formatNumber = 0;
$lang->project->charts->burn->graph->animation    = 0;
$lang->project->charts->burn->graph->rotateNames  = 1;
$lang->project->charts->burn->graph->showValues   = 0;
$lang->project->charts->burn->graph->reference    = 'Ideal';
$lang->project->charts->burn->graph->actuality    = 'Actual';

$lang->project->placeholder = new stdclass();
<<<<<<< HEAD
$lang->project->placeholder->code      = 'Alias of project name';
$lang->project->placeholder->totalLeft = 'Estimates at the beginning of the Project.';
=======
$lang->project->placeholder->code      = "Abbreviation of {$lang->projectCommon} name";
$lang->project->placeholder->totalLeft = "Estimates at the beginning of the {$lang->projectCommon}.";
>>>>>>> 58a5ce3d921a17cce37484db7696956508f5d454

$lang->project->selectGroup = new stdclass();
$lang->project->selectGroup->done = '(Done)';

$lang->project->orderList['order_asc']  = "Order Ascending";
$lang->project->orderList['order_desc'] = "Order Descending";
$lang->project->orderList['pri_asc']    = "Priority Ascending";
$lang->project->orderList['pri_desc']   = "Priority Descending";
$lang->project->orderList['stage_asc']  = "Stage Ascending";
$lang->project->orderList['stage_desc'] = "Stage Descending";

$lang->project->kanban        = "Kanban";
$lang->project->kanbanSetting = "Kanban Setting";
$lang->project->resetKanban   = "Reset Setting";
$lang->project->printKanban   = "Print Kanban";
$lang->project->bugList       = "Bugs";

$lang->project->kanbanHideCols   = 'Hide closed and canceled columns in Kanban';
$lang->project->kanbanShowOption = 'Unfold';
$lang->project->kanbanColsColor  = 'Custom column color';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Do you want to reset Kanban?';
$lang->kanbanSetting->optionList['0'] = 'Hide';
$lang->kanbanSetting->optionList['1'] = 'Show';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Print Kanban';
$lang->printKanban->content = 'Content';
$lang->printKanban->print   = 'Print';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'All';
$lang->printKanban->typeList['increment'] = 'Increment';

$lang->project->featureBar['task']['all']          = $lang->project->allTasks;
$lang->project->featureBar['task']['unclosed']     = $lang->project->unclosed;
$lang->project->featureBar['task']['assignedtome'] = $lang->project->assignedToMe;
$lang->project->featureBar['task']['myinvolved']   = $lang->project->myInvolved;
$lang->project->featureBar['task']['delayed']      = 'Delayed';
$lang->project->featureBar['task']['needconfirm']  = 'StoryChange';
$lang->project->featureBar['task']['status']       = $lang->project->statusSelects[''];

$lang->project->treeLevel = array();
$lang->project->treeLevel['all']   = 'Expand All';
$lang->project->treeLevel['root']  = 'Collapse All';
$lang->project->treeLevel['story'] = 'Show Story';
$lang->project->treeLevel['task']  = 'Show Task';

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->project->groups['story']);
    unset($lang->project->featureBar['task']['needconfirm']);
}
