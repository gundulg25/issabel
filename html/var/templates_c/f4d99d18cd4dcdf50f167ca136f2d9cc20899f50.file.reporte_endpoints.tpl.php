<?php /* Smarty version Smarty-3.1.21, created on 2020-11-15 22:45:28
         compiled from "/var/www/html/modules/endpoint_configurator/themes/default/reporte_endpoints.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13376165745fb1f5d807e474-63809660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4d99d18cd4dcdf50f167ca136f2d9cc20899f50' => 
    array (
      0 => '/var/www/html/modules/endpoint_configurator/themes/default/reporte_endpoints.tpl',
      1 => 1530733146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13376165745fb1f5d807e474-63809660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LBL_CANCEL' => 0,
    'LBL_SCAN' => 0,
    'LBL_STEP' => 0,
    'of' => 0,
    'TOOLTIP_CONFIGURE' => 0,
    'LBL_VIEW_LOG' => 0,
    'LBL_FORGET' => 0,
    'LBL_DOWNLOAD' => 0,
    'module_name' => 0,
    'LBL_CSV_LEGACY' => 0,
    'LBL_XML' => 0,
    'LBL_CSV_NESTED' => 0,
    'LBL_UPLOAD' => 0,
    'LBL_STATUS' => 0,
    'LBL_MAC_ADDRESS' => 0,
    'LBL_CURRENT_IP' => 0,
    'LBL_MANUFACTURER' => 0,
    'LBL_MODEL' => 0,
    'LBL_OPTIONS' => 0,
    'TOOLTIP_FROM_BATCH' => 0,
    'TOOLTIP_MODIFIED' => 0,
    'TOOLTIP_HAS_EXTENSIONS' => 0,
    'TOOLTIP_MISSING' => 0,
    'LBL_UNKNOWN' => 0,
    'LBL_CONFIGURE' => 0,
    'MSG_NO_ENDPOINTS' => 0,
    'lblStart' => 0,
    'lblPrevious' => 0,
    'showing' => 0,
    'lblNext' => 0,
    'lblEnd' => 0,
    'LASTOP_ERROR_MESSAGE' => 0,
    'ARRLANG_MAIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5fb1f5d80d5689_16057572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb1f5d80d5689_16057572')) {function content_5fb1f5d80d5689_16057572($_smarty_tpl) {?>
<div
    id="issabel-module-info-message"
    class="ui-state-highlight ui-corner-all"
    style="display: none;">
    <p>
        <span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
        <span id="issabel-module-info-message-text"></span>
    </p>
</div>

<div
    id="issabel-module-error-message"
    class="ui-state-error ui-corner-all"
    style="display: none;">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id="issabel-module-error-message-text"></span>
    </p>
</div>
<div id="endpointConfigApplication" style="background-color: #f0f0f0;">

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="loading">
<div style="text-align: center; padding: 40px;"><img src="images/loading.gif" /></div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="endpoints">
  <div class="neo-endpointconfig-header-row">
    
    {{#view
        style="cursor:default" }}
        {{#if scanInProgress }}
            <div class="neo-table-header-row-filter">
                <img src="images/loading.gif" style="height: 21px; vertical-align: middle;" />
                <button class="neo-table-action" {{action "scanCancel"}} ><?php echo $_smarty_tpl->tpl_vars['LBL_CANCEL']->value;?>
</button>
            </div>
        {{else}}
            {{#unless uiblock}}
                <div class="neo-table-header-row-filter">
                    {{view App.NetmaskView valueBinding="scanMask" }}
                    <button class="neo-table-action" title="<?php echo $_smarty_tpl->tpl_vars['LBL_SCAN']->value;?>
" {{action "scanStart"}} ><img align="absmiddle" src="images/searchw.png"/></button>
                </div>
            {{/unless}}
        {{/if}}
        {{#if configInProgress }}
            <div class="neo-table-header-row-filter">
                <?php echo $_smarty_tpl->tpl_vars['LBL_STEP']->value;?>
 {{completedsteps}} <?php echo $_smarty_tpl->tpl_vars['of']->value;?>
 {{totalsteps}} {{#if founderror}}(with errors){{/if}}
            </div>
            <div class="neo-table-header-row-filter" style="width: 600px;">
            {{view App.ConfigProgressView valueBinding="completedsteps" maxBinding="totalsteps" }}
            </div>
        {{else}}
	        {{#unless uiblock }}
	            <div class="neo-table-header-row-filter" title="<?php echo $_smarty_tpl->tpl_vars['TOOLTIP_CONFIGURE']->value;?>
" {{action "configStart"}} >
	                <button class="neo-table-action"><img align="absmiddle" src="images/endpoint.png"/></button>
	            </div>
	        {{/unless}}
        {{/if}}
        {{#unless uiblock }}
            {{#linkTo "endpoints.getconfiglog"}}
            <div class="neo-table-header-row-filter" title="<?php echo $_smarty_tpl->tpl_vars['LBL_VIEW_LOG']->value;?>
">
                <button class="neo-table-action" ><img align="absmiddle" src="images/list.png"/></button>
            </div>
            {{/linkTo}}
        {{/unless}}
        {{#if unsetInProgress }}
            <div class="neo-table-header-row-filter">
                <img src="images/loading.gif" style="height: 21px; vertical-align: middle;" />
            </div>
        {{else}}
	        {{#unless uiblock }}
	            <div class="neo-table-header-row-filter" title="<?php echo $_smarty_tpl->tpl_vars['LBL_FORGET']->value;?>
" {{action "forgetSelected"}} >
	                <button class="neo-table-action"><img align="absmiddle" src="images/delete5.png"/></button>
	            </div>
	        {{/unless}}
        {{/if}}
        {{#unless uiblock }}
            {{#view App.SubMenuView}}
                <div class="neo-table-header-row-filter" title="<?php echo $_smarty_tpl->tpl_vars['LBL_DOWNLOAD']->value;?>
" {{action "toggleMenu" target="view"}}>
                <button class="neo-table-action" ><img align="absmiddle" src="images/download2.png"/></button>
                </div>
                <div class="neo-endpointconfig-submenu" {{bindAttr style="view.menuStyle"}}>
                    <a href="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;action=download&amp;rawmode=yes&amp;format=legacy">
                    <img src="images/csv.gif" border="0" align="absmiddle" title="CSV" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['LBL_CSV_LEGACY']->value;?>

                    </a>
                    <a href="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;action=download&amp;rawmode=yes&amp;format=xml">
                    <img src="images/page.gif" border="0" align="absmiddle" title="XML" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['LBL_XML']->value;?>

                    </a>
                    <a href="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;action=download&amp;rawmode=yes&amp;format=nested">
                    <img src="images/csv.gif" border="0" align="absmiddle" title="CSV2" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['LBL_CSV_NESTED']->value;?>

                    </a>
                </div>
            {{/view}}
            {{#view App.SubMenuView}}
                <div class="neo-table-header-row-filter" title="<?php echo $_smarty_tpl->tpl_vars['LBL_UPLOAD']->value;?>
" {{action "toggleMenu" target="view"}}>
                <button class="neo-table-action"><img align="absmiddle" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/upload.png"/></button>
                </div>
                <div class="neo-endpointconfig-submenu" {{bindAttr style="view.menuStyleManual"}}>
                    {{#if fileUploadSupported}}
	                    {{view App.EndpointUploadView }}
	                    {{#if uploadInProgress }}
	                    {{view JQ.ProgressBar valueBinding="completedupload" maxBinding="totalupload" }}
	                    {{/if}}
                    {{else}}
                        <form method="POST" action="?" enctype="multipart/form-data">
                            <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
" />
                            <input type="hidden" name="action" value="upload" />
                            <input type="file" name="endpointfile[]" />
                            <input type="submit" class="button" name="legacyupload" value="<?php echo $_smarty_tpl->tpl_vars['LBL_UPLOAD']->value;?>
" />
                        </form>
                    {{/if}}
                </div>
            {{/view}}
        {{/unless}}
    {{/view}}
    {{view App.NeoNavigationView }}
  </div>
<div id="addonlist">

<table align="center" cellspacing="0" cellpadding="0" width="100%">
<tr class="neo-table-title-row">
    <td class="neo-table-title-row">{{view Ember.Checkbox checkedBinding="seleccionTodos"}}&nbsp;</td>
    <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['LBL_STATUS']->value;?>
</td>
    <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['LBL_MAC_ADDRESS']->value;?>
</td>
    <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['LBL_CURRENT_IP']->value;?>
</td>
    <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['LBL_MANUFACTURER']->value;?>
</td>
    <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['LBL_MODEL']->value;?>
</td>
    <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['LBL_OPTIONS']->value;?>
</td>
</tr>

{{#view tagName="tbody"}}
{{#each endpoint in content}}
<tr class="neo-table-data-row">
	<td class="neo-table-data-row">{{view Ember.Checkbox checkedBinding="endpoint.isSelected"}}</td>
    <td class="neo-table-data-row">
    {{#if endpoint.isFromBatch}}<span style="float: left;"><span class="ui-icon ui-icon-script" title="<?php echo $_smarty_tpl->tpl_vars['TOOLTIP_FROM_BATCH']->value;?>
"></span></span>{{/if}}
    {{#if endpoint.isModified}}<span style="float: left;"><span class="ui-icon ui-icon-disk"  title="<?php echo $_smarty_tpl->tpl_vars['TOOLTIP_MODIFIED']->value;?>
"></span></span>{{/if}}
    {{#if endpoint.hasExtensions}}<span style="float: left;"><span class="ui-icon ui-icon-person"  title="<?php echo $_smarty_tpl->tpl_vars['TOOLTIP_HAS_EXTENSIONS']->value;?>
"></span></span>{{/if}}
    {{#if endpoint.is_missing}}<span style="float: left;"><span class="ui-icon ui-icon-alert"  title="<?php echo $_smarty_tpl->tpl_vars['TOOLTIP_MISSING']->value;?>
"></span></span>{{/if}}
    </td>
    <td class="neo-table-data-row">{{endpoint.mac_address}}</td>
    <td class="neo-table-data-row">{{#if endpoint.last_known_ipv4}}<a target="_blank" {{bindAttr href="endpoint.adminUrl"}}>{{endpoint.last_known_ipv4}}</a>{{else}}<?php echo $_smarty_tpl->tpl_vars['LBL_UNKNOWN']->value;?>
{{/if}}</td>
	<td class="neo-table-data-row">{{endpoint.name_manufacturer}}</td>
	<td class="neo-table-data-row">{{view Ember.Select
	    contentBinding="endpoint.modelSelect"
	    optionValuePath="content.id_model"
        optionLabelPath="content.name_model"
        valueBinding="endpoint.id_model"
        disabledBinding="scanInProgress"}}</td>
    <td class="neo-table-data-row">
        {{#linkTo "endpoints.endpointconfig" endpoint }}[<?php echo $_smarty_tpl->tpl_vars['LBL_CONFIGURE']->value;?>
 {{endpoint.last_known_ipv4}}]{{/linkTo}}
    </td>
</tr>
{{else}}
<tr class="neo-table-data-row">
    <td class="neo-table-data-row" colspan="7"><?php echo $_smarty_tpl->tpl_vars['MSG_NO_ENDPOINTS']->value;?>
</td>
</tr>
{{/each}}
{{/view}}
</table>

</div>
<div id="footer" style="background: url(modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/endpointconfig_header_row_bg.png) repeat-x top; width: 100%; height:40px;">
{{view App.NeoNavigationView }}
</div>

{{outlet}}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="endpoints/endpointconfig">
<div
    id="issabel-module-error-message-dialog"
    class="ui-state-error ui-corner-all"
    style="display: none;">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id="issabel-module-error-message-text-dialog"></span>
    </p>
</div>
{{outlet}}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="endpoints/getconfiglog">

{{view App.FullTextArea
    valueBinding="log"
    disabled="disabled"}}

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="neo-navigation">
    <span {{action "displayStart"}}><img style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-first.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' /></span>
    <span {{action "displayPrevious" }}><img  style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-previous.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' /></span>
    (<?php echo $_smarty_tpl->tpl_vars['showing']->value;?>
 {{startPosition}} - {{endPosition}} <?php echo $_smarty_tpl->tpl_vars['of']->value;?>
 <span>{{completeList.length}}</span>)
    <span {{action "displayNext"}}><img style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-next.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' /></span>
    <span {{action "displayEnd"}}><img style="cursor: pointer;" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/table-arrow-last.gif" width="16" height="16" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' /></span>
<?php echo '</script'; ?>
>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
var lastop_error_message = <?php echo $_smarty_tpl->tpl_vars['LASTOP_ERROR_MESSAGE']->value;?>
;
var arrLang_main = <?php echo $_smarty_tpl->tpl_vars['ARRLANG_MAIN']->value;?>
;
<?php echo '</script'; ?>
>
<?php }} ?>
