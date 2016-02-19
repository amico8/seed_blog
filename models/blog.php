<?php
	class Blog {
		// プロパティ
		private $dbconnect = '';

		// コンストラクタ
		public function __construct() {
			// DB接続ファイルの読込
			require('dbconnect.php');
			// DB接続設定の値を代入
			$this->dbconnect = $db;
		}

		public function index() {
			$sql = 'SELECT * FROM `blogs` WHERE `delete_flag` = 0';
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			// 取得結果を返す
			return $rtn;
		}

		public function show($id){
			$sql = 'SELECT * FROM `blogs` WHERE `id` =' . $id;
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			$result = mysqli_fetch_assoc($results);
			// 取得結果を返す
			return $result;
		}

		public function create($post){
			$sql = sprintf('INSERT INTO `blogs`(`title`, `body`, `delete_flag`, `created`) VALUES ("%s","%s",0,now())',
				mysqli_real_escape_string($this->dbconnect, $post['title']),
				mysqli_real_escape_string($this->dbconnect, $post['body'])
			 );

			mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
		}

		public function edit($id){
		}
	}
?>