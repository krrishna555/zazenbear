<?php
class addProduct {
		private $contents;
		private $json;

	public function __construct() {
		$json_dir = $this->get_script()."\zazenbear_products_load.json";
		$this->contents = file_get_contents($json_dir);
		$this->json = json_decode( $this->contents );
	}
	public function get_subcategory($item) {
		$nids = db_select('node', 'n')
			->fields('n', array('nid'))
			->condition('n.type', 'product_sub_category')
			->execute()
			->fetchCol(); // returns an indexed array

		// Now return the node objects.
		$nodes = node_load_multiple($nids);
		$list = array();
		foreach($nodes as $n){
			$list[$n->title] = $n->vid;
		}
		return $list[$item];
	}
	public function get_baseDir() {
		return getcwd();
	}
	public function get_script() {
		return getcwd()."\sites\all\modules\zazenbear_custom\scripts";
	}
	public function get_file() {
		return getcwd()."/sites/default/files/";
	}
	public function saveProduct() {
		$product_list = array();
		foreach( $this->json as $data ) {
			$node = $this->getNode( $data, $this->get_baseDir() . $this->module_location );
			node_save($node);
			$nid = $node->nid;
			$product_id = $data->product_id;
			$product_list[ $product_id ] = $nid;
		}
		return $product_list;
	}
	public function updateRelatedProduct($product_list) {
		foreach( $this->json as $data ) {
			$nid = $product_list[$data->product_id];
			$node = (object)node_load( $nid ); 
			$related = array();
			foreach( $data->related_product_id as $productId ) {
				if( !empty($productId) )
					$related[] = array("nid" => $product_list[ $productId ]);
			}
			$node->field_related_product["und"] = $related;
			node_save( $node );
		}
	}
	public function getNode( $data, $dir ) {
			$node = new stdClass();
			$node->type = 'product';
			node_object_prepare($node);
			$price = substr($data->price, 1);
			$node->title = $data->product_name;
			$node->uid = 1;
			$node->list_price = $price;
			$node->cost = $price;
			$node->sell_price = $price;
			$node->price = $price;
			$node->length = 1;
			$node->width = 1;
			$node->height = 1;
			$node->length_units = "in";
			$node->pkg_qty = 1;
			$node->default_qty = 1;
			$node->ordering = 0;
			$node->shippable = 1;
			$node->language = LANGUAGE_NONE;
			$node->model = $data->product_id;
			//echo $data->size_1; 
			$related = array();
			foreach( $data->material as $productId ) {
				if( !empty($productId) )
					$related[] = array("value" => $productId);
			};
			$node->field_material_type["und"] = $related;

			//New properties by Durga
			$node->field_finish = $data->finish;
			$node->field_color = $data->color;
			$node->field_gemstone= $data->gemstone;
			$node->field_multiple_size= $data->multiple_size;
			$node->field_dimensions= $data->size_1;
			$node->body[$node->language][0]['value']   = $data->description;
			$node->body[$node->language][0]['summary'] = text_summary($data->description);
			$node->body[$node->language][0]['format']  = 'full_html';
			$sub = $this->get_subcategory($data->item);
			if( !empty($sub) ) {
				$node->field_select_product_sub_categor["und"][0]["nid"] = $sub;
			}
			$images = $this->getImages( $data, $this->get_baseDir() );
			//echo "Image count". $images;
			$node->uc_product_image["und"] = $images;

			return $node;
	}
	public function getImages( $data, $dir ) {
		$images = array();
		foreach( $data->image_name as $image_name ) {
			$file_path = $this->get_file() . $image_name . ".jpg";
			if(file_exists($file_path)){			
				$file = new stdclass();
				$file->uid = 1;
				$file->uri = $file_path;
				$file->filemime = file_get_mimetype($filepath);
				$file->status = 1;
				$file->display = 1;

				$file = file_copy($file, 'public://');

				$images[] = (array)$file;
			} 
			//else 
			//{
			//	echo $file_path." not found";
			//}
		}

		return $images;
	}
}

$addProduct = new addProduct();
//Get Added Product List in $product_list variable
$product_list = $addProduct->saveProduct();
//Update Product for related product
$product_list = $addProduct->updateRelatedProduct($product_list);