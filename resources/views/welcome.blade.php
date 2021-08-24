@extends('plantilla')

@section('seccion')
<section class="content">
        <div class="home">
            <img class="home-img" alt="">
        </div>
    </section>
    <section class="content_text">
        <div class="content_home_text">
            <h3>Yo <span class="text_home">Cambio</span> el mundo. Soy una <span class="text_home">ingeniera</span></h3>
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo praesentium error quod maiores quam. Accusantium ipsam reprehenderit at fugiat quia illum totam deserunt iusto fugit architecto minus, similique vitae soluta!</span>
            <span class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta accusamus, nemo repellat fugiat sapiente ad dignissimos corporis</span>
            <span class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a, iusto reprehenderit harum aliquid mollitia eos nesciunt fuga earum dolor </span>
        </div>
    </section>

            @foreach ( $texts as $txt)
            <h1>{{$txt->txt_header}}</h1>
            @endforeach

</div>


@endsection