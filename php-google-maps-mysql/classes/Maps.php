<?php 
namespace classes;

use classes\DB;
use PDO;
use DOMDocument;

/**
 * Map class
 */
class Maps 
{
	/**
	 * db variable
	 *
	 * @var [PDO]
	 */
	private $db;
	

	/**
	 * document variable
	 *
	 * @var [DOM]
	 */
	private $document;


	/**
	 * Root Document
	 *
	 * @var string
	 */
	private $root_document = "";


	/**
	 * __constructor function
	 */

	public function __construct(){
		// not options
	}	

	/**
	 * get_markers_by_dom
	 *
	 * @return markers
	 */

	public function get_markers_by_dom(){
		
		try {
			// DOM
			$this->document = new DOMDocument('1.0'); //Create new document with specified version number   

			// DB
			$this->db = DB::getInstance();
			DB::setCharsetEncoding();
		
			$sqlExample = 'SELECT * FROM markers';
			$stm = $this->db->prepare($sqlExample);
		
			$stm->execute();
			
			// first node
			$markers = $this->document->createElement('markers');
			

			foreach ( $stm->fetchAll(PDO::FETCH_OBJ) as $mark){
				$marker = $this->document->createElement('marker');
				$marker_text = $this->document->createTextNode('marker');
				$marker->appendChild($marker_text);
				// id
				$id = $this->document->createAttribute('id');
				$id->value = $mark->id;
				$marker->appendChild($id);
				// name
				$name = $this->document->createAttribute('name');
				$name->value = $mark->name;
				$marker->appendChild($name);
				// `id`, `name`, `address`, `lat`, `lng`, `type` 
				// address
				$address = $this->document->createAttribute('address');
				$address->value = $mark->address;
				$marker->appendChild($address);	
				// lat
				$lat = $this->document->createAttribute('lat');
				$lat->value = $mark->lat;
				$marker->appendChild($lat);
				// lng
				$lng = $this->document->createAttribute('lng');
				$lng->value = $mark->lng;
				$marker->appendChild($lng);
				// type
				$type = $this->document->createAttribute('type');
				$type->value = $mark->type;
				$marker->appendChild($type);
				
				$markers->appendChild($marker);
			}

			$this->document->appendChild($markers);
			$xml = $this->document->saveXML();
			$this->document->save('./xml/markers.xml'); // save as file
			//echo $xml;
			//echo "<br><br><br><br>";
			return $xml;
		
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}


	/**
	 * get_markers_by_Xml
	 *
	 * @return markers
	 */
	public function get_markers_by_parser_xml(){

		try {
			// Parser_xml
			$xml = "<?xml version='1.0' ?>"; 
			$xml.= "<markers>";

			// DB
			$this->db = DB::getInstance();
			DB::setCharsetEncoding();
		
			$sqlExample = 'SELECT * FROM markers';
			$stm = $this->db->prepare($sqlExample);
		
			$stm->execute();
			
			
			foreach ( $stm->fetchAll(PDO::FETCH_ASSOC) as $mark){
				// Add to XML document node
				$xml.='<marker ';
				$xml.='id="' . $mark['id'] . '" ';
				$xml.='name="' . $mark['name'] . '" ';
				$xml.='address="' . $mark['address'] . '" ';
				$xml.='lat="' . $mark['lat'] . '" ';
				$xml.='lng="' . $mark['lng'] . '" ';
				$xml.='type="' . $mark['type'] . '" ';
				$xml.='/>';
			}

			$xml.= "</markers>";
			//echo $xml;
			return xml;
		  
		} catch (Exception $e) {
			print $e->getMessage();
		}

	}


	/**
	 * Get the value of db
	 */ 
	public function getDb()
	{
		return $this->db;
	}

	/**
	 * Set the value of db
	 *
	 * @return  self
	 */ 
	public function setDb($db)
	{
		$this->db = $db;

		return $this;
	}
}
?>