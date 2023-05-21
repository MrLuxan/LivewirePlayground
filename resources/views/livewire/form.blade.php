<div class="flex flex-col items-center" st>

    <div style="height:20px width: 80%; position:relative; margin:30px 0">
        <div id="bar" style="height:10px; width: {{ (50 * $step) ."%" }}; background-color:red; position: absolute; left:0px; top:5px;"></div>
        <div id="gem1" style="height:20px; width:20px; background-color:red; position: absolute; left:0px" ></div>
        <div id="gem2" style="height:20px; width:20px; background-color:red; position: absolute; left:50%" ></div>
        <div id="gem3" style="height:20px; width:20px; background-color:red; position: absolute; right:0px" ></div>
    <div>

    <br>
    <br>

    <div style="display: flex; flex-wrap: nowrap; justify-content: space-between; width: 80%;">

        <div style="opacity: {{$step == 0 ? 1.0 : 0.3}};">
            <livewire:fancy-form submitFunc="SubmitOne" :rules="$rules1"/>
        </div>
        <div style="opacity: {{$step == 1 ? 1.0 : 0.3}};">
            <livewire:fancy-form submitFunc="SubmitTwo" :rules="$rules2"/>
        </div>            
    </div>

    <br><br><br><br><br>
    {{$step}} 
</div>