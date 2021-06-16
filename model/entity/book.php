<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected int $id;
    protected string $title;
    protected string $author;
    protected string $release_date;
    protected string $category;
    protected string $status;
    protected string $summary;
    protected ?string $customer_id;

    public function __construct(?array $data=null){
        if($data){
            foreach($data as $key=>$value){
                $setter= "set". ucfirst($key);
                if(method_exists($this,$setter)){
                    $this->$setter($value);
                }
            }
        }
    }

    public function setId(int $id){
        $this->id= $id;
    }

    public function getId(){
        return htmlspecialchars($this->id);
    }

    
    public function setTitle(string $title){
        $this->title= $title;
    }

    public function getTitle(){
        return htmlspecialchars($this->title);
    }

    public function setAuthor(string $author){
        $this->author= $author;
    }

    public function getAuthor(){
        return htmlspecialchars($this->author);
    }

    public function setRelease_date(string $release_date){
        $this->release_date= $release_date;
    }

    public function getRelease_date(){
        return htmlspecialchars($this->release_date);
    }

    public function setCategory(string $category){
        $this->category= $category;
    }

    public function getCategory(){
        return htmlspecialchars($this->category);
    }

    //changement de statut par le setter????
    public function setStatus(string $status){
        $this->status= $status;
    }

    public function getStatus(){
        return htmlspecialchars($this->status);
    }

    public function setSummary(string $summary){
        $this->summary= $summary;
    }

    public function getSummary(){
        return htmlspecialchars($this->summary);
    }

    public function setCustomer_id(?string $customer_id){
       $this->customer_id=$customer_id;
    }

    public function getCustomer_id(){
        return htmlspecialchars($this->customer_id);
    }
}
