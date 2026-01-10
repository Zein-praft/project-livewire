<?php

namespace App\Livewire\Catatan;

use App\Models\Catatan;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Livewire\Component;
use \Livewire\Attributes\On;

class Edit extends Component
{
    public $catatanId;
    public $judul;
    public $isi;

    #[On('edit-catatan')]
    public function edit($id)
    {
        $catatan = Catatan::findOrFail($id);

        $this->catatanId = $catatan->id;
        $this->judul = $catatan->judul;
        $this->isi = $catatan->isi;

        Flux::modal('edit-catatan')->show();
    }

    public function render()
    {
        return view('livewire.catatan.edit');
    }
}
