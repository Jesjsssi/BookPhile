<?php 
class Model_kategori extends CI_Model{

    public function __construct() {
        parent::__construct(); 
   }

   // Fetch records
   public function getAllPosts($userid) {

        // Posts
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->order_by("id", "asc");
        $postsquery = $this->db->get();

        $postResult = $postsquery->result_array();

        $posts_arr = array();
        foreach($postResult as $post){
             $id = $post['id'];
             $title = $post['title'];
             $link = $post['link'];
             $content = $post['content'];

             // User rating
             $this->db->select('rating');
             $this->db->from('tb_rating');
             $this->db->where("userid", $userid);
             $this->db->where("barang_id", $id);
             $userRatingquery = $this->db->get();

             $userpostResult = $userRatingquery->result_array();

             $userRating = 0;
             if(count($userpostResult)>0){
                   $userRating = $userpostResult[0]['rating'];
             }

             // Average rating
             $this->db->select('ROUND(AVG(rating),1) as averageRating');
             $this->db->from('tb_rating');
             $this->db->where("barang_id", $id);
             $ratingquery = $this->db->get();

             $postResult = $ratingquery->result_array();

             $rating = $postResult[0]['averageRating'];

             if($rating == ''){
                   $rating = 0;
             }

             $posts_arr[] = array("id"=>$id,"title"=>$title,"content"=>$content,"link"=>$link,"rating"=>$userRating,"averagerating"=>$rating);
        }

        return $posts_arr;
   }

   // Save user rating
   public function userRating($userid,$barang_id,$rating){
        $this->db->select('*');
        $this->db->from('rating');
        $this->db->where("barang_id", $barang_id);
        $this->db->where("userid", $userid);
        $userRatingquery = $this->db->get();

        $userRatingResult = $userRatingquery->result_array();
        if(count($userRatingResult) > 0){

             $postRating_id = $userRatingResult[0]['id'];
             // Update
             $value=array('rating'=>$rating);
             $this->db->where('id',$postRating_id);
             $this->db->update('rating',$value);
        }else{
             $userRating = array(
                  "barang_id" => $barang_id,
                  "userid" => $userid,
                  "rating" => $rating
             );

             $this->db->insert('rating', $userRating);
        }

        // Average rating
        $this->db->select('ROUND(AVG(rating),1) as averageRating');
        $this->db->from('rating');
        $this->db->where("barang_id", $barang_id);
        $ratingquery = $this->db->get();

        $postResult = $ratingquery->result_array();

        $rating = $postResult[0]['averageRating'];

        if($rating == ''){
              $rating = 0;
        }

        return $rating;
   }
}
