<ul id="subcategories" data-bind="foreach: subcategories">
	<li data-bind="css: (title == $parent.selectedSubcategory() ? 'selected' : '')"><a href="#" data-bind="text: title, click: $parent.changeSubcategory"></a></li>
</ul>

<ul id="filters">
<?php foreach( $product_filters as $filter ): ?>
	<li><?php print $filter; ?></li>
<?php endforeach; ?>
</ul>

Sort By <select data-bind="options: availableSort,
		  value: selectedSort"></select>

<p>Number of Products: <span data-bind="text: filteredCount"></span></p>

<div id="products" data-bind="foreach: filteredProducts">
	<div>
			  <a data-bind="attr: { href:path }”><p data-bind="text: image_url"></p></a>
			  <a data-bind="attr: { href:path }”><h2 data-bind="text: title"></h2></a>
			  <p data-bind="text: description"></p>
			  <p data-bind="text: price"></p>
                              
	</div>
</div>
