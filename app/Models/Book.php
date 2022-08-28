<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class Book extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * The roles that belong to the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'authors_to_books');
    }

    /**
     * The languages that belong to the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    /**
     * Get the Language that the Book is written with
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function scopeInStock($query)
    {
        $query->where('quantity', '>', 0);
    }

    public function getFavouriteAttribute(){
        return Favourite::where('user_id', 1)->where('book_id', $this->id)->first();
    }

    public function scopePublished(Builder $query, $date){
        return $query->where('published', '<=', $date);

        //Carbon::parse($date)
    }

    public function scopePriceBetween(Builder $query, $min, $max){
        return $query->whereBetween('price', [$min, $max]);
    }

}
