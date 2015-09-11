<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/homepage.css" type="text/css" rel="stylesheet" />
      <div class="main_cnt">
          <div class="cen_cnt ads">
          
          </div>
          <div class="first" style="margin-top:10px;">
             
             <div class="lef">
                <div class="litl_bx">
                   <div class="all_titl">
                       <div class="titl_lef">
                         新手入门
                       </div>
                       <div class="titl_rit">
                         <a href="<?php echo U(GROUP_NAME.'/School/arti_list');?>" target="_blank">
                           更多》
                         </a>
                       </div>
                   </div>
                   <div class="litl_cnt">
                     <table class="tab_list">
                       <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                          <td>
                             <a href="<?php echo U(GROUP_NAME.'/School/arti_detail',array('id'=>$v['id']));?>" target="_blank">
                               <?php echo ($v["titl"]); ?>
                             </a>
                          </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                     </table>
                   </div>
                </div>
                <div class="litl_bx">
                   <div class="all_titl">
                     
                     <div class="titl_lef">
                     最近手机网赚项目
                     </div>
                     <div class="titl_rit">
                       <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$cnt['id']));?>" target="_blank">
                         更多》
                       </a>
                     </div>
                   </div>
                   <div class="litl_cnt">
                     <table class="tab_list">
                      <?php if(is_array($pro)): $i = 0; $__LIST__ = array_slice($pro,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                         <td>
                            <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$vo['id']));?>" target="_blank">
                              <?php echo ($vo["titl"]); ?>
                            </a>
                         </td>
                       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                     </table>
                   </div>
                </div>
                <div class="litl_bx">
                   <div class="all_titl">
                     <div class="titl_lef">
                     最近购物返利
                     </div>
                     <div class="titl_rit">
                       <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$cnt['id']));?>" target="_blank">
                        更多》
                        </a>
                     </div>
                   </div>
                   <div class="litl_cnt">
                      <table class="tab_list">
                      <?php if(is_array($pro)): $i = 0; $__LIST__ = array_slice($pro,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pur): $mod = ($i % 2 );++$i;?><tr>
                          <td>
                             <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$vo['id']));?>" target="_blank">
                               <?php echo ($pur["titl"]); ?>
                             </a>
                          </td>
                       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                     </table>
                   </div>
                </div>
                
                
             </div>
             <div class="cen">
                
                <div class="midl_bx">
                   <div class="all_titl">
                     <div class="titl_lef">
                     网赚项目最新发布
                     </div>
                     <div class="titl_rit">
                       <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$cnt['id']));?>" target="_blank">
                         更多》
                       </a>
                     </div>
                   </div>
                   <div class="midl_cnt">
                      <table class="midl_tab">
                       <?php if(is_array($pro)): $i = 0; $__LIST__ = array_slice($pro,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cnt): $mod = ($i % 2 );++$i;?><tr>
                         <td>
                           <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$cnt['id']));?>" target="_blank">
                             <?php echo ($cnt["titl"]); ?>
                           </a>
                         </td>
                         <td>
                            发布时间:<?php echo (date("Y-m-d",$cnt["time"])); ?>
                         </td>
                       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </table>
                   </div>
                </div>
                <div class="midl_bx">
                   <div class="all_titl">
                       <div class="titl_lef">
                       网赚精选
                       </div>
                       <div class="titl_rit">
                         <a href="<?php echo U(GROUP_NAME.'/Index/info_detail');?>"  target="_blank">
                           更多》
                         </a>
                       </div>
                   </div>
                   <div class="midl_cnt">
                     <?php if(is_array($pro)): $i = 0; $__LIST__ = array_slice($pro,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$main): $mod = ($i % 2 );++$i;?><div class="choose">
                           <a href="<?php echo U(GROUP_NAME.'/Index/info_detail',array('id'=>$main['id']));?>" target="_blank">
                            <table>
                              <tr>
                                <td>标题:</td>
                                <td colspan="3"><?php echo ($main["titl"]); ?></td>
                              </tr>
                              <tr>
                                <td>项目名称：</td>
                                <td><?php echo ($main["name"]); ?></td>
                                <td align="right">有效期至：</td>
                                <td><?php echo ($main["deadline"]); ?></td>
                              </tr>
                            </table>
                            </a>
                         </div><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                   </div>
                </div>
                
             </div>
             <div class="rit">
                
                <div class="litl_bx rit_one">
                    <table>
                      <tr>
                          <td>
                              <input type="button" onclick="window.location.href='<?php echo U('/Admin/regedit');?>'" value="我要注册"/>
                          </td>
                          <td>
                              <input type="button" value="发帖须知"/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <input type="button" id="publish" onclick="window.location.href='<?php echo U('/Index/info_pub');?>'" value="发布项目"/>
                          </td>
                          <td>
                              <input type="button" onclick="window.location.href='<?php echo U('/School/arti_list');?>'" value="网赚学堂"/>
                          </td>
                      </tr>
                    </table>
                </div>
                
                <div class="litl_bx">
                   <div class="all_titl">
                     <div class="titl_lef">
                     网赚经验分享
                     </div>
                     <div class="titl_rit">
                       <a href="<?php echo U(GROUP_NAME.'/School/arti_detail');?>" target="_blank">
                        更多》
                       </a>
                     </div>
                   </div>
                   <div class="">
                       <table class="tab_list">
                          <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td>
                                 <a href="<?php echo U(GROUP_NAME.'/School/arti_detail',array('id'=>$v['id']));?>" target="_blank"><?php echo ($v["titl"]); ?></a>
                              </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </table>
                   </div>
                </div>
                
                <div class="litl_bx rit_two">
                   <div class="all_titl">
                       <div class="titl_lef">
                       网赚中的骗局
                       </div>
                       <div class="titl_rit">
                         <a href="<?php echo U(GROUP_NAME.'/School/arti_detail');?>" target="_blank">
                         更多》
                         </a>
                       </div>
                   </div>
                   <div class="">
                       <table class="tab_list">
                         <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td>
                                 <a href="<?php echo U(GROUP_NAME.'/School/arti_detail',array('id'=>$v['id']));?>" target="_blank"><?php echo ($v["titl"]); ?></a>
                              </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                       </table>
                   </div>
                </div>
                
                
             </div>
             
          </div>
          
      </div>