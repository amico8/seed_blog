<?php
	require('models/blog.php');

	// コントローラのクラスをインスタンス化
	$controller = new BlogsController();

	// アクション名によって、呼び出すメソッドを変える
	// $action（グローバル変数）は、routes.phpで定義されているもの
	switch ($action) {
		case 'index':
			$controller->index();
			break;

		case 'show':
			$controller->show($id);
			break;

		case 'add':
			$controller->add();
			break;

		default:
			# code...
			break;
	}

	class BlogsController {
		// プロパティ
		private $action = '';
		private $resource = '';
		private $viewOptions = '';

		public function index() {
			// モデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->index();

			// foreach ($this->viewOptions as $viewOption) {
			// 	echo $viewOption['id'];
			// 	echo $viewOption['title'];
			// 	echo $viewOption['created'];
			// }

			// アクション名を設定する
			$this->action = 'index';

			// ビューを呼び出す
			include('views/layout/application.php');
		}

		public function show($id){
			$blog = new Blog();
			$this->viewOptions = $blog->show($id);

			// アクション名を設定する
			$this->action = 'show';

			// ビューを呼び出す
			include('views/layout/application.php');
		}

		public function add(){
			$this->action = 'add';
			include('views/layout/application.php');
		}
	}
?>
