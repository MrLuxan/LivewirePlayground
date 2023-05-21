<div>
    <input type="text" id="weight" name="weight" wire:model="weightkg">
    <select wire:model="weightType" name="weightPicker" id="weightPicker">
        <option value="killo">Kg</option>
        <option value="stone">st</option>
    </select>

    - {{ $weightkg }} - 
</div>
