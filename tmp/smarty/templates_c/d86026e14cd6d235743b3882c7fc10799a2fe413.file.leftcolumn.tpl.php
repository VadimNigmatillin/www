<?php /* Smarty version Smarty-3.1.6, created on 2021-12-24 14:42:14
         compiled from "../views/default\leftcolumn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116352061761c4c9d30780a3-95683878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd86026e14cd6d235743b3882c7fc10799a2fe413' => 
    array (
      0 => '../views/default\\leftcolumn.tpl',
      1 => 1640356926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116352061761c4c9d30780a3-95683878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61c4c9d30854d',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c4c9d30854d')) {function content_61c4c9d30854d($_smarty_tpl) {?>	

<div id="leftColumn">


<div id="leftMenu">
	<div class="menuCaption">Меню:</div>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rsCategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?> 
                   <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />

                     
    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])){?>
      <?php  $_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->key => $_smarty_tpl->tpl_vars['itemChild']->value){
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
?>
          --<a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
      <?php } ?>
    <?php }?>
  <?php } ?>


                   
</div>  

<div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                <div id="registerBoxHidden">
                    email:<br/>
                    <input type="text" id="email" name="email" value=""/><br/>
                    пароль:<br/>
                    <input type="password" id="pwd1" name="pwd1" value=""/><br/>
                    повторить пароль:<br/>
                    <input type="password" id="pwd2" name="pwd2" value=""/><br/>
                    <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/><br/>

                </div>

                </div>













<div class="menuCaption">Корзина</div>
            <a href="/cart/" title="Перейти в корзину">В корзине</a>
            <span id="cartCntItems">
            <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
<?php }else{ ?>пусто<?php }?>
            </span>



</div><?php }} ?>