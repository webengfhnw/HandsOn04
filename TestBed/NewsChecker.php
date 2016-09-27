<?php
// NewsChecker.php
class NewsChecker
{
    private $quantityOfNews;

    public function checkForNews()
    {
        if ($this->quantityOfNews > 0) {
            require_once("NewsRepository.php");
            $news = new NewsRepository();
            $news->showNews($this->quantityOfNews);
        }
    }
}
