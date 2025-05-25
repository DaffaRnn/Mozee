<?php
namespace App\Models;

class Post{
    public static function all(){
        return [
        [
            'id' => 1,
            'slug' => 'title-article-1',
            'title' => 'Title Article 1',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ducimus asperiores laboriosam odit enim aperiam ipsum repellendus quas, corporis, non voluptates, est vel nemo impedit dolorem quisquam at blanditiis dolor.'
        ],
        [
            'id' => 2,
            'slug' => 'title-article-2',
            'title' => 'Title Article 2',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi et, exercitationem tempora reprehenderit quos corporis rem architecto ipsum tempore? Quasi dolore magnam fuga molestiae sit ratione dolorem ducimus ullam similique.'
        ]
        ];
    }
}
