<?php
class View_Page_Index extends View_Layout{
	public $blogs,$comments;
	public function blogs(){
		$results = array();
		foreach($this->blogs as $r){
			$temp = array(
				'url' => Route::url('blog_show',array('id'=>$r['id'],'slug'=>$r['slug'])),
				'title'=>$r['title'],
				'blog'=>$this->truncate($r['blog'],500),
				'author'=>$r['author'],
				'created'=>$r['created'],
				'tags'=>$r['tags'],
				'comments'=>$r['comments']
			);
			$results[] = $temp;
		}
		return $results;
	}



	private function truncate($string,$length){
		if(strlen($string)>$length){
			return substr($string,0,$length).'...';
		}
		else{
			return $string;
		}
	}
}