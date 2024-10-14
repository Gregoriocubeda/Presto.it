<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEditForm extends Component
{
    public $article;
    public $title;
    public $price;
    public $description;

    public function mount(){
        $this->title = $this->article->title;
        $this->price = $this->article->price;
        $this->description = $this->article->description;
        }
        

        public function updateArticle(){
            $this->article->update([
            "title"=>$this->title,
            "subtitle"=>$this->subtitle,
            "price"=>$this->price,
            "body"=>$this->description
            ]);
            session()->flash('success', 'Articolo modificato correttamente');

        }


        public function render()
    {
        return view('livewire.article-edit-form');
    }
}
