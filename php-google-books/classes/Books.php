<?php 
namespace classes;

// Google
use Google_Client;
use Google_Service_Books;

// Dom
use DomDocument;
use DomXpath;
use cURL;

class Books{
   
    /**
     * Google_Client
     *
     * @var Object
     */
    private $client;
    
    /**
     * json_file
     *
     * @var String
     */
    private $oauth_credentials;


    /**
     * paginator num_pag
     *
     * @var Integer
     */
    private $num_pags = -1;


    /**
     * paginator total_books
     *
     * @var Integer
     */
    private $total_books = -1;


    /**
     * actual_page paginator variable
     *
     * @var Integer
     */
    private $actual_page = 1;

    /**
     * paginator total_sector_pags
     *
     * @var Integer
     */
    private $total_sector_pags = 20;


    /**
     * $_POST variable look for library books 
     *
     * @var String
     */
    private $keyword = "";


    /**
     * actual url
     *
     * @var String
     */
    private $url_results = "http://repositoriodavidberruezo/php-google-api/php-google-books/results.php";


    /**
     * url query google books
     *
     * @var String
     */
    private $url = "https://www.googleapis.com/books/v1/volumes";
    


    /**
     * array stdclass objects
     *
     * @var Array
     */
    private $items = "";

    /**
     * stdClass google book
     *
     * @var Object
     */
    private $item = "";


    /**
     * query to look for a books
     *
     * @var String
     */
    private $q = "";

    
    /**
     * options
     * "ebooks" - All Google eBooks.
     * "free-ebooks" - Google eBook with full volume text viewability.
     * "full" - Public can view entire volume text.
     * "paid-ebooks" - Google eBook with a price.
     * "partial" - Public able to see parts of text.
     *
     * @var String
     */
    private $filter = "";

    /**
     * language restriction code
     *
     * @var string
     */
    private $langRestrict = "es";

    /**
     * options
     * "no restriction"
     * "my-library"
     *
     * @var string
     */
    private $libraryRestrict = "no-restrict";     
    
    /**
     * Max results pagination
     *
     * @var integer
     */
    private $maxResults = 10;  


    /**
     * options
     * "newest"
     * "relevance"
     *
     * @var String
     */
    private $orderBy = "relevance"; 


    /**
     * Restrict and brand results for partner ID.
     *
     * @var String
     */
    private $partner = "";
    

    /**
     * Restrict to books or magazines.
     * options
     * "all" - All volume content types.
     * "books" - Just books.
     * "magazines" - Just magazines.
     * @var String
     * 
     */
    private $printType = "all";


    /**
     * Restrict information returned to a set of selected fields.
     * Acceptable values are:
     * "full" - Includes all volume data.
     * "lite" - Includes a subset of fields in volumeInfo and accessInfo. 
     * @var String
     */
    private $projection = "full";

    /**
     * Set to true to show books available for preorder. Defaults to false.
     *
     * @var Boolean
     */
    private $showPreorders = false;
    
    /**
     * String to identify the originator of this request.
     *
     * @var string
     */
    private $source = "";
    

    /**
     * index of books variable
     *
     * @var Integer
     */
    private $startIndex = 0;


    /**
     * google_client check_credentials function
     * google_client create_client function
     * google_client check_parametters function
     */

    public function __construct(){
        // construct
        session_start();
        $this->check_credentials();
        $this->create_client();
        $this->check_parametters();
        
        // no display nothing
        //ini_set("display_errors",1);
        error_reporting(0);
    }     


    /*************************************************
   * Ensure you've downloaded your oauth credentials
   ************************************************/

   /**
    * Undocumented function
    *
    * @return void
    */
   public function check_credentials(){
    
        if (!$oauth_credentials = getOAuthCredentialsFile()) {
            echo missingOAuth2CredentialsWarning();
            return;
        }else{
            $this->oauth_credentials = $oauth_credentials;
            //echo "credentials are ok";
        }

    }

    /************************************************
    * The redirect URI is to the current page, e.g:
    * http://localhost:8080/simple-file-upload.php
    ************************************************/

    /**
    * Undocumented function
    *
    * @return void
    */
    public function create_client(){
        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        $this->client = new Google_Client();
        $this->client->setAuthConfig($this->oauth_credentials);
        $this->client->setRedirectUri($redirect_uri);
        $this->client->addScope("https://www.googleapis.com/auth/books");
        $service = new Google_Service_Books($this->client);
        /*
        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);
        foreach ($results as $item){
            echo $item['volumeInfo']['title'];
        } 
        */   
    }

