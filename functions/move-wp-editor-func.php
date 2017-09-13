<?php
add_action('admin_head','admin_head_hook');
function admin_head_hook() { ?>
<style type="text/css">
    #default-editor #postdiv.postarea, #default-editor #postdivrich.postarea { margin:0; max-width: 100%;}
    #default-editor #post-status-info { line-height:1.4em; font-size:13px; }
    #default-editor #custom_editor .inside { margin:2px 6px 6px 6px; }
    #default-editor #ed_toolbar { display:none; }
    #default-editor #postdiv #ed_toolbar, #default-editor #postdivrich #ed_toolbar { display:block; }
    #default-editor .wp-editor-expand #wp-content-editor-tools {background: white; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; }
    #default-editor #ed_toolbar {min-width: 100%; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; }
</style>
<?php }
add_action('admin_footer','admin_footer_hook');
function admin_footer_hook() { ?>
	<script type="text/javascript">
		jQuery('#postdiv, #postdivrich').prependTo('#z-default-editor .inside');
	</script>
<?php } ?>