@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div id="cadastro-processo"></div>
    </div>
</div>

<script>
    window.addEventListener('load', () => {
        $(document).on('click', '.caret', (e) => {
            e.target.parentElement.querySelector(".nested").classList.toggle("active");
            e.target.classList.toggle("caret-down");
        })

        $(document).on('click', '#salvarClasse', ()=> {
            document.querySelector('input[name="classeProcessual"]').value = document.querySelector('input[name="classe"]:checked').parentElement.textContent
        })
    })


</script>
@endsection