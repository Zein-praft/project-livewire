<?php

namespace App\Livewire\Catatan;

use App\Models\Catatan;
use Flux\Flux;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    public $catatanId;

    public function edit($id) 
    {
        $this->dispatch('edit-catatan', $id);
    }

    public function delete($id)
    {
        $this->catatanId = $id;
        Flux::modal('delete-catatan')->show();
    }

    public function render()
    {
        // $catatans = Catatan::orderBy('created_at', 'desc')
        // ->paginate(5);

        // return view('livewire.catatan.index', [
        //     'catatans' => $catatans,
        // ]);
        // return view('livewire.catatan.index', [
        //     'data' => 'Hello Wolrd'
        // ]);
        $users = \App\Models\User::orderBy('id', 'asc')
            ->take(10) 
            ->get();

        return view('livewire.catatan.index', [
            'users' => $users,
        ]);
    }

    public function delteCatatan()
    {
        Catatan::findOrFail($this->catatanId)->delete();
        Flux::modal('delete-catatan')->close();
        session()->flash('succes', 'Catatan berhasil dihapus.');
    }
}
