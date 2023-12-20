    <!-- CARD -->
        <div class="card bg-black text-light py-5 " style="width: 18rem;">
            <img src="{{$classImg}}" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni accusamus dignissimos neque commodi eum non! Sequi qui harum beatae.</p>
            </div>
            <a href = "{{route('show', ['classId' => $classId])}}" class ="btn btn-warning">Dettaglio</a>
        </div>
    <!-- END-CARD -->