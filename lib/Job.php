<?php 

 class Job
{
    private $db;
    
    public function __construct(){
      $this->db = new Database();
    }
    
    // Get all the jobs
    public function getAllJobs(){
       $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id ORDER BY post_date DESC");
       $results = $this->db->resultSet() ;  
       return $results;
    }
    
    // Get Categories
    public function getCategories(){
      $this->db->query("SELECT * FROM categories");
      $results = $this->db->resultSet() ;  
      return $results;
    }
    
    
    // Get jobs by categories
    public function getByCategory($category){
      $this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id WHERE jobs.category_id = $category ORDER BY post_date DESC");
      $results = $this->db->resultSet() ;  
      return $results;
    }
    
    //Get Single Category
    public function getCategory($category_id){
       $this->db->query("SELECT * FROM categories WHERE id = :category_id");
       $this->db->bind(':category_id', $category_id);
       
       // Assign row
       $row = $this->db->single() ;
       return $row;
    }
    
    
    public function getJob($id){
        $this->db->query("SELECT * FROM jobs WHERE id = :id");
        $this->db->bind(':id', $id);
        
        // Assign row
        $row = $this->db->single() ;
        return $row;
    }
    
    // Create Job
    public function create($data){
      //Insert Query
      $this->db->query('INSERT INTO jobs (category_id, jobTitle, company,description, location, salary, contactUser, contactUmail) 
                        VALUES(:category_id, :jobTitle, :company, :description, :location, :salary, :contactUser, :contactEmail)');
                        
      // Bind Data
      $this->db->bind(':category_id', $data['category_id']);
      $this->db->bind(':jobTitle', $data['jobTitle']);
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':location', $data['location']);
      $this->db->bind(':salary', $data['salary']);
      $this->db->bind(':contactUser', $data['contactUser']);
      $this->db->bind(':contactUmail', $data['contactEmail']);
      
      // Execute
      if ($this->db->execute()) {
        return true;
      }else{
         return false;
      }
    }
}


?>