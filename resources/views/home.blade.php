@extends('layouts.main')

@section('main-content')
    @forelse ($trains as $train)
    <div class="row py-5">
        <h2 class="text-center text-white"> INFO TRENO</h2>
        <div class="col-12 bg-white d-flex px-5 py-5 border border-dark">
            <div class="col-3 bg-dark text-center py-3">
                <h3 class="text-white">Stai viaggiando con : </h3>
                <span class="d-block h4 text-danger">{{ $train->agency }}</span>
            </div>
            <div class="col-9 d-flex text-center justify-content-between px-4">
                <div>
                    <span class="h3 main-color fw-bold">Stazione di partenza</span>
                    <span class="d-block h5 mt-5">{{ $train->station_start }}</span>
                </div> 
                <div>
                    <span class="h3 main-color fw-bold">Stazione di arrivo</span>
                    <span class="d-block h5 mt-5">{{ $train->station_arrive }}</span>
                </div> 
                <div>
                    <span class="h3 main-color fw-bold">Orario di partenza</span>
                    <span class="d-block h5 mt-5"></span>
                </div> 
                <div>
                    <span class="h3 main-color">Orario di arrivo</span>
                    <span class="d-block h5 mt-5">{{  }}</span>
                </div>                  
            </div>
        </div>
    </div>
    @empty
        <h2 class="text-center display-2">ABBIAMO FINITO I TRENIIII</h2>
    @endforelse
@endsection