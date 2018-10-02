
<div class="container">
	<div id="subcategories" data-bind="foreach: subcategories">
		<span data-bind="css: (title == $parent.selectedSubcategory() ? 'selected' : '')"><a href="#" data-bind="text: title, click: $parent.changeSubcategory"></a></span>
	</div>
</div>

<?php
//print_r($product_filters);
?>

<div id="filtersListItems">
	<div class="container">
		<div id="filtersWrapper">Filters
			<div id="filters" data-bind="foreach: materialtype">
				<span data-bind="css: (title == $parent.selectedMaterialtype() ? 'selected-Active' : '')">
				<a href="#" data-bind="text: title, click: $parent.changeMaterialtype"></a>
				</span>
			</div>
			<div id="filtersSelect"> 
				<!-- Name
				 <select data-bind="options: availableoptionstype, value: selectedoptionstype"></select>
				 Price
				 <select data-bind="options: availableSort, value: selectedSort"></select>
				 -->
		Sort by		 
		<select data-bind="options: manufacturers, optionsText: 'text', optionsValue: 'value', value: selectedManufacturer"></select>
        <select data-bind="options: models, optionsText: 'text', optionsValue: 'value', value: selectedModel, enable: models().length"></select>
       
	 
			</div>
		</div>	
	</div>	  
</div>	


<h2 id="numberOfItems"> <span data-bind="text: filteredCount"></span></h2>

<div id="products" data-bind="foreach: filteredProducts">
	<div class="subcategoriesProductsWrapper col-md-3 col-xs-6">
		<a data-bind="attr: {href: '/' + path}">
			<img data-bind="attr:{src: image_url}" alt=""/>
			<h2 data-bind="text: title"></h2>
			<p data-bind="text: description" class="product-description"></p>
			<p class="signDollar"><span data-bind="text: price"></span></p>
		</a>

	</div>
</div>
