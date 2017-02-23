<?php
namespace Home\Model;
use Think\Model\ViewModel;
class OrganizationViewModel extends ViewModel{
	
	public $viewFields = array(

		//视图模型 同表关联的例子

		//第一个表不需要改名字
		'Organization' => array('id','name','address','code','_type'=>'LEFT'),

		//第二个前面的表名要改名字，_table 指向他所代表的那个表，_as指向修改后的表名
		'Organization2' => array('name'=>'pname','_table'=>'sk_organization','_as'=>'Organization2','_on'=>'Organization2.id=Organization.pid')
	);
}
