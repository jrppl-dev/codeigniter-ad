<?php

namespace Core\Controllers;

use App\Controllers\BaseController;
use Core\Entities\Article;
use Core\Models\ArticleModel;

class ArticlesController extends BaseController
{
    public function index()
    {
        $model = new ArticleModel();

        return view('Core\Articles\index', [
            'articles' => $model->limit(10)->orderBy('id', 'desc')->find(),
        ]);
    }

    public function show(int $id)
    {
        $model = new ArticleModel();

        return view('Core\Articles\show', [
            'article' => $model->find($id),
        ]);
    }

    public function create()
    {
        $model = new ArticleModel();

        $entity = new Article($this->request->getPost());

        $model->insert($entity);

        return redirect()->to('/articles')
            ->with('errors', $model->errors())
            ->withInput();
    }
}