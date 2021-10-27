<?php

namespace App\Http\Livewire\Admin\Fundrising;

use Livewire\Component;
use App\Models\Fundrising;
use Livewire\WithFileUploads;

class Store extends Component
{
    use WithFileUploads;
    public $title, $target, $photo;

    public function store()
    {
        $fundrising = Fundrising::create([
            'title' => $this->title,
            'target' => $this->target,
            'user_id' => auth()->user()->id,
        ]);

        $fundrising->addMediaFromDisk('/livewire-tmp/'.$this->photo->getFilename())->toMediaCollection('images');

        return redirect()->route('admin.fundrising.index')->with('success', 'Settings updated successfully.');
    }
    public function render()
    {
        return view('livewire.admin.fundrising.store');
    }
}
