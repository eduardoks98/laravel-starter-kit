<?php

namespace App\Models;

use App\Core\BaseModel;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class Article extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'article' => AsCollection::class,
    ];

    /**
     * Store a newly created resource in storage.
     *
     * @param  array  $validated
     * @return \App\Models\Article
     */
    public static function store(array $validated)
    {
        $fillables = fillKeysWith(self::new()->getFillable(), $validated);
        $article = self::create($fillables);

        return $article;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  array  $validated
     * @param  \App\Models\Article  $article
     * @return \App\Models\Article
     */
    public static function edit(array $validated, Article $article)
    {
    }
}
