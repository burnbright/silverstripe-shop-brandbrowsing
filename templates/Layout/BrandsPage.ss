<% require themedCSS(brands) %>
<h1>$Title</h1>

$Content

<% if Brands %>
<div class="brands">
<% control Brands %>
	<div class="brand">
		<% if Logo %><div>
			<% if Link %><a href="$Link"><% end_if %>
			$Logo.SetWidth(160)
			<% if Link %></a><% end_if %>
		</div><% end_if %>
		<p class="name">
			<% if Link %><a href="$Link"><% end_if %>
			$Name
			<% if Link %></a><% end_if %>
		</p>
	</div>	
<% end_control %>
</div>
<% end_if %>
