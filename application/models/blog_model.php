<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_all(){
        $this -> db ->order_by('post_date','desc');
//        $this -> db ->limit(3);限制查询的条数
        return $this -> db ->get('t_blog') -> result();
    }
    public function get_by_category($cate_id){
        $this -> db ->order_by('post_date','desc');
//        $this -> db ->limit(3);限制查询的条数
        return $this -> db ->get_where('t_blog',array('cate_id'=> $cate_id)) -> result();
    }
    public function get_by_id($blog_id){
        //第一种方式
        $this -> db -> select('blog.*,cate.cate_name');
        $this -> db -> from('t_blog blog');
        $this -> db -> join('t_blog_category cate','blog.cate_id=cate.cate_id');
        $this -> db -> where('blog.blog_id',$blog_id);
        return $this -> db -> get() -> row();
        //第二种方式
//        $query = $this -> db -> query('select blog.*,cate.cate_name from t_blog blog,t_blog_category cate where blog.cate_id=cate.cate_id and blog.blog_id='.$blog_id);
//        return $query -> row();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */