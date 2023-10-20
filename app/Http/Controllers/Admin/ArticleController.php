<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;
use App\Service\CategoryService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    protected $articleService;
    protected $categoryService;

    public function __construct(
        ArticleService $articleService,
        CategoryService $categoryService)
    {
        $this->articleService = $articleService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = $this->articleService->getAll();
        return view('admin.pages.article.data',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = $this->categoryService->getCategoryArticle();
        return view('admin.pages.article.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->articleService->save($request);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
