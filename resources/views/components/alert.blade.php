<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

@if(session()->has('success'))
    {{session()->get('success')}}

@elseif($errors->any())
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
@endif
</div>