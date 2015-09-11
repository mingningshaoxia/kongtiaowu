<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/index/css/index.css" rel="stylesheet" type="text/css"/>
<div class="main_cnt">
   <div class="detail">
      <div class="detail_ad">
         <img src="__PUBLIC__/index/images/pagead.jpg"/>
      </div>
      <table class="bigtab" align="left">
        <tr>
           <td>
             <table>
                <tr>
                    <td>标&emsp;&emsp;题:</td>
                    <td><?php echo ($row["titl"]); ?></td>
                </tr>
                <tr>
                    <td>项目名称:</td>
                    <td><?php echo ($row["name"]); ?></td>
                </tr>
                <tr>
                    <td>有效期至:</td>
                    <td><?php echo ($row["deadline"]); ?></td>
                </tr>
             </table>
           </td>
        </tr>
        <tr>
           <td>
              <div class="info_list" style="width:50%;">
                项目特点:<?php echo ($row["character"]); ?>
              </div>
           </td>
        </tr>
        <tr>
           <td>
               <div class="info_list">
                项目介绍:<?php echo ($row["introduce"]); ?>
               </div>
           </td>
        </tr>
        <tr>
           <td>
              <div class="handle">
                 <div class="handle_titl">
                   如何操作:
                 </div>
                 <div class="handle_cnt">
                   <?php echo ($row["handle"]); ?>
                 </div>
                 <div class="handle_btm">
                   <a href="<?php echo ($row["link"]); ?>" class="collect" target="_blank">点击去赚钱</a>
                   <a>点击收藏</a>
                 </div>
              </div>
           </td>
        </tr>
      </table>
   </div>
</div>