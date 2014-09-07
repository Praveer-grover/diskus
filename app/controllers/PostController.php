<?php
	class PostController extends BaseController{
		
		function post_ques(){
			if(Input::has('question')){
				$post = new Post;
				
			}
		}

		function get_ques(){

		}

		function submit_ans(){

		}

		function update_rating(){

		}
		
	}
?>