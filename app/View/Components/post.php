<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class post extends Component

{
    /**
     * Create a new component instance.
     */
    public $post ;
    public function __construct($post )
    {
        $this->post = $post;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'

<div>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>

        <div class="blog-post">
                <h2 class="blog-post-title">
                    {{ $post->title }}
                </h2>
            <p class="blog-post-meta">
                <a href="#">بقلم {{ $post->author }}</a>
                {{ Carbon\Carbon::parse($post->created_at)-> diffForHumans()}}
            </p>
            <p class="my-2">
                {{$post->body}}
            </p>
blade;
    }
}
