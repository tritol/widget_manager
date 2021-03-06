<?php
/**
* Profile widgets/tools
*/

$show_widgets = false;
$group_enable = elgg_get_plugin_setting('group_enable', 'widget_manager');
if ($group_enable == 'forced') {
	// forced enabled
	$show_widgets = true;
} elseif ($group_enable == 'yes') {
	// managed by group tool option
	$group_enable_tool = $vars['entity']->widget_manager_enable;
	if ($group_enable_tool == 'yes') {
		$show_widgets = true;
	} elseif (empty($group_enable_tool) && (elgg_get_plugin_setting('group_option_default_enabled', 'widget_manager') == 'yes')) {
		$show_widgets = true;
	}
}

if ($show_widgets) {
	// need context = groups to fix the issue with the new group_profile context
	elgg_push_context('groups');
	echo elgg_view_layout('widgets', ['num_columns' => 2, 'exact_match' => true]);
	elgg_pop_context();
} else {
	// traditional view
	
	// tools widget area
	echo '<ul id="groups-tools" class="elgg-gallery elgg-gallery-fluid mtl clearfix">';
	
	// enable tools to extend this area
	echo elgg_view("groups/tool_latest", $vars);
	
	echo "</ul>";
}
