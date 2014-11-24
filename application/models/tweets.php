<?php
	class Tweets extends CI_Model
	{
		public function countByUser($id_usuario)
		{
			return $this->db->where('codigo_usuario', $id_usuario)->count_all_results('tweets');
		}

		public function insert($dados)				//criado ##########
		{
			$this->db->insert('tweets', $dados);
			return $this->db->insert_id();
		}

		public function getByCodigo($codigo)
		{
			return $this->db->where('codigo_usuario', $codigo)->get('tweets')->result();
		}

		


		

	}

/* End of file tweets.php */