# daily-skill
日常技能记录
alter table my_map change name name varchar(32) character set utf8;  修改数据库列的编码
svn checkout https://svn.url/project --username xxxx --password xxx ./mpath    mac 下 svn  checkout


jq获取checkbox选中的对象,i为遍历的下标
 $('input[name="rolRes"]:checked').each(function(i,dom){
      alert($(this).val());
});
 
 事件查看器，可以查看apache错误
 
触发器如果不存在则增加
INSERT INTO m_wjb VALUES(new.wjbh,new.wjbm,new.pssj,new.wjdx,new.wjlx,new.jybh,new.cpxh,new.jgdm,new.ccfwq,new.ccwz,new.bfwz,new.wlwz,new.gzz_xh,new.scsj,new.bzlx,new.sltwz,new.wjcd,new.sfcjcg,new.sfsccg,new.ajbh,new.wjbhts,new.wjbz,new.ckcs,new.sfyc,new.wjsfsc,new.port,new.xzcs,new.kaoping,new.fwq_ccwz,new.fwq_bfwz,new.fwq_wlwz,new.fwq_sltwz,new.fwq_port,new.ddfwqsccg,new.fwq_scsj) ON DUPLICATE KEY UPDATE wjbh=new.wjbh
