<div>
    FanyForm - {{$submitFunc}}
    <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
        <input type="text" id="fname" name="fname" value="John"><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>

        <livewire:weight-input />
        <livewire:length-input />

        <input class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white" type="submit" value="Submit">

    </form>



</div>
