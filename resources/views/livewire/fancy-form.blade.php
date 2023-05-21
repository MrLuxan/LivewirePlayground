<div>
    FancyForm - {{$submitFunc}}
    <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">
    <!-- <form wire:submit.prevent="submit"> -->
        <input type="text" id="fname" name="fname" value="John"><br>
        @error('fname') <span class="error">{{ $message }}</span> @enderror
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        @error('lname') <span class="error">{{ $message }}</span> @enderror

        <livewire:weight-input inputName="weight" />
        @error('weight') <span class="error">{{ $message }}</span> @enderror
        <livewire:length-input inputName="userHeight" />
        @error('userHeight') <span class="error">{{ $message }}</span> @enderror

        <input class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white" type="submit" value="Submit">

    </form>



</div>
