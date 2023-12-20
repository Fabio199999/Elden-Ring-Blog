<x-layout>

    <!-- CARD -->
<div class="container-fluid">
    <div class="row text-center">
            <div class="col-12 py-5">
                <h1>ECCO 4 CLASSI DI ELDEN RING</h1>
            </div>
    </div>
    <div class="row justify-content-around ">
         @foreach($class as $classi)
         <div class ="col-12 col-md-3">
             <x-card
            classImg="{{$classi['img']}}"
            classId="{{$classi['Id']}}"
            ></x-card>
        </div>
         @endforeach
    </div>
</div>
    <!-- END-CARD -->

</x-layout>