    /**
     * Check $_POST and $_GET function
     * if $_POST go to look_for_a_book parametters $_POST["buscar"]
     * if $_GET go to look_for_a_book paginator $_POST["pagina"]
     *
     * @return void 
     */
    private function check_parametters(){
        if($_POST){
            // initial paginator
            $this->total_books          = -1;
            $this->num_pags             = -1;
            //$_SESSION["total_books"]    = -1;
            $this->q = $_POST["buscar"];
            $url = $this->url . "?q=".$_POST["buscar"]."&startIndex=".$this->startIndex."&maxResults=". $this->maxResults. "&printType=" .$this->printType. "&projection=" .$this->projection. "&orderBy=" .$this->orderBy. "&oq=".$_POST["buscar"];
            $this->items = $this->look_for_a_book($url);
        }else if ($_GET){
            if (!$_GET["detail"]){
                $this->q = $_GET["keyword"];
                $this->startIndex = ( (int) $_GET["pagina"]-1) * 10;
                $url = $this->url . "?q=".$_GET["keyword"]."&startIndex=".( (int) $_GET["pagina"]-1)*10 ."&maxResults=" .$this->maxResults. "&printType=".$this->printType."&projection=".$this->projection."&orderBy=".$this->orderBy."&oq=".$_GET["keyword"];
                $this->items = $this->look_for_a_book($url);
            }else{
                $this->q = $_GET["keyword"];
                $url = $this->url . "/" .$_GET["id"];
                $this->item = $this->look_for_a_book($url);    
            }
        }
    }


    
    /**
     * Look for a book
     *
     * @param [type] $parametter
     * @return void
     */
    public function look_for_a_book($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $items = json_decode($result);
        //echo "El numero de items: ".$items->totalItems."<br>";
        $this->total_books        = $items->totalItems;
        $this->num_pags           = ceil($this->total_books / 10);
        //print_r($items);
        /*
        if ($this->total_books == -1 && $_SESSION["total_books"] == -1){
            $this->total_books        = $items->totalItems;
            $this->num_pags           = ceil($this->total_books / 10);
            echo "total registros: ".$this->total_books."<br>";
            echo "num pags: ".$this->num_pags."<br>";
            $_SESSION["total_books"] = $this->total_books;
        }else if ($_SESSION["total_books"] != -1){
            $this->total_books        = $_SESSION["total_books"];
            $this->num_pags           = ceil($this->total_books / 10);
            echo "total registros: ".$this->total_books."<br>";
            echo "num pags: ".$this->num_pags."<br>";
        }
        */
        curl_close($ch);
        return $items;
    }



    
    /**
     * tempate_form function
     *
     * @return void
     */
    private function template_form(){
        echo <<< EOT
            <script>
                $(document).ready(function() {
                    console.log('iniciado');
                    var cadena = '<form name="form1" id="form1" action="" method="post">';
                    cadena+= '<input type="text" name="buscar" id="buscar">';
                    cadena+= '<input type="submit" value="Buscar" id="enviar" name="enviar">';
                    cadena+='</form>';
                    $('body').append(cadena);
                });
            </script>
        EOT;
    }

    /**
     * template_pagination function
     *
     * @param [type] $items
     * @return void
     */
    private function template_pagination($items){
        echo <<< EOT
            <script>
                $(document).ready(function() {
                    console.log('iniciado');
                    $('body').empty();
                    var cadena = '<form name="form1" id="form1" action="" method="post">';
                    cadena+= '<input type="text" name="buscar" id="buscar">';
                    cadena+= '<input type="submit" value="Buscar" id="enviar" name="enviar">';
                    cadena+='</form>';
                    $('body').append(cadena);
                    cadena = '<div class="container">';
                    
                    cadena+= '</div>';
                });
            </script>
        EOT;
    }

    

    /**
     * Get undocumented variable
     *
     * @return  integer
     */ 
    public function getTotal_books()
    {
        return $this->total_books;
    }

    /**
     * Set undocumented variable
     *
     * @param  integer  $total_books  Undocumented variable
     *
     * @return  self
     */ 
    public function setTotal_books($total_books)
    {
        $this->total_books = $total_books;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  integer
     */ 
    public function getNum_pags()
    {
        return $this->num_pags;
    }

    /**
     * Set undocumented variable
     *
     * @param  integer  $num_pags  Undocumented variable
     *
     * @return  self
     */ 
    public function setNum_pags($num_pags)
    {
        $this->num_pags = $num_pags;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $items  Undocumented variable
     *
     * @return  self
     */ 
    public function setItems(string $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get undocumented variable
     *
     * @return  string
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $url  Undocumented variable
     *
     * @return  self
     */ 
    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get actual url
     *
     * @return  String
     */ 
    public function getUrl_results()
    {
        return $this->url_results;
    }

    /**
     * Set actual url
     *
     * @param  String  $url_results  actual url
     *
     * @return  self
     */ 
    public function setUrl_results(String $url_results)
    {
        $this->url_results = $url_results;

        return $this;
    }


    /**
     * Get undocumented variable
     *
     * @return  string
     */ 
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set undocumented variable
     *
     * @param  string  $keyword  Undocumented variable
     *
     * @return  self
     */ 
    public function setKeyword(string $keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

  

    /**
     * Get paginator total_sector_pags
     *
     * @return  [int]
     */ 
    public function getTotal_sector_pags()
    {
        return $this->total_sector_pags;
    }

    /**
     * Set paginator total_sector_pags
     *
     * @param  [int]  $total_sector_pags  paginator total_sector_pags
     *
     * @return  self
     */ 
    public function setTotal_sector_pags($total_sector_pags)
    {
        $this->total_sector_pags = $total_sector_pags;

        return $this;
    }

    /**
     * Get actual_page paginator variable
     *
     * @return  integer
     */ 
    public function getActual_page()
    {
        return $this->actual_page;
    }

    /**
     * Set actual_page paginator variable
     *
     * @param  integer  $actual_page  actual_page paginator variable
     *
     * @return  self
     */ 
    public function setActual_page($actual_page)
    {
        $this->actual_page = $actual_page;

        return $this;
    }

    /**
     * Get index of books variable
     *
     * @return  integer
     */ 
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * Set index of books variable
     *
     * @param  integer  $startIndex  index of books variable
     *
     * @return  self
     */ 
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;

        return $this;
    }

    /**
     * Get query to look for a books
     *
     * @return  String
     */ 
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Set query to look for a books
     *
     * @param  String  $q  query to look for a books
     *
     * @return  self
     */ 
    public function setQ(String $q)
    {
        $this->q = $q;

        return $this;
    }

    

    /**
     * Get stdClass google book
     *
     * @return  Object
     */ 
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set stdClass google book
     *
     * @param  Object  $item  stdClass google book
     *
     * @return  self
     */ 
    public function setItem(Object $item)
    {
        $this->item = $item;

        return $this;
    }
}
?>