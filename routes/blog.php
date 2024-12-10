<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\BlogCategoryController;


// Admin Routes
Route::prefix('admin/blog')->name('admin.')->group(function(){

    // Apply middleware to all routes except login
    Route::middleware(['admin.session'])->group(function () {
        
    //blog-category
    Route::get('/category', [BlogCategoryController::class, 'index'])->name('blog-category');
    
    
    Route::get('/posts', [BlogPostController::class, 'index'])->name('blog-posts');
    Route::get('/posts/create', [BlogPostController::class, 'create'])->name('blog-posts.create');
    Route::post('/posts', [BlogPostController::class, 'store'])->name('blog-posts.store');
    Route::get('/posts/{id}/edit', [BlogPostController::class, 'edit'])->name('blog-posts.edit');
    Route::get('/posts/{id}/show', [BlogPostController::class, 'show'])->name('blog-posts.show');
    Route::put('/posts/{id}/update', [BlogPostController::class, 'update'])->name('blog-posts.update');
    Route::delete('/posts/{id}/delete', [BlogPostController::class, 'destroy'])->name('blog-posts.destroy');

    });
});