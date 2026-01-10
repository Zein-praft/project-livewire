<div>
    <flux:modal name="edit-catatan" class="md:w-900">
        <div>
            <flux:heading size="lg">Edit Catatan</flux:heading>
            <flux:text class="mt-2">Make changes to your catatan details.</flux:text>
        </div>
            <flux:input label="Judul" wire:model="judul" placeholcer="Masukkan Judul Catatan" />
            <flux:textarea label="Isi" wire:model="isi" placeholder="Masukkan Isi Catatan" />
        <div class="flex">
            <flux:button type="submit" variant="primary" wire:click="update">update changes</flux:button>
        </div>
    </flux:modal>
</div>