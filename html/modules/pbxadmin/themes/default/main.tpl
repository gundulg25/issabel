<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td valign="top" width="220">
      <div id="nav">
        <div id="nav-setup" class="tabs-container">

          <ul>
            {foreach name=outer key=category item=menucategory from=$leftmenu}
                <li class="category category-header accordion" ><div 
                  id="accordionExample{md5($category)}" 
                  class="accordion-button collapsed" 
                  data-toggle="collapse" 
                  data-target="#accordion{md5($category)}" 
                  aria-expanded="true" 
                  aria-controls="#accordion{md5($category)}"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#nav-setup"

                  >{$category} <div class="pull-right" style="margin-right:10px;"><i class="fa  fa-caret-right"></i></div></div></li>
                <ul  id="accordion{md5($category)}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample{md5($category)}">
                {foreach name=inner item=menuitem from=$menucategory}

                    <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display={$menuitem.urlkey}"  >{$menuitem.name}</a></li>
                {/foreach}
              </ul>
            {/foreach}
<!-- 
            <li  class="category category-header accordion hidden" ><div id="accordionExample-options" data-toggle="collapse" data-target="#accordion-options" aria-expanded="true" aria-controls="#accordion-options">{$Option}<div class="pull-right" style="margin-right:10px;"><i class="fa  fa-caret-right"></i></div></div></li>
            <ul  id="accordion-options" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordionExample-options">
              <li style="float:left;border-right:0px"><a href="/admin/" target="_blank">{$Unembedded_IssabelPBX}</a></li>
            </ul>
            <div style="height:0px" class="hidden">
                <a href="#" class="info"><span style='margin-left:0.2cm; margin-top:-1.8cm; width:303px'>{$INFO}</span></a>
            </div>
 -->
          </ul>
        </div>{* div id="nav-setup" *}
      </div>{* div id="nav" *}
      <br /> <br /> <br /> <br />
    </td>
    <td id="content_pbx" valign="top">{$htmlFPBX}</td>
  </tr>
  {if $isissabelpbx == "0"}
  <tr>
    <td></td>
    <td valign="bottom">
      <div align="center">
      </div>
    </td>
  </tr>
  {/if}
</table>
