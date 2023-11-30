
<div style="height: ;" class="d-flex justify-content-center align-items-center flex-column">
    <div class="d-flex justify-content-center my-3">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Specializations
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd('')">All</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(1)">Developer</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(2)">Programmer</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(3)">Analyst</a></li>
                <li><a class="dropdown-item" href="#" wire:click.prevent="idd(4)">Designer</a></li>
            </ul>
        </div>
    </div>
    <div class="my-3"> 
        <table class="table table-striped-columns">
            <thead>
                <tr>
                <th scope="col">Officer Name</th>
                <th scope="col">Specialisation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($officers as $officer)
                    <tr>
                        <td>{{$officer->item_name}}</td>
                        <td>{{$officer->category->category_name}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>
