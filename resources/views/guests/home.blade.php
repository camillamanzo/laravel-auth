<h1>2021 Nobel Prices:</h1>

@foreach ($nobels as $nobel )
    <div class="col-3">
        <div class="text-start mb-5">
            <h3 class="my-3">{{ $nobel->name }}</h3>
            <p>{{ $nobel->reason_nobel }}</p>
            <br>
        </div>
    </div>
@endforeach