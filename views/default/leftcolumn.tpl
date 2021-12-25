	{* левый столбец *}

<div id="leftColumn">


<div id="leftMenu">
	<div class="menuCaption">Меню:</div>
		{foreach from = $rsCategories item = item} 
                   <a href="/?controller=category&id={$item['id']}">{$item.name}</a><br />

                     
    {if isset($item['children'])}
      {foreach from = $item['children'] item = itemChild}
          --<a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a><br>
      {/foreach}
    {/if}
  {/foreach}


                   
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
            {if $cartCntItems > 0} {$cartCntItems}{else}пусто{/if}
            </span>



</div>