<?php

namespace Core\Models;

use CodeIgniter\Model;
use Core\Entities\Article;

class ArticleModel extends Model
{
    protected $table = 'articles';
    protected $allowedFields = ['title', 'content'];

    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'content' => 'required|min_length[3]|max_length[255]',
    ];

    protected $returnType = Article::class;
}