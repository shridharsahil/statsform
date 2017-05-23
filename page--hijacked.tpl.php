<h1>This page is hijacked</h1>
<div>Notice that the regions of the body are gone and replaced by this template. You will have to learn how to use hook_html_head_alter() in order to modify things in the head element, like jquery version loaded, etc.</div>
<div><?php print render($page['content']); ?></div>