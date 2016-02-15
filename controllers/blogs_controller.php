<?php

	// コントローラのクラスをインスタンス化
	$controller = new BlogsController();

	// アクション名によって、呼び出すメソッドを変える
	// $action（グローバル変数）は、routes.phpで定義されているもの
	switch ($action) {
		case 'index':
			$controller->index();
			break;

		default:
			# code...
			break;
	}

	class BlogsController {
		public function index() {
			echo 'コントローラのindex()が呼ばれました！';
		}
	}
?>
