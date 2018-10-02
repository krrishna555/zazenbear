var products = <?php print json_encode($products); ?>;
var subcategories = <?php print json_encode( $subcategory_list ); ?>;
var materialtype = [{"nid":"Clear All","title":"Clear All"},{"nid":"Gold","title":"Gold"},{"nid":"White Gold","title":"White Gold"},{"nid":"Rose Gold","title":"Rose Gold"},{"nid":"Silver","title":"Silver"}];
var selectedSubcategory = "<?php print $selected_subcategory; ?>";
var selectedMaterialtype = "Clear All";
var sitems = [
    { text: 'Name', value: 1, childItems:
     [
         { text: 'Ascending', value: 11, 
         },
         { text: 'Decending', value: 12,
         }
     ]
    },
    { text: 'Price', value: 2, childItems:
     [
         { text: 'Highest to Lowest', value: 21, 
         },
         { text: 'Lowest to Highest', value: 22, 
         }
     ]
    }
];

var CategoryModel = function( products, subcategories, selectedSubcategory , selectedMaterialtype, materialtype , sitems) {
	var self = this;
	self.products = ko.observableArray( products );
	self.subcategories = ko.observableArray( subcategories );
	self.materialtype = ko.observableArray( materialtype );
	self.selectedSubcategory = ko.observable( selectedSubcategory );
	self.selectedMaterialtype = ko.observable( selectedMaterialtype );
	self.availableSort = ko.observableArray([
		'Highest to Lowest',
		'Lowest to Highest'
	]);
	self.selectedSort = ko.observable( 'Highest to Lowest' );
	
	self.availableoptionstype = ko.observableArray([
		'Ascending',
		'Descending'
	]);
	self.selectedoptionstype = ko.observable( 'Ascending' );
	self.selectedManufacturer= ko.observable( 'Name' );
	
	self.changeSubcategory = function( item ) {
		self.selectedSubcategory( item.title );
	}
	self.changeMaterialtype = function( item ) {
		self.selectedMaterialtype( item.title );
	}
	
	 this.manufacturers = ko.observableArray(sitems);
    this.selectedManufacturer = ko.observable();
    this.selectedModel = ko.observable();
  
    function getById(sitems, value) {
        if(!value) {
            return [];
        }
        
        var result = ko.utils.arrayFirst(sitems, function(item) {
            return item.value === value;
        });
        
        return result && result.childItems || [];
    }
    
    this.models = ko.computed(function(){
        var sitems = this.manufacturers();
		var id = this.selectedManufacturer()
        return getById(sitems, id);
    }, this);
    
    this.engines = ko.computed(function(){
        var sitems = this.models();
        var id = this.selectedModel()
        return getById(sitems, id);
    }, this);
	

	self.filteredProducts = ko.computed( function() {
		var subcategory = self.selectedSubcategory();
		var selectedMaterialtype = self.selectedMaterialtype();
		
		var selectedManufacturer = self.selectedManufacturer();
		//alert(selectedManufacturer);
		
		var selectedModel = self.selectedModel();
		//alert(selectedModel);
		
		var order = (self.selectedSort() === 'Highest to Lowest') ? -1 : 1;
		var orderop = self.selectedoptionstype();
        // alert(orderop);
		//alert(JSON.stringify(self.products()));
        if(selectedMaterialtype=='Clear All'){
          selectedMaterialtype='Clear All';
		}
        //alert(selectedMaterialtype);	
		
		if(selectedMaterialtype =='Clear All') {
			//alert('NO M');
			if(selectedManufacturer =='2') {
			var order = (self.selectedModel() == '21') ? -1 : 1;
			var items = JSLINQ( self.products() )
			.Where( function(item) {
				return item.subcategory === subcategory;		
			})
			.OrderBy( function(item) {
				return order*item.price_num;
			})
			.items;
			} else {
			var oofgg = self.selectedModel();
			if(oofgg=='12'){
				
			var items = JSLINQ( self.products() )
			.Where( function(item) {
				return item.subcategory === subcategory;		
			})
			.OrderByDescending( function(item) {
				return item.title;
			})
			.items;
			} else {
				var items = JSLINQ( self.products() )
			.Where( function(item) {
				return item.subcategory === subcategory;		
			})
			.OrderBy( function(item) {
				return item.title;
			})
			.items;
				
				} 
			
			} 
			
		} else {
			//alert('wih M');

			if(selectedManufacturer =='2') {
			var order = (self.selectedModel() == '21') ? -1 : 1;
			var items = JSLINQ( self.products() )
			.Where( function(item) {
				return item.subcategory === subcategory;		
			})
			.Where( function(item) {
				return item.material_type === selectedMaterialtype;	
			})
			.OrderBy( function(item) {
				return order*item.price_num;
			})
			.items;
			} else {
				
				var oofgg = self.selectedModel();
			if(oofgg=='12'){
				
			var items = JSLINQ( self.products() )
			.Where( function(item) {
				return item.subcategory === subcategory;		
			})
			.Where( function(item) {
				return item.material_type === selectedMaterialtype;	
			})
			.OrderByDescending( function(item) {
				return item.title;
			})
			.items;
			} else {

           var items = JSLINQ( self.products() )
			.Where( function(item) {
				return item.subcategory === subcategory;		
			})
			.Where( function(item) {
				return item.material_type === selectedMaterialtype;	
			})
			.OrderBy( function(item) {
				return item.title;
			})
			.items;

			}
			
			} 
			
			
			
			}
			
			
		return items;
	} );

	self.filteredCount = ko.computed( function() {
		return self.filteredProducts().length;
	});
	

};

ko.applyBindings(new CategoryModel(products, subcategories, selectedSubcategory, selectedMaterialtype, materialtype, sitems));
