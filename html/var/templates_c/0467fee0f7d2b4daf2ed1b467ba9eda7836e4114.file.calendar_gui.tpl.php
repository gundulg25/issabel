<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:41:26
         compiled from "/var/www/html/modules/calendar/themes/default/calendar_gui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2180157925fb1f4e6c2e5a9-27709318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0467fee0f7d2b4daf2ed1b467ba9eda7836e4114' => 
    array (
      0 => '/var/www/html/modules/calendar/themes/default/calendar_gui.tpl',
      1 => 1532462280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2180157925fb1f4e6c2e5a9-27709318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LBL_CREATE_EVENT' => 0,
    'LBL_EXPORT_CALENDAR' => 0,
    'module_name' => 0,
    'LBL_LINK_ICAL' => 0,
    'SERVER_YEAR' => 0,
    'SERVER_MONTH' => 0,
    'EVENT_ID' => 0,
    'EVENT_DIALOG' => 0,
    'ARRLANG_MAIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f4e6c40586_08587208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f4e6c40586_08587208')) {function content_5fb1f4e6c40586_08587208($_smarty_tpl) {?><form  method='POST' style='margin-bottom:0;' name='formCalendar' id='formCalendar'>
<br />
<table class="tabForm" width="100%"><tr>
	<td id="calendar_toolbar" width="10%" align="left" valign="top">
	    <div id="calendar_buttonbox" style="margin: 0px 10px 6px 10px; text-align: center;" valign="middle">
	        <button type='button' class='button' id="calendar_newevent" ><i class="fa fa-plus"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LBL_CREATE_EVENT']->value;?>
</button>
	    </div>
	    <div id="calendar_datepick">
	    </div>
	    <div id="calendar_ical_links" class="ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
            <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all title_size"><?php echo $_smarty_tpl->tpl_vars['LBL_EXPORT_CALENDAR']->value;?>
</div>
            <div class="content_ical">
                <a href="/rest.php/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/CalendarEvent?format=ical">
                    <span><i class="fa fa-download"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LBL_LINK_ICAL']->value;?>
</span>
                </a>
            </div>
	    </div>
	</td>
	<td align="right" width="90%">
	   <div id="calendar_main"></div>
	</td>
</tr></table>

<input type="hidden" name="server_year" value="<?php echo $_smarty_tpl->tpl_vars['SERVER_YEAR']->value;?>
" />
<input type="hidden" name="server_month" value="<?php echo $_smarty_tpl->tpl_vars['SERVER_MONTH']->value;?>
" />

<input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['EVENT_ID']->value;?>
" />
</form>

<div id="calendar_eventdialog" style="display: none;">
<?php echo $_smarty_tpl->tpl_vars['EVENT_DIALOG']->value;?>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
var arrLang_main = <?php echo $_smarty_tpl->tpl_vars['ARRLANG_MAIN']->value;?>
;
<?php echo '</script'; ?>
>
<?php }} ?>
