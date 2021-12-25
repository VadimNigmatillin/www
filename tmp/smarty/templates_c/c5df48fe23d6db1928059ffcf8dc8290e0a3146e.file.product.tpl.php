<?php /* Smarty version Smarty-3.1.6, created on 2021-12-24 13:25:59
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65950134061c59265405023-33399043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1640352354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65950134061c59265405023-33399043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_61c592654314a',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61c592654314a')) {function content_61c592654314a($_smarty_tpl) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme" <?php }?> onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
);return false;" alt="Удалить из корзины"> Удалить из корзины</a>
<a id="addCart<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
"   href="" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme" <?php }?>onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>


<p>Описание <br> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }} ?>