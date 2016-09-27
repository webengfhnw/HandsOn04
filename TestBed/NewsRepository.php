<?php
// NewsRepository.php
class NewsRepository
{
    public function showNews($quantity)
    {
        for ($i = 1; $i <= $quantity; $i++) {
            echo "News number " . $i;
        }
    }
}