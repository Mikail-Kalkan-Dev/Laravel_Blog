<x-layout>
    <article>
       <h1>{{$post->title}}</h1>

       <div>
        <p>
            By
            <a href="/authors/{{$post->author->name}}">{{$post->author->name}}</a>
            in
            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

        <p>
            {{ $post->body }}
        </p>
       </div>
    </article>


    <a href="/">Go Back</a>
</x-layout>
