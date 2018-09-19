<?php

	class Movie
	{
		private $title;
		private $rating;
		private $release_date;

		public function __construct($title, $rating, $release_date = NULL)
		{
			$this->title = $title;
			$this->rating = $rating;
			if ($release_date == NULL) {
				$this->release_date = date("Y-m-d");
			} else {
				$this->release_date = $release_date;
			}
		}

		public function getTitle()
		{
			return $this->title;
		}

		public function getTitleYear()
		{
			return $this->title . ' ' . substr($this->release_date, 0, 4);
		}
	}
